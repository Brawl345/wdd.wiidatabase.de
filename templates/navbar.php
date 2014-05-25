    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <strong><a class="navbar-brand" href="index.php"><?php echo $config_page['maintitle']; ?></a></strong>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php foreach ($config_navbar_content as $value) :?>
            <li <?php if ($shownpage_page['page_idf'] == $value['page_idf']) {echo 'class="active"';}?>><a href="<?php echo $value['page_idf'] . ".php"; ?>"><?php echo $value['text'];?></a></li>
            <?php endforeach; ?>
            <?php if ($page_has_extra_navbarentry == "true") :?>
            <li class="active"><a href="<?php echo $page_has_extra_navbarentry_url; ?>"><?php echo $page_has_extra_navbarentry_title; ?></a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
