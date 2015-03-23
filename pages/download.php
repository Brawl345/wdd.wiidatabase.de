<?php
$shownpage_page = array("page_idf" => "download", "title" => "Download", "description" => "Der Homebrew-Downloader - immer aktuell - Download");
include("templates/headInclude.php");
include("templates/navbar.php");
?>

	<div id="headerwrap">
	    <div class="container">
    <?php include("templates/meldungen.php"); ?>
	    	<div class="row centered">
	    		<div class="col-lg-12">
					<h1><b>Downloade</b> WDD</h1>
					<h3>WiiDataDownloader - ein Wii-Homebrew-Downloader für Windows.</h3>
		<a class="btn btn-lg btn-danger" href="https://raw.githubusercontent.com/Brawl345/WiiDataDownloader/master/WDD%20installieren.exe" role="button">Download</a><br><br>
		<a class="btn btn-lg btn-warning" href="https://raw.githubusercontent.com/WiiDatabase/Inno-Setups/master/WiiDataDownloader/Output/WDD-setup.exe" role="button">Teste den neuen Installer</a><br>
					<h3>(fr&uuml;he Alpha)</h3>
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->
	<!-- INTRO WRAP -->
	<div id="intro">
	<div class="container">
	<div class="row centered">
	    <div class="col-lg-12">
          <a href="img/wddinstaller1.png"><img class="img-responsive responsive-centered" src="img/wddinstaller1.png" alt="Führe den Installer aus"></a><br>
          <a href="img/wddinstaller4.png"><img class="img-responsive responsive-centered" src="img/wddinstaller2.png" alt="Bestätige die UAC-Warnung"></a><br>
          <a href="img/wddinstaller5.png"><img class="img-responsive responsive-centered" src="img/wddinstaller3.png" alt="Wähle einen Installationsordner"></a><br>
          <a href="img/wddinstaller6.png"><img class="img-responsive responsive-centered" src="img/wddinstaller4.png" alt="Fertig!"></a><br>
			</div>
			</div>
			</div>
	    </div> <!--/ .container -->
	</div><!--/ #introwrap -->
<?php include("templates/footer.php"); ?>
<?php include("templates/htmlEnd.php"); ?>
