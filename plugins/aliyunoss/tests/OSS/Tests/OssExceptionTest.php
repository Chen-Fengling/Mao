<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
namespace OSS\Tests;

class OssExceptionTest extends \PHPUnit_Framework_TestCase
{
	public function testOSS_exception()
	{
		try {
			throw new \OSS\Core\OssException('ERR');
			$this->assertTrue(false);
		}
		catch (\OSS\Core\OssException $e) {
			$this->assertNotNull($e);
			$this->assertEquals($e->getMessage(), 'ERR');
		}
	}
}

?>
