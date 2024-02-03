<?php

include_once 'DatabaseConenction.php';

class UserRepository {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$dbConnection = new DatabaseConenction();
$db = $dbConnection->startConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    $errors = array(); 

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (!empty($errors)) {
        header("Location: login.html?error=" . urlencode(implode("<br>", $errors)));
        exit();
    }

    $userRepository = new UserRepository($db);
    $user = $userRepository->getUserByUsername($username);

    if ($user) {
        $storedPassword = $user["password"] ?? "";
    
  
        if (password_verify($password, $storedPassword)) {
            echo "<script> alert('User has logged in successfully!'); </script>";
            header("Location: home.html");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }
    

}

?>
