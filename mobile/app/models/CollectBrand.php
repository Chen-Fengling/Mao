<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class CollectBrand extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'collect_brand';
	protected $primaryKey = 'rec_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'brand_id', 'add_time', 'ru_id');
	protected $guarded = array();
}

?>
