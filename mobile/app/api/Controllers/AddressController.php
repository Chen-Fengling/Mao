<?php
//zend by QQ:2172298892  瑾梦网络  禁止倒卖 一经发现停止任何服务
namespace App\Api\Controllers;

class AddressController
{
	public function index()
	{
		return \App\Models\UserAddress::all();
	}

	public function create()
	{
	}

	public function store()
	{
	}

	public function show($id)
	{
		return \App\Models\UserAddress::first();
	}

	public function edit()
	{
	}

	public function update()
	{
	}

	public function destroy()
	{
	}
}


?>
