<div class="filter-wrap">
    <div class="filter-sort">
        <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sort_order&goods_id&order=<?php if ($this->_var['pager']['sort'] == 'sort_order&goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'sort_order&goods_id'): ?>curr<?php endif; ?>">综合<i class="iconfont <?php if ($this->_var['pager']['sort'] == 'sort_order&goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>icon-arrow-down<?php else: ?>icon-arrow-up<?php endif; ?>"></i></a>
        <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['sales_volume']; ?><i class="iconfont <?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>icon-arrow-down<?php else: ?>icon-arrow-up<?php endif; ?>"></i></a>
        <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'last_update'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['is_new']; ?><i class="iconfont <?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>icon-arrow-down<?php else: ?>icon-arrow-up<?php endif; ?>"></i></a>
        <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=comments_number&order=<?php if ($this->_var['pager']['sort'] == 'comments_number' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'comments_number'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['Comment_number']; ?><i class="iconfont <?php if ($this->_var['pager']['sort'] == 'comments_number' && $this->_var['pager']['order'] == 'DESC'): ?>icon-arrow-down<?php else: ?>icon-arrow-up<?php endif; ?>"></i></a>
        <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['price']; ?><i class="iconfont <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>icon-arrow-down<?php else: ?>icon-arrow-up<?php endif; ?>"></i></a>
    </div>
    <div class="filter-range">
        <div class="fprice">
        	<form method="GET" action="category.php" class="sort" name="listform">
                <?php if ($this->_var['filename'] != "history_list"): ?>
                <div class="fP-box">
                    <input type="text" name="price_min" class="f-text price-min" autocomplete="off" maxlength="6" placeholder="￥" id="price-min" value="<?php if ($this->_var['price_min']): ?><?php echo $this->_var['price_min']; ?><?php endif; ?>">
                    <span>&nbsp;~&nbsp;</span>
                    <input type="text" name="price_max" class="f-text price-max" autocomplete="off" maxlength="6" id="price-max"value="<?php if ($this->_var['price_max']): ?><?php echo $this->_var['price_max']; ?><?php endif; ?>" placeholder="￥">
                </div>
                <div class="fP-expand">
                	<a class="ui-btn-s ui-btn-clear" href="javascript:void(0);" id="clear_price"><?php echo $this->_var['lang']['clear']; ?></a>
					<a href="javascript:void(0);" class="ui-btn-s ui-btn-s-primary ui-btn-submit"><?php echo $this->_var['lang']['assign']; ?></a>
                </div>
                <?php endif; ?>
                <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
                <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
                <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
                <input type="hidden" name="ubrand" value="<?php echo $this->_var['ubrand']; ?>" />
                <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
                <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
                <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
            </form>
        </div>
        <div class="fcheckbox">
                <div class="checkbox_items">
                <div class="checkbox_item <?php if ($this->_var['pager']['ship']): ?> checkbox-checked<?php endif; ?>">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-011" <?php if ($this->_var['pager']['ship']): ?>checked="checked"<?php endif; ?>>
                    <label class="ui-label" for="store-checkbox-011"><?php echo $this->_var['lang']['Free_shipping']; ?></label>
                    <i id="input-i1" rev="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&ship=1&self=<?php echo $this->_var['pager']['self']; ?>&have=<?php echo $this->_var['pager']['have']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>#goods_list"></i>
                    <i id="input-i2" rev="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&ship=0&self=<?php echo $this->_var['pager']['self']; ?>&have=<?php echo $this->_var['pager']['have']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>#goods_list"></i>
                </div>
                <div class="checkbox_item <?php if ($this->_var['pager']['self']): ?> checkbox-checked<?php endif; ?>">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-012" <?php if ($this->_var['pager']['self']): ?>checked="checked"<?php endif; ?>>
                    <label class="ui-label" for="store-checkbox-012"><?php echo $this->_var['lang']['Self_goods']; ?></label>
                    <i id="input-i1" rev="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&ship=<?php echo $this->_var['pager']['ship']; ?>&self=1&have=<?php echo $this->_var['pager']['have']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>#goods_list"></i>
                    <i id="input-i2" rev="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&ship=<?php echo $this->_var['pager']['ship']; ?>&self=0&have=<?php echo $this->_var['pager']['have']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>#goods_list"></i>
                </div>
                <div class="checkbox_item <?php if ($this->_var['pager']['have']): ?> checkbox-checked<?php endif; ?>">
                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-013" <?php if ($this->_var['pager']['have']): ?>checked="checked"<?php endif; ?>>
                    <label class="ui-label" for="store-checkbox-013"><?php echo $this->_var['lang']['Only_have_inventory']; ?></label>
                    <i id="input-i1" rev="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&ship=<?php echo $this->_var['pager']['ship']; ?>&self=<?php echo $this->_var['pager']['self']; ?>&have=1&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>#goods_list"></i>
                    <i id="input-i2" rev="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&ubrand=<?php echo $this->_var['ubrand']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&ship=<?php echo $this->_var['pager']['ship']; ?>&self=<?php echo $this->_var['pager']['self']; ?>&have=0&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>#goods_list"></i>
                </div>
            </div>
        </div>
    </div>
    <?php if ($this->_var['open_area_goods']): ?>   
    <div class="f-store dorpdown">
        <div class="sc-icon">
            <span class="fs-cell"><?php echo $this->_var['lang']['Receiving_land']; ?>：</span>
            <div class="sc-choie"><span class="sc-address"><?php echo $this->_var['province_row']['region_name']; ?>&nbsp;<?php echo $this->_var['city_row']['region_name']; ?>&nbsp;<?php echo $this->_var['district_row']['region_name']; ?></span><i class="icon"></i></div>
        </div>
        <div class="dorpdown-layer" id="area_list">
            <div class="dd-spacer"></div>
            <div id="stock_list" class="stock_list">
                <div class="mt">
                    <ul class="tab">
                        <li onclick="selectStoreTab(0)" class="curr" id="province_li"><?php echo $this->_var['province_row']['region_name']; ?><i class="sc-icon-right"></i></li>
                        <li onclick="selectStoreTab(1)" class="select_city" id="city_li"><?php echo $this->_var['city_row']['region_name']; ?><i class="sc-icon-right"></i></li>
                        <li onclick="selectStoreTab(2)" class="select_district" id="district_type"><?php echo $this->_var['district_row']['region_name']; ?><i class="sc-icon-right"></i></li>
                    </ul>
                    <div class="stock-line"></div>
                </div>
                <div class="mc" id="house_list">
                    <ul class="area-list" id="province_list">
                     
                    <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province_0_99209000_1509031920');$this->_foreach['noprovince'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noprovince']['total'] > 0):
    foreach ($_from AS $this->_var['province_0_99209000_1509031920']):
        $this->_foreach['noprovince']['iteration']++;
