<?php
$userId = $_GET['id'];
include_once 'userRepository.php';

$userRepository = new UserRepository();
$user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id" value="<?= $user['ID'] ?>" readonly><br>
        <input type="text" name="name" value="<?= $user['Name'] ?>"><br>
        <input type="text" name="surname" value="<?= $user['Surname'] ?>"><br>
        <input type="text" name="username" value="<?= $user['Username'] ?>"><br>
        <input type="text" name="password" value="<?= $user['Password'] ?>"><br>
        <input type="submit" name="editBtn" value="Save"><br>
    </form>

    <?php
    if (isset($_POST['editBtn'])) {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        $userRepository->updateUser($id, $name, $surname, $username, $password);
        header("location: dashboard.php");
    }
    ?>
</body>
</html>
