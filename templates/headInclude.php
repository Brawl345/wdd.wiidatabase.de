<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="<?php echo $shownpage_page['description']; ?>">
  	<meta name="author" content="Andreas Bielawski">
    <link rel="shortcut icon" href="favicon.ico">

    <title><?php echo $config_page['maintitle'] . " | " . $shownpage_page['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/css/template.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<?php $agent = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('/Linux/',$agent)) $os = 'Linux';
elseif(preg_match('/Win/',$agent)) $os = 'Windows';
elseif(preg_match('/Mac/',$agent)) $os = 'Mac';
else $os = 'Unbekannt'; ?>
  </head>
<body>