?>
                    <li>
                        <a v="<?php echo $this->_var['province_0_99209000_1509031920']['region_id']; ?>" title="<?php echo $this->_var['province_0_99209000_1509031920']['region_name']; ?>" onclick="region.getRegion(<?php echo $this->_var['province_0_99209000_1509031920']['region_id']; ?>, 2, city_list, this,<?php echo $this->_var['user_id']; ?>);" href="javascript:void(0);"><?php echo $this->_var['province_0_99209000_1509031920']['region_name']; ?></a>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
                    </ul>
                </div>
                <div class="mc hide" id="city_list_id">
                    <ul class="area-list" id="city_list">
                                       	                             
                    <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');$this->_foreach['nocity'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nocity']['total'] > 0):
    foreach ($_from AS $this->_var['city']):
        $this->_foreach['nocity']['iteration']++;
?>                                     
                    <li>
                        <a v="<?php echo $this->_var['city']['region_id']; ?>" title="<?php echo $this->_var['city']['region_name']; ?>" onclick="region.getRegion(<?php echo $this->_var['city']['region_id']; ?>, 3, district_list, '<?php echo $this->_var['city']['region_name']; ?>',<?php echo $this->_var['user_id']; ?>);" href="javascript:void(0);"><?php echo $this->_var['city']['region_name']; ?></a>  
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
                    </ul>
                </div>
                <div class="mc hide" id="district_list_id">
                    <ul class="area-list"  id="district_list">
                         
                    <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');$this->_foreach['nodistrict'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nodistrict']['total'] > 0):
    foreach ($_from AS $this->_var['district']):
        $this->_foreach['nodistrict']['iteration']++;
