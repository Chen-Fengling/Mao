<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
namespace OSS\Result;

class UploadPartResult extends Result
{
	protected function parseDataFromResponse()
	{
		$header = $this->rawResponse->header;

		if (isset($header['etag'])) {
			return $header['etag'];
		}

		throw new \OSS\Core\OssException('cannot get ETag');
	}
}

?>
