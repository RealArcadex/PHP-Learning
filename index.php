<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Home</h2>
		<body>
        <?php
            if (isset($_SESSION['u_id'])) {
                echo "You are logged in!";
            }
			include_once 'sidebar.php';
        ?>
		<center><font color="red">Whoops! You caught us whilst we haven't even figured out what we're doing!</font></center>
		</body>
	</div>
</section>

<?php
    include_once 'footer.php';
?>