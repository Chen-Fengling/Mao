<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class VoteOption extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'vote_option';
	protected $primaryKey = 'option_id';
	public $timestamps = false;
	protected $fillable = array('vote_id', 'option_name', 'option_count', 'option_order');
	protected $guarded = array();
}

?>
