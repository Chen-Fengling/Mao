<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title">登录管理 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">	
        	<?php echo $this->fetch('library/login_tab.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i>查看教程</div>
                        <div class="view-case-info">
                        	<a href="http://help.ecmoban.com/article-3540.html" target="_blank">第三方登录插件（QQ互联）申请流程</a>
                        </div>
                    </div>			
                    <?php endif; ?>				
				</div>
                <ul>
                	<li>列表页展示了所有的登录插件名称。</li>
                    <li>安装插件时需到各第三方应用中申请ID和KEY方可使用。</li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--商品列表-->
                <div class="common-head">
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="cog" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-cog"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                </div>
                <div class="common-content">
                    <form action="" method="post" name="listForm" onsubmit="return confirmSubmit(this)">
                	<div class="list-div" id="listDiv">
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                	<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['website_name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['version']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['update_time']; ?></div></th>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['website']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                                <?php if ($this->_var['val']['type'] != 'taobao' && $this->_var['val']['type'] != 'alipay'): ?>
                            	<tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" value="<?php echo $this->_var['val']['type']; ?>" name="checkboxes[]" class="checkbox" id="checkbox_<?php echo $this->_var['val']['type']; ?>" /><label for="checkbox_<?php echo $this->_var['val']['type']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['val']['name']; ?></div></td>								
                                    <td><div class="tDiv"><?php echo $this->_var['val']['version']; ?></div></td>								
                                    <td><div class="tDiv"><?php echo $this->_var['val']['date']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <?php if (! $this->_var['val']['install']): ?>
                                            <a href="website.php?act=install&type=<?php echo $this->_var['val']['type']; ?>" class="btn_inst"><i class="sc_icon sc_icon_inst"></i><?php echo $this->_var['lang']['install']; ?></a>
                                            <?php else: ?>
                                            <a href="website.php?act=view&type=<?php echo $this->_var['val']['type']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="website.php?act=uninstall&type=<?php echo $this->_var['val']['type']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['uninstall']; ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </td>                           
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="15">
                                        <div class="tDiv">
                                            <div class="tfoot_btninfo">
                                            	<div id="typeselect" class="imitate_select select_w120">
                                                  <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                                  <ul>
                                                     <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                                     <li><a href="javascript:;" data-value="create" class="ftx-01"><?php echo $this->_var['lang']['batch_create']; ?></a></li>
                                                     <li><a href="javascript:;" data-value="uninstall" class="ftx-01"><?php echo $this->_var['lang']['uninstall']; ?></a></li>
                                                  </ul>
                                                  <input name="type" type="hidden" value="" id="typeval">
                                                </div>
                                                        
                                                <input type="hidden" name="act" value="batch" />
                                                <input type="submit" value="确定" name="remove" id="btnSubmit" ectype="btnSubmit" class="btn btn_disabled " disabled="">
                                                <div class="checkbox_items fl font12 mt5"id="show_check" style="width:auto;">
                                                    <div class="checkbox_item">
                                                        <input type="checkbox" value="1" name="is_show_name" class="ui-checkbox" id="is_show_name" />
                                                        <label for="is_show_name" class="ui-label"><?php echo $this->_var['lang']['is_show_name']; ?></label>
                                                    </div>
                                                    <div class="checkbox_item">
                                                        <input type="checkbox" value="1" name="is_show_title" class="ui-checkbox" id="is_show_title" />
                                                        <label for="is_show_title" class="ui-label"><?php echo $this->_var['lang']['is_show_title']; ?></label>
                                                    </div>
                                                    <div class="checkbox_item">
                                                        <input type="checkbox" value="1" name="is_show_help" class="ui-checkbox" id="is_show_help" />
                                                        <label for="is_show_help" class="ui-label"><?php echo $this->_var['lang']['is_show_help']; ?></label>
                                                    </div>
                                                    <div class="checkbox_item">
                                                        <input type="checkbox" value="1" name="is_open" class="ui-checkbox" id="is_open" />
                                                        <label for="is_open" class="ui-label"><?php echo $this->_var['lang']['is_open']; ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>							
                        </table>
                    </div>
                    </form>
                </div>
                <!--商品列表end-->
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript" language="JavaScript">
        $.divselect("#typeselect","#typeval",function(obj){
            changeAction();
        });
        /**
        * @param: bool ext 其他条件：用于转移分类
        */
       function confirmSubmit(frm)
       {
           if (frm.find("input[name='type']").val() == 'uninstall')
           {
               return confirm(confrim_uninstall);
           }
           else if (frm.find("input[name='type']").val() == '')
           {
               return false;
           }
           else
           {
               return true;
           }
       }

        function changeAction()
         {
              var frm = $("form[name='listForm']");
             // 切换分类列表的显示
            $("#show_check").css('display',frm.find("input[name='type']").val() == 'create' ? '' : 'none');
            if(frm.find("input[name='type']").val() == 'create')
            {
                    return;
            }
             if ($('#btnSubmit').attr("disabled") != 'disabled' &&
                 confirmSubmit(frm, false))
             {
                 frm.submit();
             }
         }
	</script>
</body>
</html>