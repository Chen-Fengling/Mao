<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class ZcRankLogo extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_rank_logo';
	public $timestamps = false;
	protected $fillable = array('logo_name', 'img', 'logo_intro');
	protected $guarded = array();
}

?>
