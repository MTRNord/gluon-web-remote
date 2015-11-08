<?php /* Smarty version 3.1.27, created on 2015-11-08 19:52:41
         compiled from "configs/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:248170660563fa809684890_57405724%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5fa129d9cb11e0f32b30c3f5208681e5b178f0c' => 
    array (
      0 => 'configs/smarty/templates/index.tpl',
      1 => 1447012355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248170660563fa809684890_57405724',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563fa8096a6911_34960372',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563fa8096a6911_34960372')) {
function content_563fa8096a6911_34960372 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '248170660563fa809684890_57405724';
include_once ('indexClass.php');?>

<?php include_once ('libs/login-base/vendor/autoload.php');?>

<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'index.conf', null, 'local');?>
<!DOCTYPE html>
<html>

  <head>
    <title>Material Design for Bootstrap</title>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Twitter Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design for Bootstrap -->
    <link href="css/roboto.min.css" rel="stylesheet">
    <link href="css/material-fullpalette.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="css/jquery.dropdown.css" rel="stylesheet">

	<!-- ex inline css -->
	<link href="css/index.css" rel="stylesheet">


  </head>
  <body>

    <!--<a href="https://github.com/MTRNord/gluon-web-remote" style="position: absolute; top: 0; left: 0; border: 0; z-index: 10;"><img src="images/forkme_left_darkblue_121621.png" alt="Fork me on GitHub" data-canonical-src="images/forkme_right_darkblue_121621.png"></a>-->

    <div class="header-panel shadow-z-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseNav" aria-expanded="false" aria-controls="collapseNav" style="position: absolute;bottom: 6px;padding-left: 20px;background-color:#dc0067;">
  Collapse Menu
</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid main">
      <div class="row">
        <nav class="col-xs-3 menu collapse" id="collapseNav" style:"z-index:1000 !important;">
          <ul>
            <li class="active withripple" data-target="#welcome"><?php echo $_smarty_tpl->getConfigVariable( 'welcomeHead');?>
</li>
            <li class="withripple" data-target="#tests">Tests</li>
            <li class="withripple" data-target="#login">Login</li>
          </ul>
        </nav>
        <div class="pages col-xs-9">
          <div class="col-xs-10">
            <div class="well page active" id="welcome">
              <h1 class="header"><?php echo $_smarty_tpl->getConfigVariable( 'welcomeHead');?>
</h1>
              <p>
                <!-- TODO Add View -->
                <h3><?php echo $_smarty_tpl->getConfigVariable( 'abilitysHead');?>
</h3>
                <p><?php echo $_smarty_tpl->getConfigVariable( 'abilitys');?>
</p>
			  </p>
            </div>
            <div class="well page" id="tests">
              <h1 class="header">Tests</h1>
			  <p>
			    <b>Just testing</b> <br/>
			    <?php 
					main::openConnection("ls -la", "root", "xxxx", "tarp1", "FFKI");
				?>
			  </p>
            </div>
            <div class="well page" id="login">
                <h1 class="header">Login</h1>
                <?php 
                    // start login application
                    new Application();
                ?>
            </div>
          </div>
          <div class="col-xs-2">
            <button class="btn btn-fab btn-material-grey-200" id="opensource"><i class="mdi-action-open-in-new"></i></button></div>
        </div>
      </div>
    </div>

    <div id="source-modal" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Source Code</h4>
          </div>
          <div class="modal-body">
            <pre></pre>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>


    <!-- Open source code -->
    
    <?php echo '<script'; ?>
>
      window.page = window.location.hash || "#welcome";

      $(document).ready(function() {
        if (window.page != "#welcome") {
          $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
        }
      });

      $(window).on("resize", function() {
        $("html, body").height($(window).height());
        $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
        $(".pages").height($(window).height());
      }).trigger("resize");

      $(".menu li").click(function() {
        // Menu
        if (!$(this).data("target")) return;
        if ($(this).is(".active")) return;
        $(".menu li").not($(this)).removeClass("active");
        $(".page").not(page).removeClass("active").hide();
        window.page = $(this).data("target");
        var page = $(window.page);
        window.location.hash = window.page;
        $(this).addClass("active");


        page.show();

        var totop = setInterval(function() {
            $(".pages").animate({scrollTop:0}, 0);
        }, 1);

        setTimeout(function() {
          page.addClass("active");
          setTimeout(function() {
            clearInterval(totop);
          }, 1000);
        }, 100);
      });

      function cleanSource(html) {
        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
            re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function(line){
          if (line.match(re)) {
            line = line.substring(indentSize);
          }

          return line;
        });

        lines = lines.join("\n");

        return lines;
      }

      $("#opensource").click(function() {
        $.get(window.location.href, function(data){
          var html = $(data).find(window.page).html();
          html = cleanSource(html);
          $("#source-modal pre").text(html);
          $("#source-modal").modal();
        });
      });
    <?php echo '</script'; ?>
>
    
    
    <!-- Twitter Bootstrap -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Material Design for Bootstrap -->
    <?php echo '<script'; ?>
 src="js/material.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/ripples.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $.material.init();
    <?php echo '</script'; ?>
>

    <!-- Dropdown.js -->
    <?php echo '<script'; ?>
 src="js/jquery.dropdown.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
      $("#dropdown-menu select").dropdown();
    <?php echo '</script'; ?>
>
    
    
  </body>
</html>
<?php }
}
?>