<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:32:16
  from '/mnt/c/work/source/ken_admin/application/views/include/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e3207ba8b4_88346371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd96b80969b188b4899a549dd8c0fc3f3c9b9f08' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/include/sidebar.tpl',
      1 => 1592386079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9e3207ba8b4_88346371 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="l-side">
	<div class="side">
		<ul class="js-accordion sideBox <?php if (!empty($_smarty_tpl->tpl_vars['sideNav']->value)) {?>sideNav-<?php echo $_smarty_tpl->tpl_vars['sideNav']->value;
}?>">
			<li class="sideBox_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
order/" class="sideBox_listAnchor1" tabindex="-1">
					<div class="sideBox_listIcon-1"></div><p><span>注文管理</span><i class="sideArrow1"></i></p>
				</a>
			</li>
<!-- 			<li class="sideBox_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
history/" class="sideBox_listAnchor2" tabindex="-1">
					<div class="sideBox_listIcon-2"></div><p><span>発送履歴</span><i class="sideArrow1"></i></p>
				</a>
			</li> -->
			<li class="sideBox_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/" class="sideBox_listAnchor3" tabindex="-1">
					<div class="sideBox_listIcon-3"></div><p><span>店舗管理</span><i class="sideArrow1"></i></p>
				</a>
			</li>
<!-- 			<li class="sideBox_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
stock/" class="sideBox_listAnchor4" tabindex="-1">
					<div class="sideBox_listIcon-4"></div><p><span>在庫管理</span><i class="sideArrow1"></i></p>
				</a>
			</li> -->
			<li class="sideBox_list">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
setting/" class="sideBox_listAnchor5" tabindex="-1">
					<div class="sideBox_listIcon-5"></div><p><span>設定</span><i class="sideArrow1"></i></p>
				</a>
			</li>
		</ul>
	</div>
</nav><?php }
}
