<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class SaleNotice extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'sale_notice';
	public $timestamps = false;
	protected $fillable = array('user_id', 'goods_id', 'cellphone', 'email', 'hopeDiscount', 'status', 'send_type', 'add_time', 'mark');
	protected $guarded = array();
}

?>
