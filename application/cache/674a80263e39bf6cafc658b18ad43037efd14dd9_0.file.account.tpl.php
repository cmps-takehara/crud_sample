<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:32:25
  from '/mnt/c/work/source/ken_admin/application/views/setting/account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e3290f9f29_04213641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '674a80263e39bf6cafc658b18ad43037efd14dd9' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/setting/account.tpl',
      1 => 1592386184,
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
function content_5ee9e3290f9f29_04213641 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="block_inner block_inner-1">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">アカウント</h2>
				</div>
			</div>
		</div>
		<div class="block_inner block_inner-1 block_inner-spaceS block_inner-titleBtn">
			<div class="btn">
				<p class="btn_box btn_box-color2">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
setting/account_create/" class="focus" tabindex="1"><i class="btn_icon btn_icon-2"></i>アカウント登録</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<nav>
		<ul class="tabMenu">
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
setting/" class="focus" tabindex="1"><i></i>商品設定</a>
					</p>
				</div>
			</li>
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS btn_box-select">
						<span class="focus"><i></i>アカウント</span>
					</p>
				</div>
			</li>
		</ul>
	</nav>
	<form method="post" action="" class="js-insuranceSearchForm">
		<div class="block block-spaceM"><!-- 検索枠 -->
			<div class="block_inner block_inner-6">
				<table class="table">
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 14%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 18%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 25%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title table_title-positionCenter">権限</th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="0">管理者</option>
									<option value="1">従業員</option>
									<option value="2">ドライバー</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">表示名</th>
							<td class="table_data">
								<input type="text" name="" value="" maxlength="10" class="form" placeholder="0000" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">名前</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form" placeholder="ここに入力" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">状態</th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="0">有効</option>
									<option value="1">無効</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="block_inner block_inner-btn block_inner-spaceS">
				<div class="btn">
					<p class="btn_box btn_box-color6">
						<a href="#" class="focus js-btnSearch" tabindex="1"><i class="btn_icon btn_icon-3"></i>検索</a>
					</p>
				</div>
			</div>
			<div class="block_inner block_inner-btn block_inner-spaceNone">
				<div class="btn">
					<p class="btn_box btn_box-color">
						<a href="javascript:void(0)" class="js-clearBtn focus" tabindex="1"><i class="btn_icon btn_icon-0"></i>クリア</a>
					</p>
				</div>
			</div>
		</div><!-- / 検索枠 -->
	</form>

	<div class="block block-spaceL">
		<div class="block_inner block_inner-5half">
			<!-- <div class="block_inner_dataTable"> -->				<div class="pager">
					<ul class="pager_box">
						<li class="pager_box_list pager_box_list-prev"><a href="" class="disabled js-disable">前へ</a></li><li class="pager_box_list"><span>1</span></li><li class="pager_box_list"><a href="">2</a></li><li class="pager_box_list pager_box_list-next"><a href="">次へ</a></li>
					</ul>
					<div class="block_inner_page">
						表示件数：<select name="" class="form form-maxSizeS" tabindex="1">
							<option value="25">25件</option>
							<option value="50" selected>50件</option>
							<option value="75">75件</option>
							<option value="100">100件</option>
							<option value="200">200件</option>
						</select>
					</div>
				</div>
				<table class="table table-list table-center table-borderTopNone table-positionCenter js-dataTable">
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 20%;"></colgroup>
					<colgroup style="width: 50%;"></colgroup>
					<colgroup style="width: 7%;"></colgroup>
					<colgroup style="width: 7%;"></colgroup>
					<thead>
						<tr>
							<th class="table_title">No.</th>
							<th class="table_title">権限</th>
							<th class="table_title">表示名</th>
							<th class="table_title">名前</th>
							<th class="table_title">状態</th>
							<th class="table_title"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="6" class="table_data">該当データがありません</td>
						</tr>
						<tr class="table_status table_status-color">
							<td class="table_data">9999</td>
							<td class="table_data">管理者</td>
							<td class="table_data table_data-positionLeft">テストテストテストテ</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テキストテキストテキストテキストテキストテキストテキスト" class="form" readonly></td>
							<td class="table_data">有効</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="#" class="focus" tabindex="1">無効</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-color">
							<td class="table_data">9999</td>
							<td class="table_data">従業員</td>
							<td class="table_data table_data-positionLeft">テストテストテストテ</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テキストテキストテキストテキストテキストテキストテキスト" class="form" readonly></td>
							<td class="table_data">有効</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="#" class="focus" tabindex="1">無効</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-lineColor4">
							<td class="table_data">9999</td>
							<td class="table_data">従業員</td>
							<td class="table_data table_data-positionLeft">テストテストテストテ</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テキストテキストテキストテキストテキストテキストテキスト" class="form" readonly></td>
							<td class="table_data">無効</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color1">
										<a href="#" class="focus" tabindex="1">有効</a>
									</p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			<!--</div>--><!-- / block_inner_dataTable -->
		</div>
	</div>
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
