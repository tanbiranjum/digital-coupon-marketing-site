<?php
define("URL", "http://localhost/Admin");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Page</title>
</head>

<body style="margin:0px;">
    <table style="width:100%; border-collapse:collapse; font:14px Arial,sans-serif;">
        <tr>
            <td colspan="2" style="padding:10px 20px; background-color:#acb3b9;">
                <h1 style="font-size:24px;">Admin</h1>
            </td>
            <td style="padding:10px 20px; background-color:#acb3b9;" align="right">
                <button type="submit" name="logout" align="right">Log out</button>
            </td>
        </tr>
        <tr style="height:100vh;">
            <td style="width:20%; padding:20px; background-color:#d4d7dc; vertical-align: top;">
                <ul style="list-style:none; padding:0px; line-height:24px;">
                    <li><a href="<?php echo URL . "/views/product.view.php" ?>" style="color:#333;">Product Management</a></li>
                    <li><a href="<?php echo URL . "/views/customer.view.php" ?>" style="color:#333;">Customer Management</a></li>
                    <li><a href="<?php echo URL . "/views/activity.view.php" ?>" style="color:#333;">Site Activity</a></li>
                    <li><a href="<?php echo URL . "/views/inbox.view.php" ?>" style="color:#333;">Top Product List</a></li>
                    <li><a href="<?php echo URL . "/views/inbox.view.php" ?>" style="color:#333;">Message</a></li>
                    <li><a href="#" style="color:#333;">Settings</a></li>
                </ul>
            </td>
            <td style="padding:20px; background-color:#f2f2f2; vertical-align:top;" colspan="2">