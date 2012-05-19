<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="preheader"></div>
    <div id="header">
        <?=image_tag('../css/backend/images/logo.png')?>
     </div>
    <div id="body">
      <div id="menu" style="float: left; width: 250px;">
        <div id="navigation">
                <h3 onclick="$(this).next().slideToggle();">+ NAVIGATION</h3>
                <ul class="list" style="display: block;">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">References</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>

                <? include_partial('global/admin') ?>

                <br/>

                <? include_component('project', 'widgets')?>

            </div>
            <div id="postnavigation" style="margin-top: 30px;margin-left: -10px; font-size: 14px;">
            </div>
      </div>
      <div id="content" style="background-color: #fff; border: solid 1px #ddd; padding: 10px 20px 20px 20px; margin-top: 10px; float: left; width: 800px;">
        <?php echo $sf_content ?>
      </div>
      <div style="clear: left;"></div>
    </div>
  </body>
</html>
