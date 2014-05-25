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
					<h3>WiiDataDownloader - ein Homebrew-Downloader für Windows.</h3>
		<a class="btn btn-lg btn-danger" href="https://raw.githubusercontent.com/Brawl345/WiiDataDownloader/master/WDD%20installieren.exe" role="button">Download</a>
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
          <a href="img/wddinstaller2.png"><img class="img-responsive responsive-centered" src="img/wddinstaller2.png" alt="Klicke auf Weitere Informationen"></a><br>
          <a href="img/wddinstaller3.png"><img class="img-responsive responsive-centered" src="img/wddinstaller3.png" alt="Klicke auf Trotzdem Ausführen"></a><br>
          <a href="img/wddinstaller4.png"><img class="img-responsive responsive-centered" src="img/wddinstaller4.png" alt="Bestätige die UAC-Warnung"></a><br>
          <a href="img/wddinstaller5.png"><img class="img-responsive responsive-centered" src="img/wddinstaller5.png" alt="Wähle einen Installationsordner"></a><br><br>
          <a href="img/wddinstaller6.png"><img class="img-responsive responsive-centered" src="img/wddinstaller6.png" alt="Fertig!"></a><br>
			</div>
			</div>
			</div>
	    </div> <!--/ .container -->
	</div><!--/ #introwrap -->
<?php include("templates/footer.php"); ?>
<?php include("templates/htmlEnd.php"); ?>
