<?php
$shownpage_page = array("page_idf" => "index", "title" => "Home", "description" => "Der Homebrew-Downloader - immer aktuell");
include("templates/headInclude.php");
include("templates/navbar.php");
?>

	<div id="headerwrap">
	    <div class="container">
    <?php include("templates/meldungen.php"); ?>
	    	<div class="row centered">
	    		<div class="col-lg-12">
					<h1><b>WDD</b></h1>
					<h3>WiiDataDownloader - ein Wii-Homebrew-Downloader für Windows.</h3>
		<?php if ($os == "Windows") {echo '<a class="btn btn-lg btn-danger" href="download.php" role="button">DOWNLOADE WDD</a>';}
		else {echo '<h3>Der WiiDataDownloader ist für dein Betriebssystem leider nicht verfügbar.</h3><br><p>Du kannst WDD aber <a href="download.php">trotzdem downloaden</a>.</p>';}?>
					          <br><br>
					          
	    		</div>
	    		
	    		<div class="col-lg-2">
	    			<h5>Schnell. Aktuell & Zuverlässig</h5>
	    			<p>WDD ist rasend schnell. Und du erhälst immer aktuelle Downloads.</p>
	    			<img class="hidden-xs hidden-sm hidden-md" src="img/arrow1.png" alt="Pfeil">
	    		</div>
	    		<div class="col-lg-8">
	    			<img class="img-responsive" src="img/app-bg.png" alt="WDD Screenshot"><br>
	    		</div>
	    		<div class="col-lg-2">
	    			<br>
	    			<img class="hidden-xs hidden-sm hidden-md" src="img/arrow2.png" alt="Pfeil">
	    			<h5>Sicher</h5>
	    			<p>WDD prüft jeden Download mithilfe eines Hashs und downloadet ggf. die App neu, wenn sie beschädigt ist.</p>
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->



	<!-- INTRO WRAP -->
	<div id="intro">
		<div class="container">
			<div class="row centered">
				<h1>Für dich geschaffen</h1>
				<br>
				<br>
				<div class="col-lg-4">
					<img src="img/intro01.png" alt="Offen">
					<h3>Offen</h3>
					<p>Die Entwicklung läuft offen und transparent auf <a href="https://github.com/Brawl345/WiiDataDownloader" target="_blank">GitHub</a>.</p>
				</div>
				<div class="col-lg-4">
					<img src="img/intro02.png" alt="Aktuell">
					<h3>Aktuell</h3>
					<p>Der WiiDataDownloader downloadet immer aktuelle Homebrews.</p>
				</div>
				<div class="col-lg-4">
					<img src="img/wiidatabase.png" width="130" height="130" alt="Von der WiiDatabase">
					<h3>Von der WiiDatabase</h3>
					<p>Der WiiDataDownloader wurde geschrieben vom <a href="http://wiidatabase.de" target="_blank">WiiDatabase Team</a> und steht jedem frei zur Verfügung.</p>
				</div>
			</div>
			<br>
	    </div> <!--/ .container -->
	</div><!--/ #introwrap -->

	<div id="showcase">
		<div class="container">
			<div class="row">
				<h1 class="centered">Screenshots</h1>
				<br>
				<div class="col-lg-8 col-lg-offset-2">
					<div id="carousel-example-generic" class="carousel slide">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					  </ol>
					
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="js/holder.js/900x517" alt="Screen">
					    </div>
					    <div class="item">
					      <img src="js/holder.js/900x517" alt="Screen">
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>	
		</div><!-- /container -->
	</div>	

<?php include("templates/footer.php"); ?>
<?php include("templates/htmlEnd.php"); ?>
