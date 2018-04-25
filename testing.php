<?php
    include_once 'top-nav.php'
?>

<html>
	<head>
		<title>Staff List</title>
        <link rel="stylesheet" type="text/css" href="css/staff.css">
        <link rel="stylesheet" type="text/css" href="css/buttons.css">
	</head>
	<body>
		<div class="row">
			<div class="column">
				<div class="card">
                    <div class="img1">
                    <img src="images/img1.png" alt="arcadex_profile" style="width:100%">
                    </div>
					<div class="containerE">
						<h2>Arcadex <font color="#ff4c4c">&#10004;</font></h2>
							<p class="title">Founder | Developer</p>
							<p>Administration and Management</p>
                            <button class="red">Developer</button>
                            <button class="yellow">Administrator</button>
                            <button class="blue">Management</button>
							<p><form action="profiles/arcadex.php" method="POST"><button class="button">View Profile</button></form></p>
					</div>
				</div>
			</div>
        </div>
    </body>
    <!-- <?php
        include_once 'footer.php'
    ?> ->
</html>
