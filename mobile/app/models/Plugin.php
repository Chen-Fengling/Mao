<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace app\models;

class Plugin extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'plugins';
	protected $primaryKey = 'code';
	public $timestamps = false;
	protected $fillable = array('version', 'library', 'assign', 'install_date');
	protected $guarded = array();
}

?>
