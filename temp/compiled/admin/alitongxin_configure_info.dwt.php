<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
 
<body class="iframe_body">
<div class="warpper">
    <div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a>短信管理 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
            <ul>
                <li>填写短信签名名称和模板ID请与阿里短信申请的保持一致。</li>
                <li>标识“<em>*</em>”的选项为必填项，其余为选填项。</li>
                <li>编辑短信内容时请根据提供的模板进行修改，模板内的每个变量是固定的，且不可改变位置。</li>
            </ul>
        </div>
        <div class="flexilist">

            <div class="mian-info">
                <form action="alitongxin_configure.php" method="post" name="theForm" enctype="multipart/form-data"  id="agency_form">
                    <div class="switch_info user_basic" style="display:block;">
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['sign_name']; ?></div>
                            <div class="label_value">
                                <input type="text" name='set_sign' value='<?php echo $this->_var['note']['set_sign']; ?>' class="text" autocomplete="off" />
                                <div class="form_prompt"></div>
                                <div class="notic m20"><?php echo $this->_var['lang']['aliyu_notice']; ?></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['sms_cdoe']; ?></div>
                            <div class="label_value">
                                <input type="text" name='temp_id' value='<?php echo htmlspecialchars($this->_var['note']['temp_id']); ?>' class="text" autocomplete="off" />
                                <div class="form_prompt"></div>
                                <div class="notic m20"><?php echo $this->_var['lang']['aliyu_sms_notice']; ?></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['temp_content']; ?>：</div>
                            <div class="label_value">
                                <textarea id='temp_content' name='temp_content' placeholder="变量格式：${name}; 示例：验证码${code}，您正在注册成为${product}用户，感谢您的支持！" value=''  cols="60" rows="4" class="textarea" ><?php echo htmlspecialchars($this->_var['note']['temp_content']); ?></textarea>
                                <div class="form_prompt"></div>
                                <div class="notic m20"><?php echo $this->_var['lang']['aliyu_notice']; ?></div>
                            </div>
                        </div>
                        
                        <div class="item str_variable">
                            <div class="label">可用变量：</div>
                            <div class="label_value">
                                <div class="notic m20 aliyu_var">
                                    <p>1、个人：<em id="personal"></em></p>
                                    <p>2、企业：<em id="company"></em></p>
                                    <p>3、变量使用说明：变量不限位置摆放，可自由摆放，但变量不可自定义名称，需保持与以上名称一致.</p>
                                    <p>4、注明：个人和企业区分为阿里短信的账户类型，限制个人变量15个字符，企业无限制.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['send_time']; ?>：</div>
                            <div class="label_value">
                                <div id="send_time_box" class="imitate_select select_w320">
                                  <div class="cite"><?php if ($this->_var['cat_name']): ?><?php echo $this->_var['cat_name']; ?><?php else: ?><?php echo $this->_var['lang']['cat_top']; ?><?php endif; ?></div>
                                  <ul class="upward">
                                      <li><a href="javascript:;" data-value=""  class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                      <?php $_from = $this->_var['send_time']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                                      <li><a href="javascript:;" data-value="<?php echo $this->_var['list']; ?>"  class="ftx-01"><?php echo $this->_var['key']; ?></a></li>
                                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                  </ul>
                                  <input name="send_time" type="hidden" value="<?php echo $this->_var['note']['send_time']; ?>" id="send_time">
                                </div>
                                <div class="form_prompt"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="label">&nbsp;</div>
                            <div class="label_value info_btn mt0">
                                <input type="hidden" name="id" value="<?php echo empty($this->_var['note']['id']) ? '0' : $this->_var['note']['id']; ?>" />
                                 <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                <input type="submit" name="submit" id="submitBtn" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
                                <input class="button button_reset" type="button" value="检测短信模板" onclick="get_sms_template();" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
<script type="text/javascript">
$("input[name='signature']").change(function(){
	var isval = $(this).val();
	if(isval == 1){
			$("#signature").show();
	}else{
			$("#signature").hide();
	}
});

