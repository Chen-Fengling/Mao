<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Services;

class CategoryService
{
	private $categoryRepository;

	public function __construct(\App\Repositories\Category\CategoryRepository $categoryRepository)
	{
		$this->categoryRepository = $categoryRepository;
	}

	public function categoryList()
	{
		$list = $this->categoryRepository->getAllCategorys();
		return $list;
	}
}


?>
