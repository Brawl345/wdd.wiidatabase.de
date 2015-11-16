<?php
$shownpage_page = array("page_idf" => "index", "title" => "Home", "description" => "Der Homebrew-Downloader wurde eingestellt (Ankündigung)");
include("templates/headInclude.php");
include("templates/navbar.php");
?>

	<div id="headerwrap">
	    <div class="container">
    <?php include("templates/meldungen.php"); ?>
	    	<div class="row centered">
	    		<div class="col-lg-12">
					<h1><strong>Ein wichtiger Hinweis</strong></h1>
					<h3>Der Wii-Homebrew-Downloader für Windows "WDD" wurde eingestellt.</h3><br><br>          
	    		</div>
	    		
	    		<div class="col-lg-12">
	    			<h2><strong>Eine Nachricht vom WiiDatabase Team</strong></h2>
	    			<p>Vielen Dank für dein Interesse am WiiDataDownloader, dem Wii-Homebrew-Downloader für Windows. Leider müssen wir dir mitteilen, dass die Entwicklung am Programm am 16. November 2015 eingestellt wurde.<br>
					Den Code des Programms findest du weiterhin auf <a href="https://github.com/Brawl345/WiiDataDownloader" target="_blank">GitHub</a>.</p>
					
					<h2><strong>F.A.Q.</strong></h2>
					<p><strong>Warum wird WDD eingestellt?</strong><br>
					Das ganze ist eine Ein-Mann-Show und dementsprechend fehlt es an Personen, die das Projekt unabhängig weiterleiten würden. Downloads neu packen, jeden Download verifizieren, etc., das Ganze tue ich schon auf der WiiDatabase selbst, warum also nicht mal <a href="http://wiidatabase.de">dort vorbeischauen?</a></p>
					
					<p><strong>Wann wird WDD eingestellt?</strong><br>
					Die Entwicklung wird mit sofortiger Wirkung am 16. November 2015 eingestellt.
					</p>
					
					<p><strong>Wie lange kann ich WDD noch benutzen?</strong><br>
					Bis zum 29. November 2015, danach ist es nicht mehr möglich, Daten vom Server herunterzuladen. Die Webseite bleibt bis zum 3. Dezember 2015 bestehen.
					</p>
					
					<p><strong>Wo finde ich die Downloads danach?</strong><br>
					Nachwievor auf WiiDatabase.de. Nachfolgend eine Auflistung aller Programme, die über WDD heruntergeladen werden konnten:<br>
					<a href="http://wiidatabase.de/downloads/pc-tools/customizemii-2/">CustomizeMii</a> - <a href="http://wiidatabase.de/downloads/pc-tools/devkitppc/">devkitPro</a> - <a href="http://wiidatabase.de/downloads/pc-tools/dmlizard/">DMLizard</a> - <a href="http://wiidatabase.de/downloads/pc-tools/nus-downloader/">NUSD</a> - <a href="http://wiidatabase.de/downloads/pc-tools/showmiiwads/">ShowMiiWads</a> - <a href="http://wiidatabase.de/downloads/pc-tools/usbloader-gx-theme-creator/">USBLoader GX Theme Creator</a> - <a href="http://wiidatabase.de/downloads/pc-tools/wbfs2fat/">WBFS2FAT</a> - <a href="http://wiidatabase.de/downloads/pc-tools/wii-backup-manager/">Wii Backup Manager</a> - <a href="http://wiidatabase.de/downloads/pc-tools/wiigsc-ehemals-crap/">WiiGSC</a> - <a href="http://wiidatabase.de/downloads/pc-tools/wilbrand-launcher/">Wilbrand Launcher</a>
					</p>
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->

<?php include("templates/footer.php"); ?>
<?php include("templates/htmlEnd.php"); ?>
