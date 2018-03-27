<?php
//命名框架
namespace app\api\controller;
/**
* 
*/
class Money 
{

	public function index(){
		db("hongbao")->insert([
		
		"h_total"=>1,
		"add_money"=>0.88
		]);
		echo "红包";
	}
	public function hasRecord(){
		return json(db("hongbao")->find());
	}
}
?>