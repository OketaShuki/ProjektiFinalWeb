<?php 
include_once 'DatabaseConenction.php';
include_once 'user.php';

class UserRepository{
    private $connection;

    function __construct(){
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
    
        $statement->execute([$id, $name, $surname, $username, $password]);
    
        echo "<script> alert('User has been inserted successfully!'); </script>";
    }


    function getUserByUsername($username) {
        $conn = $this->connection;
    
        $sql = "SELECT * FROM user WHERE username=?";
    
        try {
            $statement = $conn->prepare($sql);
            $statement->execute([$username]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);
    
            if ($user && isset($user['id'], $user['name'], $user['surname'], $user['username'], $user['password'])) {
                return new User($user['id'], $user['name'], $user['surname'], $user['username'], $user['password']);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            // Log or handle the exception as needed
            die("Error getting user by username: " . $e->getMessage());
        }
    }

    function getAllUsers(){
        $conn = $this->connection;
    
        // Make sure to select only the columns that exist in your 'user' table
        $sql = "SELECT id, name, surname, username, password FROM user";
    
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();
    
        return $users;
    }
    

    function getUserById($id){
    $conn = $this->connection;

    $sql = "SELECT * FROM user WHERE id=?";

    $statement = $conn->prepare($sql);
    $statement->execute([$id]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    return $user;
    }


    function updateUser($id, $name, $surname, $username, $password) {
        $conn = $this->connection;
    
        $sql = "UPDATE user SET name=?, surname=?, username=?, password=? WHERE id=?";
    
        $statement = $conn->prepare($sql);
    
        if (!$statement) {
            die(print_r($conn->errorInfo(), true));  // Display any errors
        }
    
        $statement->execute([$name, $surname, $username, $password, $id]);
    
        echo "<script>alert('update was successful'); </script>";
    }
     

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}


//  $userRepo = new UserRepository;

//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>