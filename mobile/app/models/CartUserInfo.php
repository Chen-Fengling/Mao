<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class CartUserInfo extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'cart_user_info';
	public $timestamps = false;
	protected $fillable = array('ru_id', 'user_id', 'shipping_type', 'shipping_id');
	protected $guarded = array();
}

?>
