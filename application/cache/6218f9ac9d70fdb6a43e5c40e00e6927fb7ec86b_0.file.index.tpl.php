<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:32:06
  from '/mnt/c/work/source/ken_admin/application/views/admin/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e316dc6ad9_88052176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6218f9ac9d70fdb6a43e5c40e00e6927fb7ec86b' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/admin/index.tpl',
      1 => 1592386184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/head.tpl' => 1,
    'file:include/common.tpl' => 1,
  ),
),false)) {
function content_5ee9e316dc6ad9_88052176 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php $_smarty_tpl->_subTemplateRender('file:include/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
"<?php }?>>
<div class="l-wrapper"><!-- WRAPPER -->
	<div class="loginBox"><!-- LOGIN BOX -->
		<div class="loginBox_inner">
			<h1 class="loginBox_title"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/logo.png" alt="Ken CLEANERS SYSTEM"></h1>
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
order/">
				<dl class="loginBox_item">
					<dt class="loginBox_item_title">ユーザーID</dt>
					<!-- <dd class="loginBox_item_error">ユーザー名を入力してください</dd> -->
					<dd class="loginBox_item_space"><input type="text" name="id" maxlength="30" value="" placeholder="ユーザー名を入力してください"></dd>
					<dt class="loginBox_item_title">パスワード</dt>
					<!-- <dd class="loginBox_item_error">パスワードを入力してください</dd> -->
					<dd class="loginBox_item_space"><input type="password" name="pass" maxlength="30" value="" placeholder="パスワードを入力してください"></dd>
				</dl>
				<!-- <p class="loginBox_item_error-center">ユーザー名とパスワードが一致していません</p> -->
				<div class="loginBox_btn">
					<input type="submit" name="" value="サインイン">
				</div>
			</form>
		</div>
	</div><!-- / LOGIN BOX -->
</div><!-- / WRAPPER -->
<?php $_smarty_tpl->_subTemplateRender('file:include/common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
