<?php /* Smarty version 3.1.27, created on 2015-11-17 16:55:01
         compiled from "configs/smarty/templates/managing/addRouter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1255841938564b5be568b568_92869806%%*/
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
  'nocache_hash' => '1255841938564b5be568b568_92869806',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b5be575c641_05591045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b5be575c641_05591045')) {
function content_564b5be575c641_05591045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1255841938564b5be568b568_92869806';
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