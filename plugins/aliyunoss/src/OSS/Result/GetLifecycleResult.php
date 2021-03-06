<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
namespace OSS\Result;

class GetLifecycleResult extends Result
{
	protected function parseDataFromResponse()
	{
		$content = $this->rawResponse->body;
		$config = new \OSS\Model\LifecycleConfig();
		$config->parseFromXml($content);
		return $config;
	}

	protected function isResponseOk()
	{
		$status = $this->rawResponse->status;
		if (((int) (intval($status) / 100) == 2) || ((int) intval($status) === 404)) {
			return true;
		}

		return false;
	}
}

?>
