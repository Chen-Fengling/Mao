<div class="user-form foreg-form">
    <form action="javascript:;" method="get" name="theForm" id="theForm" class="user-form">
        <div class="form-row">
            <div class="form-label"><span class="red">*</span><?php echo $this->_var['lang']['Consignee']; ?>：</div>
            <div class="form-value">
                <input type="text" class="form-input" value="<?php echo $this->_var['consignee']['consignee']; ?>" maxlength="8" name="consignee" id="consignee_name" onkeyup="this.value=this.value.replace(/[^\u4e00-\u9fa5]/g,'')">
                <span class="fl"><?php echo $this->_var['lang']['consignee_IDCard_Number']; ?>：</span>
                <input type="text" class="form-input" maxlength="18" value="<?php echo $this->_var['consignee']['idcard']; ?>" name="IDCard" id="consignee_IDCard" onkeyup="this.value=this.value.replace(/[^\d]/g,'')">
                <span id="consigneeIdCardlNote" class="status error hide"><?php echo $this->_var['lang']['input_IDCard']; ?></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-label"><span class="red">*</span><?php echo $this->_var['lang']['phone_con']; ?>：</div>
            <div class="form-value">
                <input type="text" class="form-input" maxlength="11" name="mobile" value="<?php echo $this->_var['consignee']['mobile']; ?>" id="consignee_mobile">
                <span class="fl"><?php echo $this->_var['lang']['Fixed_telephone']; ?>：</span>
                <input type="text" class="form-input" maxlength="20" value="<?php echo $this->_var['consignee']['tel']; ?>" name="tel" id="consignee_phone">
                <span id="consigneeMobileTelNote" class="status error hide"><?php echo $this->_var['lang']['input_contact']; ?></span>
            </div>
        </div>
        <?php if ($this->_var['goods_flow_type'] == 101): ?>
        <div class="form-row">
            <div class="form-label form-label-lh"><span class="red">*</span><?php echo $this->_var['lang']['Local_area']; ?>：</div>
            <div class="form-value" ectype="regionLinkage">
                <dl class="mod-select mod-select-small" ectype="smartdropdown" id="selCountries_">
                    <dt>
                    	<span class="txt" ectype="txt"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></span>
                        <input type="hidden" value="<?php echo $this->_var['consignee']['country']; ?>" name="country">
                    </dt>
                    <dd ectype="layer">
                        <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                        <div class="option" data-value="<?php echo $this->_var['country']['region_id']; ?>" data-text="<?php echo $this->_var['country']['region_name']; ?>" ectype="ragionItem" data-type="1"><?php echo $this->_var['country']['region_name']; ?></div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </dd>
                </dl>
                <dl class="mod-select mod-select-small" ectype="smartdropdown" id="selProvinces_">
                    <dt>
                        <span class="txt" ectype="txt"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></span>
                        <input type="hidden" value="<?php echo $this->_var['consignee']['province']; ?>" name="province">
                    </dt>
                    <dd ectype="layer">
                        <div class="option" data-value="0"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></div>
                        <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province_0_90080500_1510143277');if (count($_from)):
    foreach ($_from AS $this->_var['province_0_90080500_1510143277']):
