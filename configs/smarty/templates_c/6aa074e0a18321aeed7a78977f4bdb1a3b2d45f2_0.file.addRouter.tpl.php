<?php /* Smarty version 3.1.27, created on 2015-11-17 17:05:10
         compiled from "configs/smarty/templates/managing/addRouter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:139191441564b5e46bac099_92337997%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa074e0a18321aeed7a78977f4bdb1a3b2d45f2' => 
    array (
      0 => 'configs/smarty/templates/managing/addRouter.tpl',
      1 => 1447779207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139191441564b5e46bac099_92337997',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b5e46bb1819_57778653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b5e46bb1819_57778653')) {
function content_564b5e46bb1819_57778653 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '139191441564b5e46bac099_92337997';
?>
<form class="form-horizontal">
    <fieldset>
        <!--<div class="form-group">
            <label for="inputRouterName" class="col-lg-2 control-label"><?php echo $_smarty_tpl->getConfigVariable( 'routername');?>
</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputRouterName" placeholder="<?php echo $_smarty_tpl->getConfigVariable( 'routername');?>
">
            </div>
        </div>-->
        <div class="form-group">
            <label for="RouterName" class="col-lg-2 control-label"><?php echo $_smarty_tpl->getConfigVariable( 'routername');?>
</label>
            <div class="col-lg-10">
                <select class="form-control" id="RouterName">
                    <?php 
                        helper::getNodeNames("FFKI");
                    ?>
                </select>
            </div>
        </div>
    </fieldset>
</form><?php }
}
?>