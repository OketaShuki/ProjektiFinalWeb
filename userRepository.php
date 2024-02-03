<?php

include_once 'DatabaseConenction.php';

class UserRepository {
    private $connection;

    public function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;
    
        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $username = $user->getUsername();
        $password = $user->getPassword();
    
        $sql = "INSERT INTO user (id, name, surname, username, password) VALUES (?, ?, ?, ?, ?)";
    
        $statement = $conn->prepare($sql);
    
        try {
            $statement->execute([$id, $name, $surname, $username, $password]);
            return true; 
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage(); 
        }
    }
    

    public function getAllUsers(){
        $conn = $this->connection;

        
        $sql = "SELECT id, name, surname, username, password, role FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    function getUserById($id) {
        $conn = $this->connection;

        $sql = "SELECT id, name, surname, username FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    function updateUser($id, $name, $surname, $username, $password) {
        try {
            $conn = $this->connection;

            $sql = "UPDATE user SET name=?, surname=?, username=?, password=? WHERE id=?";

            $statement = $conn->prepare($sql);

            if (!$statement) {
                throw new Exception("Error preparing statement: " . $conn->errorInfo()[2]);
            }

            $statement->execute([$name, $surname, $username, $password, $id]);

            return "Update was successful";
        } catch (PDOException $e) {
            return "Error updating user: " . $e->getMessage();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function deleteUser($id) {
        try {
            $conn = $this->connection;

            $sql = "DELETE FROM user WHERE id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$id]);

            return "Delete was successful";
        } catch (PDOException $e) {
            return "Error deleting user: " . $e->getMessage();
        }
    }
    function getAllUsersByRole($role) {
        $conn = $this->connection;
    
        
        $sql = "SELECT id, name, surname, username, password, role FROM user WHERE role = ?";
    
        $statement = $conn->prepare($sql);
        $statement->execute([$role]);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $users;
    }
}

?>
