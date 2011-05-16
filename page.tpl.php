<?php
// $Id$

/**
 * @file page.tpl.php
 * Main page template file for the dynamo theme.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<!--
  Dynamo!
-->
<head>
<!--<meta http-equiv="X-UA-Compatible" content="IE=8; chrome=1" />-->
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>
<body class="<?php print $body_classes; ?><?php if (!empty($admin)) print ' '.admin;  ?>">
<?php 
/*adds support for for the admin module*/
  if (!empty($admin)) print $admin; 
?>

<?php if ($help OR $messages) { ?>
  <div id="drupal-messages">
    <div id="messages-hide">
      <a href="#"><?php print t('hide'); ?></a>
    </div>

    <?php print $help ?>
    <?php print $messages ?>

    </div>
<?php } ?>

<div id="container" class="clearfix">

    <div id="page" class="minheight">
      <div id="page-inner" class="clearfix">


        <div id="pageheader">
          <div id="pageheader-inner">
            
              <div id="top" class="clearfix">
                  <div id="randers-top" >

                      <div id="randers-logo" class="left">
                      </div>
                  </div>
                  <div id="search-area">
                      <div id="search" class="left">
                          <?php print $search ?>
                      </div>

                      <div id="account" class="left">
                          
                         <?php if (!user_is_logged_in()) { ?>
                            <div id="account-logintitle">
                                 <?php  print t('Login for at se lånerstatus');?>
                            </div>
                          <?php } ?>

                          
                          <?php print $account; ?>
                      </div>
                  </div>
              </div>

            <div id="navigation">
              <div id="navigation-inner">
                <?php if ($primary_links){ ?>
                  <?php print theme('links', $primary_links); ?>
                <?php } ?>
              </div>
            </div>

            
          </div>
        </div>
        
        <div id="pagebody" class="clearfix">
          <div id="pagebody-inner" class="clearfix">
           <?php if(!$is_front) print $breadcrumb; ?>
            <?php if ($left) { ?>
              <div id="content-left">
                <?php print $left; ?>
              </div>
            <?php } ?>

            <div id="content">
              <div id="content-inner">

                <?php
                  /*if were in the user pages add the tabs in the top*/
                  if (arg(0) == 'user' && is_numeric(arg(1)) && $tabs){
                    print '<div class="tabs-user">' . $tabs . '</div>';
                  }
                ?>

                <div id="content-main">
                  <?php print $content; ?>
                </div>
                
                <?php
                  if (arg(0) != 'user'  && $tabs){
                    print '<div class="tabs">' . $tabs . '</div>';
                  }
                ?>


              </div>
            </div>

            <?php if ($right) { ?>
              <div id="content-right">
                <?php print $right; ?>
              </div>
            <?php } ?>

          </div>
        </div>

        <div id="pagefooter">
          <div id="pagefooter-inner" class="clearfix">

            <div class="left first">
              <?php print $footer_one; ?>
            </div>

            <div class="left">
              <?php print $footer_two; ?>
            </div>

            <div class="left">
              <?php print $footer_three; ?>             
            </div>

            <div class="left">
              <?php print $footer_four; ?>              
              <?php print $footer; ?>
            </div>
      
          </div>
        </div>

      </div>
    </div>

</div>

<?php print $closure; ?>

  <script SRC="/scripts/include1.js"  TYPE="text/javascript"></script>
  <script SRC="/scripts/dcs_tag.js"  TYPE="text/javascript"></script>
  <noscript>
   <img ALT="" BORDER="0" NAME="DCSIMG" WIDTH="1" HEIGHT="1" SRC="https://visionize10.visionize.dk/dcstdy9ylt3uwyq8cc2e7bdnk_9s8b/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.0.2"/>
  </noscript>
</body>
</html>
