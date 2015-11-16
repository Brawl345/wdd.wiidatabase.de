<?php
$shownpage_page = array("page_idf" => "404", "title" => "404", "description" => "Der Homebrew-Downloader - immer aktuell - 404");
include("templates/headInclude.php");
include("templates/navbar.php");
?>

	<div id="headerwrap">
	    <div class="container">
    <?php include("templates/meldungen.php"); ?>
	    	<div class="row centered">
	    		<div class="col-lg-12">
					<h1><b>WDD</b> wurde eingestellt</h1>
					<h3>WiiDataDownloader - ein Homebrew-Downloader für Windows.</h3>
		<a class="btn btn-lg btn-success" href="index.php" role="button">Ankündigung lesen</a>
					<h3>(404)</h3>
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->
<?php include("templates/footer.php"); ?>
<?php include("templates/htmlEnd.php"); ?>
