<?php /* Smarty version 3.1.27, created on 2015-11-17 19:46:20
         compiled from "configs/smarty/templates/managing/addRouter/selectCommunity.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1981232570564b840c837676_98675328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df00b6686d00f9fb2144542b936a3459c9a6b589' => 
    array (
      0 => 'configs/smarty/templates/managing/addRouter/selectCommunity.tpl',
      1 => 1447788954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1981232570564b840c837676_98675328',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b840c83d529_57334034',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b840c83d529_57334034')) {
function content_564b840c83d529_57334034 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1981232570564b840c837676_98675328';
?>
<div class="well page" id="addRouter">
    <h1 class="header"><?php echo $_smarty_tpl->getConfigVariable( 'addRouter');?>
</h1>
    <form class="form-horizontal" action="#addRouter2">
        <fieldset>
            <div class="form-group">
                <label for="CommunityName" class="col-lg-2 control-label"><?php echo $_smarty_tpl->getConfigVariable( 'communityName');?>
</label>
                <div class="col-lg-10">
                    <select class="form-control" id="CommunityName" name="community">
                        <?php 
                            helper::getCommunityNames();
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="mdi-navigation-check"></i> <?php echo $_smarty_tpl->getConfigVariable( 'nextPage');?>
</button>
                </div>
            </div>
        </fieldset>
    </form>
</div><?php }
}
?>