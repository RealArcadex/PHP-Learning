<?php
    session_start();
    include_once 'sidebar.php'
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css">
</head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php"></a></li>
            </ul>
            <?php
            if (isset($_SESSION['u_id'])) {
                echo '<form action="adminp/index.html" method="POST"><div class="adminpanel"><button class="red">Admin Panel</button></div></form>';
            } else {
                echo 'test';
            }
            ?>
            <div class="nav-login">
                <?php
                    if (isset($_SESSION['u_id'])) {
                        /*echo "<div class='login-user'>"$_SESSION['u_uid'];"</div>";*/
                        echo
                        '<div class="logout"><form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name="submit">Logout</button>
                        </form></div>';
                    } else {
                        echo '<form action="includes/login.inc.php" method="POST">
                        <input type="text" name="uid" placeholder="Username/email"
                        >  
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">Login</button>
                        </form>
                        <a href="signup.php"></a>';
                    }
                ?>
                <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '';
                    } else {
                        echo '<div class="signup">
                        <a href="signup.php">Sign Up!</a>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </nav>
</header>
<!--
    				<div class="signup">
					<a href="signup.php">Sign Up!</a>
                </div>
-->