<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
abstract class BCGDraw
{
	protected $im;
	protected $filename;

	protected function __construct($im)
	{
		$this->im = $im;
	}

	public function setFilename($filename)
	{
		$this->filename = $filename;
	}

	abstract public function draw();
}


?>
