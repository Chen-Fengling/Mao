<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a>登录管理 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
                <ul>
                	<li>填写在第三方申请的信息参数。</li>
                    <li>标识“<em>*</em>”的选项为必填项，其余为选填项。</li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="website.php" method="post" onSubmit="return checkForm(this)" id="website_form">
                            <div class="switch_info">
								<?php $_from = $this->_var['info']['config']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><span class="txt"><?php if ($this->_var['lang'][$this->_var['val']['name']]): ?><?php echo $this->_var['lang'][$this->_var['val']['name']]; ?><?php else: ?><?php echo $this->_var['val']['name']; ?><?php endif; ?></span>：</div>
                                    <div class="label_value">
										<input name="jntoo[<?php echo $this->_var['val']['name']; ?>]" ectype="jntoo" type="<?php echo $this->_var['val']['type']; ?>" value="<?php if ($this->_var['config'][$this->_var['val']['name']]): ?><?php echo $this->_var['config'][$this->_var['val']['name']]; ?><?php else: ?><?php echo $this->_var['$val']['value']; ?><?php endif; ?>" size="45" class="text" />
										<?php if ($this->_var['lang']['help'][$this->_var['val']['name']]): ?>
										<div class="notic" id="app_key_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['lang']['help'][$this->_var['val']['name']]; ?></div>
										<?php endif; ?>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><span class="txt"><?php echo $this->_var['lang']['user_rank']; ?></span>：</div>
                                    <div class="label_value">
										<input name="rank_name" type="text" ectype="jntoo" value="<?php echo $this->_var['rank']['rank_name']; ?>" size="30" class="text" />
                                        <div class="form_prompt"></div>
										<div class="notic" id="user_rank"><?php echo $this->_var['lang']['help_rank_name']; ?></div>
                                        <input type="hidden" name="olb_rank_name" value="<?php echo $this->_var['rank']['rank_name']; ?>" />
										<input type="hidden" name="rank_id" value="<?php echo $this->_var['rank']['rank_id']; ?>" />
                                    </div>
                                </div>								
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['website_web']; ?>：</div>
                                    <div class="label_value">
										<a href="<?php echo $this->_var['info']['website']; ?>" target="_blank" class="blue"><?php echo $this->_var['lang']['once']; ?></a>   
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
										<input type="hidden" name="type" value="<?php echo $this->_var['type']; ?>" />
										<input type="hidden" name="act" value="<?php echo $this->_var['act']; ?>" />
										<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" id="submitBtn" />
										<input type="button" onClick="window.history.go(-1)" value="<?php echo $this->_var['lang']['cancel']; ?>" class="button button_reset" />
                                    </div>
                                </div>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	
	<script language="JavaScript">
	$(function(){
		//表单验证
		$("#submitBtn").click(function(){
			var fade = true;
			$("input[ectype='jntoo']").each(function(index, element) {
				var value = $(element).val();
				var text = $(element).parents(".item").find(".label span.txt").html();
				if(value == ""){
					$(element).addClass("error");
					$(element).siblings("div.form_prompt").html("<label class='error'><i class='icon icon-exclamation-sign'></i>请输入"+text+"</label>");
					$(element).siblings("div.notic").hide();
					fade = false;
				}else{
					fade = true;
				}
			});
			
			return fade;
		});
	})

	function searchGoods()
	{
	  var filter = new Object;
	  filter.keyword  = document.forms['theForm'].elements['keyword'].value;

	  Ajax.call('tag_manage.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
	}

	function searchGoodsResponse(result)
	{
	  if (result.error == '1' && result.message != '')
	  {
		alert(result.message);
		return;
	  }

	  var sel = document.forms['theForm'].elements['goods_id'];

	  sel.length = 0;

	  /* 创建 options */
	  var goods = result.content;
	  if (goods)
	  {
		for (i = 0; i < goods.length; i++)
		{
		  var opt = document.createElement("OPTION");
		  opt.value = goods[i].goods_id;
		  opt.text  = goods[i].goods_name;
		  sel.options.add(opt);
		}
	  }

	  return;
	}
	//-->
	</script>
	
</body>
</html>
