<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:32:06
  from '/mnt/c/work/source/ken_admin/application/views/include/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e316ecbce4_96423123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a33e534cc0b4c12f12f85b2d1a04edde01bede' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/include/head.tpl',
      1 => 1592386079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9e316ecbce4_96423123 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_ie']->value) {?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php }?>
<meta name="viewport" content="width=1260">
<meta name = "format-detection" content = "telephone=no">
<meta name="apple-mobile-web-app-title" content="Ken Order System">
<?php if (!empty($_smarty_tpl->tpl_vars['head_keywords']->value)) {?>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['head_keywords']->value;?>
,Ken Order System">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }
if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<meta property="og:title" content="Ken Order System">
<meta property="og:type" content="website">
<?php } else { ?>
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | Ken Order System">
<meta property="og:type" content="article">
<?php }
if (!empty($_smarty_tpl->tpl_vars['description']->value)) {?>
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<?php }?>
<meta property="og:site_name" content="Ken Order System">
<meta property="og:locale" content="ja_JP">
<?php if (empty($_smarty_tpl->tpl_vars['head_title']->value)) {?>
<title>Ken Order System</title>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['head_title']->value;?>
 | Ken Order System</title>
<?php }
if (!empty($_smarty_tpl->tpl_vars['canonical']->value)) {?>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css1']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['page_css1']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css2']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['page_css2']->value;?>
">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/style.css" media="all">
<?php if (!empty($_smarty_tpl->tpl_vars['page_css3']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['page_css3']->value;?>
">
<?php }
if (!empty($_smarty_tpl->tpl_vars['page_css4']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['page_css4']->value;?>
">
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/plugins/plugins_pc.js"><?php echo '</script'; ?>
>
<?php if (!empty($_smarty_tpl->tpl_vars['js_file1']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['js_file1']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file2']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['js_file2']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file3']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['js_file3']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (!empty($_smarty_tpl->tpl_vars['js_file4']->value)) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['js_file4']->value;?>
"><?php echo '</script'; ?>
>
<?php }
if (($_smarty_tpl->tpl_vars['is_ie6']->value || $_smarty_tpl->tpl_vars['is_ie7']->value || $_smarty_tpl->tpl_vars['is_ie8']->value)) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/ie.css" media="all">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/plugins/ie/html5shiv-printshiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/plugins/ie/css3-mediaqueries.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/script_pc.js"><?php echo '</script'; ?>
><?php }
}
