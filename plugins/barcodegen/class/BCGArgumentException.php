<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
class BCGArgumentException extends Exception
{
	protected $param;

	public function __construct($message, $param)
	{
		$this->param = $param;
		parent::__construct($message, 20000);
	}
}

?>
