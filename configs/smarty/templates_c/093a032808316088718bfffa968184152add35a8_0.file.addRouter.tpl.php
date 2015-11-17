<?php /* Smarty version 3.1.27, created on 2015-11-17 17:33:27
         compiled from "configs/smarty/templates/managing/addRouter/addRouter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:921000292564b64e79eca31_10871638%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093a032808316088718bfffa968184152add35a8' => 
    array (
      0 => 'configs/smarty/templates/managing/addRouter/addRouter.tpl',
      1 => 1447779207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921000292564b64e79eca31_10871638',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b64e79f5ff1_23762096',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b64e79f5ff1_23762096')) {
function content_564b64e79f5ff1_23762096 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '921000292564b64e79eca31_10871638';
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