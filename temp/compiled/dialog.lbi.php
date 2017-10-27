<?php if ($this->_var['act'] == 'merchants_article'): ?>
    <div class="w w1200">
        <div class="settled-article-warp">
        	<div class="step-nav">
            	<div class="title">
                    <h3><?php echo $this->_var['title']; ?></h3>
                </div>
                <div class="sett-r-btn">
                    <a href="<?php echo $this->_var['url_merchants_steps']; ?>" class="imrz"><?php echo $this->_var['lang']['settled_down']; ?></a>
                    <a href="<?php echo $this->_var['url_merchants_steps_site']; ?>" class="view-prog"><?php echo $this->_var['lang']['settled_down_schedule_step']; ?></a>
                </div>
            </div>
            <div class="sett-a-item">
                <div class="sett-cont">
                    <?php echo $this->_var['article']; ?>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <?php $_from = $this->_var['regions_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
    <div class="option" data-value="<?php echo $this->_var['list']['region_id']; ?>" data-type="<?php echo $this->_var['type']; ?>" data-text="<?php echo $this->_var['list']['region_name']; ?>" ectype="ragionItem"><?php echo $this->_var['list']['region_name']; ?></div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>