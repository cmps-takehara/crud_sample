<?php
/* Smarty version 3.1.33, created on 2020-06-17 18:34:56
  from '/mnt/c/work/source/ken_admin/application/views/order/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9e3c0a9bb60_82539311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57e2014b2758984285a3d7d6c3be1327e7b6f346' => 
    array (
      0 => '/mnt/c/work/source/ken_admin/application/views/order/create.tpl',
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
function content_5ee9e3c0a9bb60_82539311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/mnt/c/work/source/ken_admin/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<?php $_smarty_tpl->_subTemplateRender('file:include/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
<!--
.js-regularly {
	white-space: nowrap;
	display: inline-block;
}
-->
</style>

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
					<h2 class="title_text title_text-size2L">注文管理（電話注文登録）</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<form method="post" action="" class="js-insuranceSearchForm">
		<div class="block">
			<div class="block_inner block_inner-7">
<!-- 				<table class="table table-borderLeftNone table-form table-borderBottomNone">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 45%"></colgroup>
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title">管理番号</th>
							<td class="table_data">
								<input type="text" name="" value="" maxlength="" class="form form-sizeM" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">登録日</th>
							<td class="table_data table_data-positionCenter">
								<input type="text" name="" value="<?php echo smarty_modifier_date_format(time(),"%Y/%m/%d");?>
" class="form form-size" placeholder="0000" tabindex="1" readonly>
							</td>
						</tr>
					</tbody>
				</table> -->
				<table class="table table-borderLeftNone table-form">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 60%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗番号<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="tel" name="" value="" class="form form-maxSizeL" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗名<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="" value="" class="form" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">配達エリア<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<select name="" class="form form-maxSizeL" tabindex="1">
									<option value="">未選択</option>
									<option value="0">東京</option>
									<option value="1">千葉</option>
									<option value="2">神奈川</option>
									<option value="3">埼玉</option>
									<option value="4">茨城</option>
									<option value="5">群馬</option>
									<option value="6">栃木</option>
								</select>
								<select name="" class="form form-maxSizeL" tabindex="1">
									<option value="">未選択</option>
									<option value="0">01</option>
									<option value="1">02</option>
									<option value="2">03</option>
									<option value="3">04</option>
									<option value="4">05</option>
									<option value="5">06</option>
									<option value="6">07</option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="table_title" rowspan="2"><div class="table_title_required">住所<span>必須</span></div></th>
							<td colspan="3" class="table_data table_data-borderBottomNone table_data-spaceBottomNone">
								<input type="text" name="" value="" class="form form-maxSizeL js-zip" placeholder="2770042" tabindex="1">※ハイフン（&ndash;）無しで入力してください
							</td>
						</tr>
						<tr>
							<td colspan="3" class="table_data">
								<input type="text" name="" value="" class="form js-adrs3" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>



						<tr>
							<th class="table_title"><div class="table_title_required">電話番号<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="" value="" class="form form-maxSizeL" placeholder="09012345678" tabindex="1">※ハイフン（&ndash;）無しで入力してください
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品①<span>必須</span></div></th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form form-sizeL" placeholder="00" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品②</div></th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form form-sizeL" placeholder="00" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品③</div></th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form form-sizeL" placeholder="00" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品④</div></th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form form-sizeL" placeholder="00" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title">備考</th>
							<td colspan="3" class="table_data">
								<textarea name="remarks" class="form form-textarea form-heightS form-textAreaMiddle" tabindex="1"></textarea>
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
								<textarea name="remarks" class="form form-textarea form-height form-textAreaMiddle" tabindex="9"></textarea>
							</td>
						</tr>
					</tbody>
				</table> -->
			</div>
		</div>
		<div class="block block-spaceS">
			<div class="block_inner block_inner-7">
				<ul class="btn">
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color">
						<a href="javascript:history.back();" class="focus" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
					</li>
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color1">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
order/" class="focus" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
					</li>
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
	$('.js-zip').jpostal({
		postcode : [
				'.js-zip'	//郵便番号
		],
		address : {
				'.js-adrs3'  : '%3%4%5'	//都道府県
		}
	});
	//定期配送
	$('.js-regularlyBtn').on('click', function(){
		var checked = $(this).prop("checked");
		var elem = $(this).closest('.table_data').find('.js-regularly');
		elem.find('input,select').prop('disabled', true);
		elem.find('.js-displayNone').hide();
		if(checked) {
			elem.find('input,select').prop('disabled', false);
		}else{
			elem.find('input').val('');
			elem.find('select').each(function() {
				this.selectedIndex  = 0;
			});
		}
	});
	$('.js-regularly select').on('change', function(){
		var data = $(this).find('option:selected').val();
		$(this).next('.js-displayNone').hide();
		if(data != '' && data != '0') $(this).next('.js-displayNone').show();
	});
	// Form 初期化
	appForm.initialize();
	//テキスト入力の削除
	// $('.js-clearBtn').on('click', function(e) {
	// 	e.preventDefault();
	// 	$('.js-inputClear').each(function() {
	// 		$(this).find('input').val('');
	// 	});
	// 	$('.js-inputClear select').each(function() {
	// 		this.selectedIndex  = 0;
	// 	});
	// });
	// $('.js-datepicker').datepicker({
	// 	changeYear: false,
	// 	changeMonth: false
	// });
});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:include/common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
