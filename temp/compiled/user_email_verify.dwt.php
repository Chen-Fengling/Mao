<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body class="third_body">
    <div class="get_pwd">
    <div class="loginRegister-header">
        <div class="w w1200">
            <div class="logo">
                <div class="logoImg"><a href="./index.php" class="logo"><?php if ($this->_var['user_login_logo']): ?><img src="<?php echo $this->_var['user_login_logo']; ?>" /><?php endif; ?></a></div>
                <div class="logo-span">
                    <?php if ($this->_var['user_login_logo']): ?><b style="background:url(<?php echo $this->_var['login_logo_pic']; ?>) no-repeat;"></b><?php endif; ?>
                </div>
            </div>
            <div class="header-href">
                <span><?php echo $this->_var['lang']['hello']; ?>，<?php echo $this->_var['info']['nick_name']; ?><a href="<?php echo $this->_var['site_domain']; ?>user.php?act=logout"><?php echo $this->_var['lang']['logout']; ?></a></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="w w1200">
            <div class="get_pwd_warp">
                <div class="get_pwd_form">
                    
                    <div class="form form-other">
                        <div class="item item-other">
                            <div class="item-label">&nbsp;</div>
                            <div class="gp-tab">
                                <ul>
                                    <li class="curr"><i class="iconfont icon-mobile-phone"></i>邮箱验证</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="gp-content">
                            <div class="gp-warp formPhone" style="display:block;">
                                <form name="formLogin" action="user.php" method="post" id="checkd_email_code">
                                	<div class="msg_ts">
                                    	<div class="error" id="phone_notice"></div>
                                    </div>
                                    <div class="item">
                                        <div class="item-label"><?php echo $this->_var['lang']['Login_name']; ?>：</div>
                                        <div class="item-info item-info-not"><em class="mr10"><?php echo $this->_var['info']['username']; ?></em></div>
                                    	<div class="input-tip"><span></span></div>
                                    </div>
                                    <div class="item">
                                        <div class="item-label"><?php echo $this->_var['lang']['Post']; ?><span style=" width:14px; height:12px; display:inline-block;"></span><?php echo $this->_var['lang']['box']; ?>：</div>
                                        <div class="item-info<?php if ($this->_var['info']['email']): ?> item-info-not<?php endif; ?>">
                                           <?php if (! $this->_var['info']['email']): ?>
                                                <input id="userEmail" name="email" type="text" value="" class="text" />
                                            <?php else: ?>
                                                <?php echo $this->_var['info']['email']; ?>
                                                <input name="email" type="hidden" value="<?php echo $this->_var['info']['email']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="input-tip"><span></span></div>
                                    </div>
                                   <div class="item">
                                        <div class="item-label"><?php echo $this->_var['lang']['comment_captcha']; ?>：</div>
                                        <div class="item-info">
                                            <input type="text"  name="code" id="send_code" class="text text-2"  maxlength="6" value="" autocomplete="off"placeholder="<?php echo $this->_var['lang']['code_number']; ?>"/>
                                            <a href="javascript:void(0);"  onclick="sendChangeEmail();" class="sms-btn"><?php echo $this->_var['lang']['get_verification_code']; ?></a>
                                        </div>
                                        <div class="input-tip"><span></span></div>
                                    </div>
                                    
                                    <div class="item item2 item-button">
                                        <input name="act" type="hidden" value="email_send_succeed" />
                                        <input type="button" name="button" value="提&nbsp;交" class="btn sc-redBg-btn ui-button-lorange">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/page_footer_flow.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js,cart_common.js,cart_quick_links.js,warehouse_area.js')); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript">
$(".ui-button-lorange").click(function(){
    var send_code = $("#send_code").val();
    var msg = '';
	
	if(document.getElementById('userEmail')){
		var email = $("#userEmail").val();
		if (email == '')
		{
			msg += json_languages.verify_email_null + '\n';  
		}
		else if (!Utils.isEmail(email))
		{
			msg += json_languages.verify_email_Wrongful + '\n';  
		}
	}
	
	if (send_code == '')
    {
        msg += json_languages.null_captcha_login + '\n';  
    }
	
    else if(send_code.length < 4)
    {
        msg += json_languages.verify_email_code_number + '\n';  
    }
	
    if(msg.length > 0){
		pbDialog(msg,"",0);
    }else{
        Ajax.call( 'user.php?act=checkd_email_send_code', 'send_code='+send_code, checkd_email_send_code , 'GET', 'JSON');
    }
    
});

function checkd_email_send_code(result){
    if(result.error == 1){
         $("#checkd_email_code").submit();
    }else{
		pbDialog(json_languages.error_email_login,"",0);
    }
}

function sendChangeEmail(){
	
	var email = '';
	if(document.getElementById('userEmail')){
		email = $("#userEmail").val();
		email = "&email=" + email;
	}

	Ajax.call( 'user.php?act=user_email_send', 'type=1' + email, email_callback , 'GET', 'TEXT', true, true );
}

function email_callback(result){
	if ( result.replace(/\r\n/g,'') == 'ok' )
  	{
		alert(json_languages.Mailbox_sent);
	}
}
</script>   
</body>
</html>
