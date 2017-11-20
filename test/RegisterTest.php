<?php
class RegisterTest extends PHPUnit_Framework_TestCase {
	public $RegisterService;

	function setUp(){
		$this->registerService = new RegisterService();
	}

	function testLoginPass() {
		$name = "demo";
		$surname = "ok";
		$email = "mm@gmail.com";
		$tel = "0823151897";
		$actualResult = $this->registerService->checkRegister($name , $surname , $email , $tel) ;
		$this->assertTrue($actualResult);
	}
}
?>
