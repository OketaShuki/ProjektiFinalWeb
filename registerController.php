<?php
include_once 'userRepository.php';
include_once 'user.php';

if (isset($_POST['registerBtn'])) {
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $surname = isset($_POST['surname']) ? trim($_POST['surname']) : "";
    $username = isset($_POST['username']) ? trim($_POST['username']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";

    if (empty($name) || empty($surname) || empty($username) || empty($password)) {
        echo '<span style="background-color: rgb(139, 78, 37);">Fill all fields!</span>';
    } else {
        $id = time();
        $user = new User($id, $name, $surname, $username, $password);

        $userRepository = new UserRepository();
        $result = $userRepository->insertUser($user);

        if ($result === true) {
            header("Location: index.php");
            exit();
        } else {
            echo '<span style="background-color: rgb(139, 78, 37);">Error registering user: ' . $result . '</span>';
        }
    }
}
?>
