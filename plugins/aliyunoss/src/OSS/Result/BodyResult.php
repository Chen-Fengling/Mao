<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
namespace OSS\Result;

class BodyResult extends Result
{
	protected function parseDataFromResponse()
	{
		return empty($this->rawResponse->body) ? '' : $this->rawResponse->body;
	}
}

?>
