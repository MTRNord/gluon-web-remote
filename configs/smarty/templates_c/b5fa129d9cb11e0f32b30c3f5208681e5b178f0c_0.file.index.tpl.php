<?php /* Smarty version 3.1.27, created on 2015-11-17 22:18:27
         compiled from "configs/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:34005980564ba7b3a3f709_34943580%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5fa129d9cb11e0f32b30c3f5208681e5b178f0c' => 
    array (
      0 => 'configs/smarty/templates/index.tpl',
      1 => 1447798699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34005980564ba7b3a3f709_34943580',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ba7b3ae2a41_27592442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ba7b3ae2a41_27592442')) {
function content_564ba7b3ae2a41_27592442 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '34005980564ba7b3a3f709_34943580';
include_once ('classes/indexClass.php');?>

<?php include_once ('libs/login-base/vendor/autoload.php');?>

<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'index.conf', null, 'local');?>
<!DOCTYPE html>
<html>

  <head>
    <meta name="google-site-verification" content="9HLPgOcD4Pa4O5Sjut-nAdSjE7_NPriPb0L4w3ZMD_Y" />
    <title>Material Design for Bootstrap</title>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Charset -->
    <meta charset="UTF-8">
    <!-- Descripson -->
    <meta name="description" content="Gluon Web Admin for configuring Routers." />
  </head>
  <body>

    <div class="header-panel shadow-z-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseNav" aria-expanded="false" aria-controls="collapseNav" style="position: absolute;bottom: 6px;padding-left: 20px;background-color:#dc0067;">
  <?php echo $_smarty_tpl->getConfigVariable( 'collapseMenu');?>

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
            <li class="withripple" data-target="#addRouter"><?php echo $_smarty_tpl->getConfigVariable( 'addRouter');?>
</li>
            <li hidden class="withripple" data-target="#addRouter2"><?php echo $_smarty_tpl->getConfigVariable( 'addRouter');?>
</li>
            <li class="withripple" data-target="#login"><?php echo $_smarty_tpl->getConfigVariable( 'login');?>
</li>
          </ul>
        </nav>
        <div class="pages col-xs-9">
          <div class="col-xs-10">
            <div class="well page active" id="welcome">
              <h1 class="header"><?php echo $_smarty_tpl->getConfigVariable( 'welcomeHead');?>
</h1>
                
                <h3><?php echo $_smarty_tpl->getConfigVariable( 'abilitysHead');?>
</h3>
                <p><?php echo $_smarty_tpl->getConfigVariable( 'abilitys');?>
</p>
            </div>
            <div class="well page" id="tests">
              <h1 class="header">Tests</h1>
			  <p>
			    <b>Just testing</b> <br/>
			    <?php 
					main::openConnection("ls -la", "root", "xxxx", "Sylt_1", "FFFL");
				?>
			  </p>
            </div>
            <div class="well page" id="login">
                <h1 class="header"><?php echo $_smarty_tpl->getConfigVariable( 'login');?>
</h1>
                <?php 
                    // start login application
                    new Application();
                ?>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("./managing/addRouter/selectCommunity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("./managing/addRouter/addRouter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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

  </body>
</html>
<!-- jQuery -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>

<!-- Open source code -->

<?php echo '<script'; ?>
 async type="text/javascript">
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
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Material Design for Bootstrap -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/material.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/ripples.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 async type="text/javascript">
  $.material.init();
<?php echo '</script'; ?>
>

<!-- Dropdown.js -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.dropdown.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 async type="text/javascript">
  $("#dropdown-menu select").dropdown();
<?php echo '</script'; ?>
>

    
<!-- Twitter Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design for Bootstrap -->
<link href="css/roboto.min.css" rel="stylesheet">
<link href="css/material-fullpalette.min.css" rel="stylesheet">
<link href="css/ripples.min.css" rel="stylesheet">

<!-- Dropdown.js -->
<link href="css/jquery.dropdown.css" rel="stylesheet">

<!-- ex inline css -->
<link href="css/index.min.css" rel="stylesheet"><?php }
}
?>