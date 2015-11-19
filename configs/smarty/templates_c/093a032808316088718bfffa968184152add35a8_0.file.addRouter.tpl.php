<?php /* Smarty version 3.1.27, created on 2015-11-19 15:40:16
         compiled from "configs/smarty/templates/managing/addRouter/addRouter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1245738361564ded602599b5_86029617%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093a032808316088718bfffa968184152add35a8' => 
    array (
      0 => 'configs/smarty/templates/managing/addRouter/addRouter.tpl',
      1 => 1447947613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1245738361564ded602599b5_86029617',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ded6025f170_27858211',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ded6025f170_27858211')) {
function content_564ded6025f170_27858211 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1245738361564ded602599b5_86029617';
?>
<div class="well page" id="addRouter2">
    <h1 class="header"><?php echo $_smarty_tpl->getConfigVariable( 'addRouter');?>
</h1>
    <form class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label for="RouterName" class="col-lg-2 control-label"><?php echo $_smarty_tpl->getConfigVariable( 'routerName');?>
</label>
                <div class="col-lg-10">
                    <select class="form-control" id="RouterName">
                        <?php 
                            if(!empty($_GET["community"])){
                                $community = $_GET["community"];
                            }else{
                                $community = "";
                            }
                            if(!empty($community)){
                                helper::getNodeNames($community);
                            }else{
                                echo "<p>{#shouldNotBeHere#}</p>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php }
}
?>