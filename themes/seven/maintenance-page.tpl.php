<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>">

  <?php print $page_top; ?>

  <div id="branding">
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1>
	
	
	
	
	<?php endif; ?>
	
	    <?php print '111111111111'; ?>
		     <?php print getenv("CT_LOGINDB_DB"); ?>	   <?php print '2'; ?>
      <?php print  getenv("CT_LOGINDB_HOST"); ?>	   <?php print '2'; ?>
      <?php print  getenv("CT_LOGINDB_PASS"); ?>	   <?php print '2'; ?>
      <?php print  getenv("CT_LOGINDB_PORT"); ?>
	   <?php print '2'; ?>      <?php print  getenv("MYSQL_SERVICE_HOST"); ?>
	   <?php print '2'; ?>
	 <?php print  getenv("CT_LOGINDB_USER"); ?>

 <?php print '222222222'; ?>	 
  </div>

  <div id="page">

    <?php if ($sidebar_first): ?>
      <div id="sidebar-first" class="sidebar">
        <?php if ($logo): ?>
          <img id="logo" src="<?php print $logo ?>" alt="<?php print $site_name ?>" />
        <?php endif; ?>
        <?php print $sidebar_first ?>
      </div>
    <?php endif; ?>

    <div id="content" class="clearfix">
      <?php if ($messages): ?>
        <div id="console"><?php print $messages; ?></div>
      <?php endif; ?>
      <?php if ($help): ?>
        <div id="help">
          <?php print $help; ?>
        </div>
      <?php endif; ?>
      <?php print $content; ?>
    </div>

  </div>

  <?php print $page_bottom; ?>

  </body>
</html>