?>
                    <li>                     
                        <a v="<?php echo $this->_var['county']['region_id']; ?>" title="<?php echo $this->_var['district']['region_name']; ?>" onclick="region.changedDis(<?php echo $this->_var['district']['region_id']; ?>,<?php echo $this->_var['user_id']; ?>);" href="javascript:void(0);" id="district_<?php echo $this->_var['district']['region_id']; ?>"><?php echo $this->_var['district']['region_name']; ?></a>  
                    </li>    
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
                    </ul>
                </div>
                <p class="mod_storage_state">商品暂时只支持配送至中国大陆地区</p>
                <div onclick="$('.f-store').removeClass('hover')" class="close"></div>
                <input type="hidden" value="<?php echo $this->_var['province_row']['region_id']; ?>" id="province_id" name="province_region_id">
                <input type="hidden" value="<?php echo $this->_var['city_row']['region_id']; ?>" id="city_id" name="city_region_id">
                <input type="hidden" value="<?php if ($this->_var['district_row']['region_id']): ?><?php echo $this->_var['district_row']['region_id']; ?><?php else: ?>0<?php endif; ?>" id="district_id" name="district_region_id">         
                <input type="hidden" value="<?php echo $this->_var['region_id']; ?>" id="region_id" name="region_id">
                <input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" id="good_id" name="good_id">
                <input type="hidden" value="<?php echo $this->_var['user_id']; ?>" id="user_id" name="user_id">
                <input type="hidden" value="<?php echo $this->_var['area_id']; ?>" id="area_id" name="area_id">
                <input type="hidden" value="<?php echo $this->_var['goods']['user_id']; ?>" id="merchantId" name="merchantId">
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="filter-right">
        <?php if (! $this->_var['category_load_type']): ?>
        <div class="button-page">
            <span class="pageState"><span><?php echo $this->_var['pager']['page']; ?></span>/<?php echo $this->_var['pager']['page_count']; ?></span>
            <a href="<?php if ($this->_var['pager']['page_prev']): ?><?php echo $this->_var['pager']['page_prev']; ?><?php else: ?>javascript:void(0);<?php endif; ?>"<?php if ($this->_var['pager']['page_prev']): ?> class="page page_prev"<?php endif; ?> title="<?php echo $this->_var['lang']['page_prev']; ?>"><i class="iconfont icon-left"></i></a>
            <a href="<?php if ($this->_var['pager']['page_next']): ?><?php echo $this->_var['pager']['page_next']; ?><?php else: ?>javascript:void(0);<?php endif; ?>"<?php if ($this->_var['pager']['page_next']): ?> class="page page_next"<?php endif; ?> title="<?php echo $this->_var['lang']['page_next']; ?>"><i class="iconfont icon-right"></i></a>
        </div>
        <?php endif; ?>
        <?php if ($this->_var['dwt_filename'] != 'history_list'): ?> 
        <div class="styles">
            <ul class="items" ectype="fsortTab">
                <li class="item current" data-type="large"><a href="javascript:void(0)" title="<?php echo $this->_var['lang']['big_pic']; ?><?php echo $this->_var['lang']['pattern']; ?>"><span class="iconfont icon-switch-grid"></span><?php echo $this->_var['lang']['big_pic']; ?></a></li>
                <li class="item" data-type="samll"><a href="javascript:void(0)" title="<?php echo $this->_var['lang']['Small_pic']; ?><?php echo $this->_var['lang']['pattern']; ?>"><span class="iconfont icon-switch-list"></span><?php echo $this->_var['lang']['Small_pic']; ?></a></li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</div>