<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:32:18
  from '/mnt/c/work/source/ken_admin/application/views/client/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e32275b925_69398820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da3a7e014e1f7699b4fab2054c696c64adfd5e63' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/client/index.tpl',
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
function content_5ee9e32275b925_69398820 (Smarty_Internal_Template $_smarty_tpl) {
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
					<h2 class="title_text title_text-size2L">店舗管理</h2>
				</div>
			</div>
		</div>
		<div class="block_inner block_inner-1 block_inner-spaceS block_inner-titleBtn">
			<div class="btn">
				<p class="btn_box btn_box-color2">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/create/" class="focus" tabindex="1"><i class="btn_icon btn_icon-2"></i>新規店舗登録</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
<!-- 	<nav>月水金の配送ルートが必要で月・水・金　配送管理　配送ルートが決まっているので
		<ul class="tabMenu">
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS btn_box-select">
						<span class="focus"><i></i>店舗一覧</span>
					</p>
				</div>
			</li>
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/create/" class="focus" tabindex="1"><i></i>新規店舗登録</a>
					</p>
				</div>
			</li>
		</ul>
	</nav> -->
	<form method="post" action="" class="js-insuranceSearchForm">
		<div class="block"><!-- 検索枠 -->
			<div class="block_inner block_inner-7half">
				<table class="table">
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 12%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 12%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 18%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title table_title-positionCenter">店舗番号</th>
							<td class="table_data">
								<input type="text" name="" value="" maxlength="" class="form" placeholder="0000" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">配送地域</th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="0">東京(01)</option>
									<option value="1">千葉(02)</option>
									<option value="2">神奈川(03)</option>
									<option value="3">埼玉(04)</option>
									<option value="4">茨城(05)</option>
									<option value="5">群馬(06)</option>
									<option value="6">栃木(07)</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">電話番号</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form" placeholder="09012345678" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">店舗名</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form" placeholder="ここに入力" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">契約</th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="1">契約中</option>
									<option value="2">解約</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
<!-- 				<table class="table table-spaceXS">
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 92%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title table_title-positionCenter">店舗名</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
					</tbody>
				</table> -->
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
		<div class="block_inner">
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
					<!-- <colgroup style="width: 4%;"></colgroup> -->
					<colgroup style="width: 5%;"></colgroup>
					<colgroup style="width: 6%;"></colgroup>
					<colgroup style="width: 14%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 7%;"></colgroup>
					<colgroup span="4" style="width: 8%;"></colgroup>
					<colgroup style="width: 14%;"></colgroup>
					<colgroup style="width: 4%;"></colgroup>
					<colgroup style="width: 4%;"></colgroup>
					<thead>
						<tr>
							<!-- <th class="table_title"></th> -->
							<th class="table_title">店舗番号</th>
							<th class="table_title">パスワード</th>
							<th class="table_title">店舗名</th>
							<th class="table_title">電話番号</th>
							<th class="table_title">配送地域</th>
							<th class="table_title">商品①</th>
							<th class="table_title">商品②</th>
							<th class="table_title">商品③</th>
							<th class="table_title">商品④</th>
							<th class="table_title">特記事項</th>
							<th class="table_title">定期</th>
							<th class="table_title">契約</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="12" class="table_data">該当データがありません</td>
						</tr>
						<tr class="table_status table_status-color">
<!-- 							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/edit/" class="focus" tabindex="1" target="_blank">編集</a>
									</p>
								</div>
							</td> -->
<!-- 							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color2">
										<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/handled/" class="focus" tabindex="1" target="_blank">登録</a>
									</p>
								</div>
							</td> -->
							<td class="table_data">99999999</td>
							<td class="table_data">password</td>
							<td class="table_data table_data-positionLeft"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/edit/" class="focus" tabindex="1">テスト店舗テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">東京(01)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">100枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">1000枚</span></td>
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキスト</td>
							<td class="table_data">有</td>
							<td class="table_data"></td>
						</tr>
						<tr class="table_status table_status-lineColor4 table_status-color4">
<!-- 							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/edit/" class="focus" tabindex="1" target="_blank">編集</a>
									</p>
								</div>
							</td> -->
							<td class="table_data">9999</td>
							<td class="table_data">password</td>
							<td class="table_data table_data-positionLeft"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/edit/" class="focus" tabindex="1">テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">神奈川(03)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">100枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">1000枚</span></td>
							<td class="table_data table_data-positionLeft">テキストテキスト</td>
							<td class="table_data"></td>
							<td class="table_data table_data-status">解約</td>
						</tr>
						<tr class="table_status table_status-color4">
							<td class="table_data">9999</td>
							<td class="table_data">password</td>
							<td class="table_data table_data-positionLeft"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/edit/" class="focus" tabindex="1">テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">神奈川(03)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">100枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">1000枚</span></td>
							<td class="table_data table_data-positionLeft">テキストテキストテキスト</td>
							<td class="table_data"></td>
							<td class="table_data"></td>
						</tr>
						<tr class="table_status table_status-lineColor4 table_status-color4">
							<td class="table_data">9999</td>
							<td class="table_data">password</td>
							<td class="table_data table_data-positionLeft"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/edit/" class="focus" tabindex="1">テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">神奈川(03)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">100枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">1000枚</span></td>
							<td class="table_data table_data-positionLeft">テキストテキスト</td>
							<td class="table_data"></td>
							<td class="table_data table_data-status">解約</td>
						</tr>
					</tbody>
				</table>
			</div><!-- / block_inner_dataTable -->
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
