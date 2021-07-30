<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:32:16
  from '/mnt/c/work/source/ken_admin/application/views/include/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e32076b276_64611208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2965bfaec2acc3e504f436ab56f047ffee5582d' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/include/header.tpl',
      1 => 1592386184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9e32076b276_64611208 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <div class="loadPage"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/loading.gif" class="loadPage_img" alt=""></div> -->
<header class="l-header">
	<div class="header">
		<div class="header_left">
			<h1 class="header_left_logo"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
order/" tabindex="-1"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/system_logo.png" alt="Ken Order System"></a></h1>
			<div class="header_left_menuBtn"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/menu_left.png" alt=""></div>
		</div>
<?php if (!empty($_smarty_tpl->tpl_vars['headerNav']->value) && $_smarty_tpl->tpl_vars['headerNav']->value == 'navMemberMenu') {?>
		<form name="" method="get" action="">			<input type="hidden" name="hoge" value="000123456789">
			<ul class="header_block header_block-left">
				<li class="header_block_box">
					<div class="btn btn-header">
						<div class="btn_box btn_box-header btn_box-color4 btn_box-inline js-pulldown">
							<a href="javascript:void(0)" class="focus" tabindex="1" id="js-menu"><i class="btn_icon btn_icon-7"></i>メニュー</a>
							<ul class="btn_box_pulldownMenu js-pulldownChild">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
payment-search/" class="js-parentsForm js-move" target="_blank" id="first">入金充当</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
direct-search/" class="js-parentsForm js-move" target="_blank">直紹介者</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
above-search/" class="js-parentsForm js-move" target="_blank">上位検索</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
doc-deficiency/" class="js-parentsForm js-move" target="_blank">書類不備</a></li>	
								<li><a href="#" class="js-parentsForm js-move" target="_blank">組織図（前月）</a></li>
								<li><a href="#" class="js-parentsForm js-move" target="_blank">組織図（当月）</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
chart-search/" class="js-parentsForm js-move" target="_blank">組織図（縦型）</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
offerlist/" class="js-parentsForm js-move" target="_blank">種別変更</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
offerlist/" class="js-parentsForm js-move" target="_blank">登録者変更</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
offerlist/" class="js-parentsForm js-move" target="_blank">口座変更</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
offerlist/" class="js-parentsForm js-move" target="_blank">口座不備</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
offerlist/" class="js-parentsForm js-move" target="_blank">解約</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
status-change/" class="js-parentsForm js-move" target="_blank">ステータス変更</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
change-history-search/" class="focus js-parentsForm" target="_blank" tabindex="1"><i class="btn_icon btn_icon-6"></i>変更履歴</a>
						</p>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
member_change/" class="focus js-parentsForm" tabindex="1"><i class="btn_icon btn_icon-4"></i>基本情報変更</a>
						</p>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search-history/" class="focus js-parentsForm" target="_blank" tabindex="1"><i class="btn_icon btn_icon-3"></i>検索履歴</a>
						</p>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="" class="focus js-parentsForm" tabindex="1"><i class="btn_icon btn_icon-5"></i>マイページ</a>
						</p>
					</div>
				</li>
			</ul>
		</form>
<?php }?>
		<ul class="header_right">
			<li class="header_right_name">管理者<span>〇〇〇 〇〇〇</span>様</li>
			<li class="header_right_logout"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/" tabindex="-1"><span></span>ログアウト</a></li>
		</ul>
	</div>
</header><?php }
}