$(function(){
	
	<?php if ($this->_var['note']['id']): ?>
	loadTemplate(<?php echo $this->_var['note']['id']; ?>);
	<?php endif; ?>
	
	$(".str_variable").hide();
	
	//表单验证
	$("#submitBtn").click(function(){
		if($("#agency_form").valid()){
			$("#agency_form").submit();
		}
	});

	$('#agency_form').validate({
		errorPlacement:function(error, element){
			var error_div = element.parents('div.label_value').find('div.form_prompt');
			element.parents('div.label_value').find(".notic").hide();
			error_div.append(error);
		},
		rules:{
			temp_id:{
				required:true
			},
			set_sign:{
				required:true
			},
			temp_content:{
				required:true
			},
			send_time:{
				required:true
			}
		},
		messages:{
			temp_id:{
				required:'<i class="icon icon-exclamation-sign"></i>模板ID不能为空'
			},
			set_sign:{
				required:'<i class="icon icon-exclamation-sign"></i>短信签名不能为空'
			},
			temp_content:{
				required:'<i class="icon icon-exclamation-sign"></i>模板内容不能为空'
			},
			send_time:{
				required:'<i class="icon icon-exclamation-sign"></i>发送时机不能为空'
			}
		}
	});
});

$.divselect("#send_time_box","#send_time",function(obj){
	loadTemplate();
});
	
function loadTemplate(id)
{
	var orgContent = '';
	var curContent = $('#temp_content').val();
	
	if (orgContent != curContent && orgContent != '')
	{
		if (!confirm(save_confirm)){
			return;
		}
	}
	
	var tpl = $('#send_time').val();
	
	if(id){
		var id = '&id=' + id;
	}else{
		var id = "";
	}

	$.jqueryAjax('alitongxin_configure.php', 'act=loat_template&tpl=' + tpl + id, loadTemplateResponse, "GET", "JSON");
}

/**
 * 将模板的内容载入到文本框中
 */
function loadTemplateResponse(result, textResult)
{
	var personal;
	var company;
	
	if (result.error == 0){
		$("#temp_content").val(result.content);
	}
	
	if(result.tpl == 'sms_order_placed' || result.tpl == 'sms_order_payed'){
		personal = "consignee(收货人), order_mobile(联系方式)";
		company = "shop_name(店铺名称), order_sn(订单号), consignee(收货人), order_region(收货地区), address(收货地址), order_mobile(联系方式)";
	}else if(result.tpl == 'sms_order_shipped'){
		personal = "user_name(会员名称), consignee(收货人)";
		company = "shop_name(店铺名称), user_name(会员名称), consignee(收货人), order_sn(订单号)";
	}else if(result.tpl == 'sms_signin'){
		personal = "code(验证码), product(会员名称)";
		company = "code(验证码), product(会员名称)";
	}else if(result.tpl == 'sms_find_signin' || result.tpl == 'sms_code'){
		personal = "code(验证码)";
		company = "code(验证码)";
	}else if(result.tpl == 'sms_price_notic'){
		personal = "user_name(验证码), goods_sn(商品编号)";
		company = "user_name(验证码), goods_sn(商品编号)";
	}else if(result.tpl == 'sms_seller_signin'){
		personal = "login_name(登录账号),password(登录密码)";
		company = "seller_name( 商家名称), login_name(登录账号),password(登录密码)";
	}else if(result.tpl == 'store_order_code'){
		personal = "user_name(用户名),code(提货码)";
		company = "user_name(用户名), order_sn(订单号),code(提货码),store_address(门店地址)";
	}else if(result.tpl == 'user_account_code'){
		personal = "user_name(用户名),fmt_amount(申请金额),process_type(申请类型，提现或充值),examine(审核状态),user_money(余额)";
		company = "user_name(用户名),add_time(添加时间),fmt_amount(申请金额),process_type(申请类型，提现或充值),op_time(审核时间),examine(审核状态),user_money(余额)";
	}
	
	if(result.tpl){
		$(".str_variable").show();
	}else{
		$(".str_variable").hide();
	}
	
	$("#personal").html(personal);
	$("#company").html(company);
}

function get_sms_template(){
	
	var set_sign = $(":input[name='set_sign']").val();
	var temp_id = $(":input[name='temp_id']").val();
	var temp_content = $(":input[name='temp_content']").val();
	var send_time = $(":input[name='send_time']").val();
	var sms_type = 1;
	
	$.jqueryAjax('alitongxin_configure.php', 'act=sms_template' + "&set_sign=" + set_sign + "&temp_id=" + temp_id + "&temp_content=" + temp_content + "&send_time=" + send_time + "&sms_type=" + sms_type, smsTemplateResponse, "GET", "JSON");
}

function smsTemplateResponse(result){
	if(result.error == 1){
		alert("请设置接受短信手机号");
	}else if(result.error == 2){
		alert("短信模板配置有误");
	}else{
		alert("发送成功");
	}
}
</script>
</body>
</html>
