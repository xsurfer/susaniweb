<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  
  <div id="wrapper_header">
  	
  	<div id="header">Studio Susani Backend</div>
  
  </div>
  
  <div id="menu">
        <ul>
          <li>
            <?php echo link_to('News', 'news') ?>
          </li>
          <li>
            <?php echo link_to('Convenzioni', 'convenzioni') ?>
          </li>
          <li>
            <?php echo link_to('Tariffario', 'tariffario') ?>
          </li>
        </ul>
      </div>
  
    <?php echo $sf_content ?>
  </body>
</html>