?>
                        <div class="option" data-value="<?php echo $this->_var['province_0_90080500_1510143277']['region_id']; ?>" data-text="<?php echo $this->_var['province_0_90080500_1510143277']['region_name']; ?>" data-type="2" ectype="ragionItem"><?php echo $this->_var['province_0_90080500_1510143277']['region_name']; ?></div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </dd>
                </dl>
                <dl class="mod-select mod-select-small" ectype="smartdropdown" id="selCities_">
                    <dt>
                        <span class="txt" ectype="txt"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></span>
                        <input type="hidden" value="<?php echo $this->_var['consignee']['city']; ?>" name="city">
                    </dt>
                    <dd ectype="layer">
                        <div class="option" data-value="0"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></div>
                        <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                        <div class="option" data-value="<?php echo $this->_var['city']['region_id']; ?>" data-type="3" data-text="<?php echo $this->_var['city']['region_name']; ?>" ectype="ragionItem"><?php echo $this->_var['city']['region_name']; ?></div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </dd>
                </dl>
                <dl class="mod-select mod-select-small" ectype="smartdropdown" id="selDistricts_" style="display:none;">
                    <dt>
                        <span class="txt" ectype="txt"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></span>
                        <input type="hidden" value="<?php echo $this->_var['consignee']['district']; ?>" name="district">
                    </dt>
                    <dd ectype="layer">
                        <div class="option" data-value="0"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></div>
                        <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                        <div class="option" data-value="<?php echo $this->_var['district']['region_id']; ?>" data-type="4" data-text="<?php echo $this->_var['district']['region_name']; ?>" ectype="ragionItem"><?php echo $this->_var['district']['region_name']; ?></div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </dd>
                </dl>
                <dl class="mod-select mod-select-small" ectype="smartdropdown" id="selStreets_" style="display:none;">
                    <dt>
                        <span class="txt" ectype="txt"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></span>
                        <input type="hidden" value="<?php echo $this->_var['consignee']['street']; ?>" name="street">
                    </dt>
                    <dd ectype="layer">
                        <div class="option" data-value="0"><?php echo $this->_var['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></div>
                        <?php $_from = $this->_var['street_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'street');if (count($_from)):
    foreach ($_from AS $this->_var['street']):
?>
                        <div class="option" data-value="<?php echo $this->_var['street']['region_id']; ?>" data-type="5" data-text="<?php echo $this->_var['street']['region_name']; ?>" ectype="ragionItem"><?php echo $this->_var['street']['region_name']; ?></div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </dd>
                </dl>
                <span id="consigneeEreaNote" class="status error hide"></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-label"><span class="red">*</span><?php echo $this->_var['lang']['address_info']; ?>：</div>
            <div class="form-value">
                <input type="text" class="form-input form-input-long" name="address" value="<?php echo $this->_var['consignee']['address']; ?>" id="consignee_address">
                <span id="consigneeAddressNote" class="status error hide"><?php echo $this->_var['lang']['input_address_info']; ?></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-label"><?php echo $this->_var['lang']['Zip_code']; ?>：</div>
            <div class="form-value">
                <input type="text" class="form-input" name="zipcode" value="<?php echo $this->_var['consignee']['zipcode']; ?>" id="consignee_zipcode">
                <span id="consigneeZipcodeNote" class="status error"></span>
            </div>
        </div>
        <?php endif; ?>
        <div class="form-row">
            <div class="form-label"><?php echo $this->_var['lang']['con_email']; ?>：</div>
            <div class="form-value">
                <input type="text" class="form-input" name="email" value="<?php echo $this->_var['consignee']['email']; ?>" id="consignee_email">
                <span id="emailNote" class="status error hide"><?php echo $this->_var['lang']['con_email_input']; ?></span>
            </div>
        </div>
        <?php if ($this->_var['goods_flow_type'] == 101): ?>
        <div class="form-row">
            <div class="form-label"><?php echo $this->_var['lang']['con_sign_building']; ?>：</div>
            <div class="form-value"><input type="text" class="form-input fl" value="<?php echo $this->_var['consignee']['sign_building']; ?>" name="sign_building" id="consignee_sign_building"><div class="notic"><?php echo $this->_var['lang']['sign_building_desc']; ?>&nbsp;&nbsp;</div></div>
            <span id="consigneeAliasNote" class="status error hide"><?php echo $this->_var['lang']['inputcon_sign_building']; ?></span>
        </div>
        <?php endif; ?>
        
        <input name="goods_flow_type" value="<?php echo $this->_var['goods_flow_type']; ?>" type="hidden">
        <input name="address_id" value="<?php echo $this->_var['consignee']['address_id']; ?>" type="hidden">
    </form>
</div>