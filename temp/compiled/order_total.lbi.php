
<div class="order-summary">
    <div class="statistic">
        <div class="list">
            <span><em><?php echo $this->_var['cart_goods_number']; ?></em> 件商品，总商品金额：</span>
            <em class="price" id="warePriceId"><?php echo $this->_var['total']['goods_price_formated']; ?></em>
        </div>
        <?php if ($this->_var['total']['dis_amount'] > 0): ?>
        <div class="list">
            <span><?php echo $this->_var['lang']['dis_amount']; ?>：</span>
            <em class="price" id="cachBackId"> -<?php echo $this->_var['total']['dis_amount_formated']; ?></em>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['total']['discount'] > 0): ?>
        <div class="list">
            <span><?php echo $this->_var['lang']['discount']; ?>：</span>
            <em class="price" id="cachBackId"> -<?php echo $this->_var['total']['discount_formated']; ?></em>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['total']['tax'] > 0): ?>
        <div class="list">
            <span><?php echo $this->_var['lang']['tax']; ?>：</span>
            <em class="price" id="cachBackId"> +<?php echo $this->_var['total']['tax_formated']; ?></em>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['total']['shipping_fee'] > 0): ?>
        <div class="list">
            <span><?php echo $this->_var['lang']['shipping_fee']; ?>：</span>
            <em class="price" id="freightPriceId">+<?php echo $this->_var['total']['shipping_fee_formated']; ?></em>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['total']['shipping_insure'] > 0): ?>
        <div class="list">
            <span><?php echo $this->_var['lang']['insure_fee']; ?>：</span>
            <em class="price" id="cachBackId"> +<?php echo $this->_var['total']['shipping_insure_formated']; ?></em>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['total']['pay_fee'] > 0): ?>
        <div class="list">
            <span><?php echo $this->_var['lang']['pay_fee']; ?>：</span>
            <em class="price" id="cachBackId"> +<?php echo $this->_var['total']['pay_fee_formated']; ?></em>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['total']['surplus'] > 0 || $this->_var['total']['integral'] > 0 || $this->_var['total']['bonus'] > 0 || $this->_var['total']['coupons'] > 0 || $this->_var['total']['value_card'] > 0): ?>
            <?php if ($this->_var['total']['surplus'] > 0): ?>
            <div class="list">
                <span><?php echo $this->_var['lang']['use_surplus']; ?>：</span>
                <em class="price" id="cachBackId"> -<?php echo $this->_var['total']['surplus_formated']; ?></em>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['total']['integral'] > 0): ?>
            <div class="list">
                <span><?php echo $this->_var['lang']['use_integral']; ?>：</span>
                <em class="price" id="cachBackId"> -<?php echo $this->_var['total']['integral_formated']; ?></em>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['total']['bonus'] > 0): ?>
            <div class="list">
                <span><?php echo $this->_var['lang']['use_bonus']; ?>：</span>
                <em class="price" id="cachBackId"> -<?php echo $this->_var['total']['bonus_formated']; ?></em>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['total']['coupons'] > 0): ?>
            <div class="list">
                <span><?php echo $this->_var['lang']['label_coupons']; ?>：</span>
                <em class="price" id="cachBackId"> -<?php echo $this->_var['total']['coupons_formated']; ?></em>
            </div>
            <?php endif; ?>
            <?php if ($this->_var['total']['value_card'] > 0): ?>
			<?php if ($this->_var['total']['card_dis'] != ''): ?>
            <div class="list">
                <span>储值卡折扣：</span>
                <em class="price" id="cachBackId"> <?php echo $this->_var['total']['card_dis']; ?>折</em>
            </div>
			<?php endif; ?>
            <div class="list">
                <span>使用储值卡：</span>
                <em class="price" id="cachBackId"> -<?php echo $this->_var['total']['value_card_formated']; ?></em>
            </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="list">
            <span>应付总额：</span>
            <em class="price-total"><?php echo $this->_var['total']['amount_formated']; ?></em>
        </div>
        <?php if ($this->_var['total']['exchange_integral']): ?>
            <div class="list">
                <span class="txt flow_exchange_goods"><?php echo $this->_var['lang']['notice_eg_integral']; ?></span>
                <em class="price" id="payPriceId" class="flow_exchange_goods"><?php echo $this->_var['total']['exchange_integral']; ?></em>
            </div>
            <span class="txt" style="padding-left:15px; display:none">
                使用支付类型：
                <select name="pay_type" id="sel_pay_type">
                    <option value="0"><?php echo $this->_var['lang']['rmb_pay']; ?></option>
                    <option value="1" <?php if ($this->_var['is_exchange_goods'] == 1): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['integral_pay']; ?></option>
                </select>
            </span>
        <?php endif; ?>
        <?php if ($this->_var['is_group_buy']): ?><div class="amount-sum"><strong><?php echo $this->_var['lang']['notice_gb_order_amount']; ?></strong></div><?php endif; ?>
    </div>
</div>   

