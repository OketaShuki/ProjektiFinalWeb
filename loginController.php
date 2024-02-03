<?php
include_once 'userRepository.php';

if (isset($_POST['loginBtn'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo '<span style="background-color: rgb(139, 78, 37);">Fill both username and password!</span>';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userRepository = new UserRepository();

        // Assuming getUserByUsername returns a User object or null
        $user = $userRepository->getUserByUsername($username);

        if ($user !== null && password_verify($password, $user->getPassword())) {
            // Successful login
            session_start();
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['username'] = $user->getUsername();
            echo '<span style="background-color: green;">Login successful!</span>';
            // You can redirect the user to a dashboard or another page here
        } else {
            // Failed login
            echo '<span style="background-color: rgb(139, 78, 37);">Invalid username or password!</span>';
        }
    }
}
?>
