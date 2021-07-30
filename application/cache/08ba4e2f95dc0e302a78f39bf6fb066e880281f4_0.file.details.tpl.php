<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:33:20
  from '/mnt/c/work/source/ken_admin/application/views/setting/details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e360e38f95_79304814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08ba4e2f95dc0e302a78f39bf6fb066e880281f4' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/setting/details.tpl',
      1 => 1592386079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/head.tpl' => 1,
    'file:include/header.tpl' => 1,
    'file:include/sidebar.tpl' => 1,
    'file:include/common.tpl' => 1,
  ),
),false)) {
function content_5ee9e360e38f95_79304814 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php $_smarty_tpl->_subTemplateRender('file:include/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body<?php if (!empty($_smarty_tpl->tpl_vars['pageID']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['pageID']->value;?>
"<?php }?>>
<div class="l-wrapper"><!-- L-WRAPPER  -->
<?php $_smarty_tpl->_subTemplateRender('file:include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="b-contents"><!-- B-CONTENTS -->
<section><!-- SECTION -->
<div class="contentsTitle">
	<div class="block">
		<div class="block_inner">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">商品管理（商品詳細）</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<form method="post" action="" class="js-insuranceSearchForm">
		<div class="block">
			<div class="block_inner block_inner-7">
				<table class="table table-borderLeftNone table-form">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 80%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title"><div class="table_title_required">商品番号<span>必須</span></div></th>
							<td class="table_data">
								<input type="text" name="" value="999" class="form form-maxSizeL" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品名<span>必須</span></div></th>
							<td class="table_data">
								<input type="text" name="" value="太線（29ｘ17cm）" class="form" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
<!-- 						<tr>
							<th class="table_title"><div class="table_title_required">登録枚数<span>必須</span></div></th>
							<td class="table_data">
								<input type="text" name="" value="200" class="form form-maxSizeS" placeholder="100" tabindex="1">
							</td>
						</tr> -->
						<tr>
							<th class="table_title">備考</th>
							<td class="table_data">
								<textarea name="remarks" class="form form-textarea form-heightS form-textAreaMiddle" tabindex="1"></textarea>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="block block-spaceS">
			<div class="block_inner block_inner-7">
				<ul class="btn">
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color1">
						<a href="#" class="focus js-btnSearch" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
					</li>
<!-- 					<li class="btn_box btn_box-sizeM btn_box-inline btn_box-color">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
product/" class="focus" tabindex="1"><i class="btn_icon btn_icon-0"></i>戻る</a>
					</li> -->
				</ul>
			</div>
		</div>
	</form>

</div><!-- / CONTENTS -->
</section><!-- / SECTION -->
</div><!-- / B-CONTENTS -->
<?php $_smarty_tpl->_subTemplateRender('file:include/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><!-- /L-WRAPPER  -->

<?php echo '<script'; ?>
>
	$(function() {
	// Form 初期化
	appForm.initialize();
	//pop up
	$('.js-pop_up').colorbox({width:'300'});
	//テキスト入力の削除
	$('.js-clearBtn').on('click', function(e) {
		e.preventDefault();
		$('.js-inputClear').each(function() {
			$(this).find('input').val('');
		});
		$('.js-inputClear select').each(function() {
			this.selectedIndex  = 0;
		});
	});
	$('.js-datepicker').datepicker({
		changeYear: false,
		changeMonth: false
	});
});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:include/common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