<div class="checkout-foot">
    <input name="goods_flow_type" value="<?php echo $this->_var['goods_flow_type']; ?>" type="hidden">
    <input name="rec_number_str" value="" type="hidden">
	<input name="shipping_prompt_str" value="" type="hidden">
    <input type="hidden" id="store_id" name='store_id' value="<?php echo $this->_var['store_id']; ?>"/>
    <input type="hidden" id="store_seller" value="<?php echo $this->_var['store_seller']; ?>" name="store_seller">
    <input type="hidden" value="<?php echo empty($this->_var['warehouse_id']) ? '0' : $this->_var['warehouse_id']; ?>" name="warehouse_id">
    <input type="hidden" value="<?php echo empty($this->_var['area_id']) ? '0' : $this->_var['area_id']; ?>" name="area_id">
    <div class="btn-area">
            <input type="button" id="submit-done" class="submit-btn" value="<?php echo $this->_var['lang']['submit_order']; ?>">
    </div>
    <div class="d-address">
        <?php if ($this->_var['goods_flow_type'] == 101): ?>
            <span id="sendAddr"><?php echo $this->_var['lang']['Send_to']; ?>：<?php echo $this->_var['consignee']['consignee_address']; ?></span>
        <?php endif; ?>
        <span id="sendMobile"><?php echo $this->_var['lang']['Consignee']; ?>：<?php echo $this->_var['consignee']['consignee']; ?>&nbsp;&nbsp;<?php echo $this->_var['consignee']['mobile']; ?></span>
    </div>
</div>
<script type="text/javascript">
$(function(){
	$(":input[name='order_bonus_sn']").val('');
	
	$("input[name='rec_number']").each(function(index, element) {
        if($(element).val() == 1){
			var store_id = document.getElementById('store_id').value;
			var warehouse_id = $(":input[name='warehouse_id']").val();
			var area_id = $(":input[name='area_id']").val();
			
			(store_id > 0) ? store_id : 0;
			$(".checkout-foot .btn-area").removeClass('no_shipping');
			$(".checkout-foot .btn-area").addClass('no_goods');
			$(".checkout-foot .btn-area").attr('data-url', 'ajax_dialog.php?act=goods_stock_exhausted&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller=<?php echo $this->_var['store_seller']; ?>');
			$(".checkout-foot .btn-area").html('<input type="button" class="submit-btn" value="'+json_languages.submit_order+'"/>');
			return false;
		}
    });
	
	var rec_number = new Array();
	$("input[name='rec_number']").each(function(index, element) {	
		if($(element).val() == 1){
			rec_number.push($(element).attr('id'));
		}
    });
	
	$("input[name='rec_number_str']").val(rec_number);
	
	$("input[name='shipping_prompt']").each(function(index, element) {
        if($(element).val() == 1){
			var store_id = document.getElementById('store_id').value;
			var warehouse_id = $(":input[name='warehouse_id']").val();
			var area_id = $(":input[name='area_id']").val();
			
			(store_id > 0) ? store_id : 0;
			$(".checkout-foot .btn-area").removeClass('no_goods');
			$(".checkout-foot .btn-area").addClass('no_shipping');
			$(".checkout-foot .btn-area").attr('data-url', 'ajax_dialog.php?act=shipping_prompt&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller=<?php echo $this->_var['store_seller']; ?>');
			$(".checkout-foot .btn-area").html('<input type="button" class="submit-btn" value="'+json_languages.submit_order+'"/>');
			return false;			
		}
    });
	
	var shipping_prompt = new Array();
	$("input[name='shipping_prompt']").each(function(index, element) {	
		if($(element).val() == 1){
			shipping_prompt.push($(element).attr('id'));
		}
    });
	
	$("input[name='shipping_prompt_str']").val(shipping_prompt);
	
	<?php if ($this->_var['is_exchange_goods'] == 1 || $this->_var['total']['real_goods_count'] == 0): ?>
	$('.flow_exchange_goods').show();
	<?php endif; ?>
	
	$(document).on("click","#submit-done",function(){
		var value = new Array();
		var rec_id = new Array();
		var shipping_list = $(":input[name='shipping[]']");
		var cart_list = $(":input[name='cart_info[]']");
		
		shipping_list.each(function(index, element) {
			
			var val = $(this).data("sellerid") + "-" + $(this).val();
			
			value.push(val);
        });
		
		cart_list.each(function(index, element) {
			rec_id.push($(this).val());
        });
		
		
		var store_id = document.getElementById('store_id').value;
		var warehouse_id = $(":input[name='warehouse_id']").val();
		var area_id = $(":input[name='area_id']").val();
		var where = '&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&store_id=' + store_id + '&store_seller=<?php echo $this->_var['store_seller']; ?>';
		
		Ajax.call('ajax_dialog.php', 'act=flow_shipping&shipping_list=' + value + '&rec_id=' + rec_id + where, notShippingResponse, 'POST', 'JSON');
	});
	
	function notShippingResponse(result){
		
		if(result.error == 1){
			pb({
				id:'noGoods',
				title:json_languages.No_shipping,
				width:670,
				ok_title:json_languages.go_up, 	//按钮名称
				cl_title:json_languages.back_cart, 	//按钮名称
				content:result.content, 	//调取内容
				drag:false,
				foot:true,
				onOk:function(){
					$("form[name='stockFormCart']").submit();
				},
				onCancel:function(){
					location.href = "flow.php";
				}
			});
			$('.pb-ok').addClass('color_df3134');
		}else{
			$("form[name='doneTheForm']").submit();
		}
	}
});
</script>