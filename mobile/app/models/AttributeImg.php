<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class AttributeImg extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'attribute_img';
	public $timestamps = false;
	protected $fillable = array('attr_id', 'attr_values', 'attr_img', 'attr_site');
	protected $guarded = array();
}

?>
