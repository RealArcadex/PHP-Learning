<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Home</h2></br>
		<body>
        <?php
            if (isset($_SESSION['u_id'])) {
                echo "You are logged in!";
            }
			include_once 'sidebar.php';
        ?>
		<div class="updates">
            </br>
            <div class="header-up">
            <b><font size="6"><center>News &amp; Updates</center></font></b>
            </div>
            </br>
            <div class="update-april"> <!-- dont change name // if do replace it in style.css -->
            <p>Unfinished ⁃ <b>00/05/18</b></p>‣</br>
            <p>Unfinished ⁃ <b>00/05/18</b></p>‣<br/>
            <p>Unfinished ⁃ <b>00/05/18</b></p>
            </div>
            <div class="view-index1">
            <button class="green">View</button>
            </div>
            <div class="april-title">
                <center><?php
                    echo date("d/m/y")
                ?></center>
            </div>
            <div class="update-may">
                <p>Unfinished ⁃ <b>00/06/18</b></p>‣</br>
                <p>Unfinished ⁃ <b>00/06/18</b></p>‣<br/>
                <p>Unfinished ⁃ <b>00/06/18</b></p>
            </div>
            <div class="view-index2">
            <button class="blue">View</button>
            </div>
        </div>
		<!-- <p align="right"><a class="twitter-timeline" height="1000px" width="350px" href="https://twitter.com/ArcadexFR?ref_src=twsrc%5Etfw">Tweets by ArcadexFR</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p align="right"> -->
        </body>
	</div>
</section>

<?php
    include_once 'footer.php';
?>