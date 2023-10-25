<?php
include "header.view.php";
include "../autoload.php";
$carInfo = new SalecarformView();

// Fetch user data
$users = $carInfo->fetchUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/adminstyle.css">
</head>
<body>
    <div class="admin-panel">
        <h1>Welcome to the Admin Panel</h1>

        <h2>Users</h2>
        <table>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['user_id']; ?></td>
                    <td><?= $user['user_uid']; ?></td>
                    <td><?= $user['user_email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <button><a href="adminpanel.view.php">Admin Cars</a></button>
    </div>
</body>
</html>
