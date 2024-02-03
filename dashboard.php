<?php
include_once 'userRepository.php';

$userRepository = new UserRepository();
$users = $userRepository->getAllUsers();

// Separate users by role
$admins = array_filter($users, function ($user) {
    return $user['role'] === 'admin';
});

$regularUsers = array_filter($users, function ($user) {
    return $user['role'] === 'user';
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Admins</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Role</th>
        </tr>
        <?php
        foreach ($admins as $admin) {
            echo "
               <tr>
                   <td>{$admin['id']}</td>
                   <td>{$admin['name']}</td>
                   <td>{$admin['surname']}</td>
                   <td>{$admin['username']}</td>
                   <td>{$admin['password']}</td>
                   <td><a href='edit.php?id={$admin['id']}'>Edit</a></td>
                   <td><a href='delete.php?id={$admin['id']}'>Delete</a></td>
                   <td>" . (isset($admin['role']) ? $admin['role'] : 'N/A') . "</td> 
               </tr>
               ";
        }
        ?>
    </table>

    <h2>Regular Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Role</th>
        </tr>
        <?php
        foreach ($regularUsers as $user) {
            echo "
               <tr>
                   <td>{$user['id']}</td>
                   <td>{$user['name']}</td>
                   <td>{$user['surname']}</td>
                   <td>{$user['username']}</td>
                   <td>{$user['password']}</td>
                   <td><a href='edit.php?id={$user['id']}'>Edit</a></td>
                   <td><a href='delete.php?id={$user['id']}'>Delete</a></td>
                   <td>" . (isset($user['role']) ? $user['role'] : 'N/A') . "</td> 
               </tr>
               ";
        }
        ?>
    </table>
</body>
</html>
