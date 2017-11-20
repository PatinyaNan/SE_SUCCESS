<?php
class LoginService {

	function checkUser($username , $password) {
		if($username == "demo" && $password = "ok"){
			return true;
		}
		else{
			return false;
		}
	}

}

?>
