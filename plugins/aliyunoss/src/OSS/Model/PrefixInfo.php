<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
namespace OSS\Model;

class PrefixInfo
{
	private $prefix;

	public function __construct($prefix)
	{
		$this->prefix = $prefix;
	}

	public function getPrefix()
	{
		return $this->prefix;
	}
}


?>
