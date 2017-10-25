<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
class BCGDrawException extends Exception
{
	public function __construct($message)
	{
		parent::__construct($message, 30000);
	}
}

?>
