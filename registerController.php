<?php
include_once 'userRepository.php';
include_once 'user.php';

if (isset($_POST['registerBtn'])) {
    if (empty($_POST['name']) || empty($_POST['surname']) ||
        empty($_POST['username']) || empty($_POST['password'])) {
        echo '<span style="background-color: rgb(139, 78, 37);">Fill all fields!</span>';
    } else {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $id = time();
        $user = new User($id, $name, $surname, $username, $password);

        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}
?>
