<?php
class RegisterService {

	function checkRegister($nameame , $surname , $email , $tel) {
		$$bool_name=0;
		$bool_lname=0;
		$bool_tel=0;

	        /*for ($loopname=0;$loopname<=strlen($name)-1;$loopname++){
	          ////echo "ค่ารหัสaครั้งที่ ".$loopname." =";
			        $check_name=ord(substr($name, $loopname, 1));
	          //echo "$check_name<br>";
	            if(($check_name>64&&$check_name<91)||($check_name>96&&$check_name<123)){
	             $bool_name++;
	           }else {
	              $bool_name--;
	           }
	        }

	            //echo "<br>";
	        for ($looplname=0;$looplname<=strlen($surname)-1;$looplname++){
	          //echo "ค่ารหัสbครั้งที่ ".$looplname." =";
	            $check_lname=ord(substr($surname, $looplname, 1));
	          //echo "$check_lname<br>";
	            if(($check_lname>64&&$check_lname<91)||($check_lname>96&&$check_lname<123)){
	             $bool_lname++;
	           }else {
	              $bool_lname--;
	           }
		   }*/

	            //echo "<br>";
	        /*for ($looptel=0;$looptel<=strlen($tel)-1;$looptel++){
	          //echo "ค่ารหัสcครั้งที่ ".$looptel." =";
	            $check_tel=ord(substr($tel, $looptel, 1));
	          //echo "$check_tel<br>";
	            $check_tel1=ord(substr($tel, 0, 1));
	            if ($looptel==0) {
	              if ($check_tel1!=48) {
	                  $bool_tel--;
	              }
	            }
	            if(($check_tel>=48&&$check_tel<=57)){
	             $bool_tel++;
	           }else {
	              $bool_tel--;
	           }
		   }*/

			/*$count_email=0;
			$count_email2=0;
			$count_email1=0;
                    //echo "<br>";
                for ($loopemail=0;$loopemail<=strlen($email)-1;$loopemail++){
                  //echo "ค่ารหัสdครั้งที่ ".$loopemail." =";
                    $check_email=ord(substr($email, $loopemail, 1));
                  //echo "$check_email<br>";
                      if(($check_email==64)){
                         $count_email++;//2
                       }
                       if ($check_email==46) {
                          $count_email1++;//2
                       }
                       if($check_email==95){
                        $count_email2++;//2
                       }
                      if(($check_email>64&&$check_email<91)||($check_email>96&&$check_email<123)){
                       $bool_email++;
                      }else {
                        $bool_email--;
                      }
                      //echo $bool_email."<br>";
                  }*/
                    //echo "<br>";
		if ($nameame != "" && $surname != "" && $email != "" && $tel != "")
		{
echo $bool_lname."<br>";
echo strlen($surname)."<br>";
// echo $count_email."<br>";
            /*if ($bool_email<strlen($email)) {
					// echo "aaaaaaaaa".$email1 ."<br>";
					// echo $count_email."<br>";
              if ($count_email==0||$count_email>0) {
                $email1 = 0;
				//echo "t".$email1."<br>";
                }
              }
            else if ($bool_email==strlen($email)) {
              if ($count_email==1) {
                $email1 = 1;
					//echo "t1".$email1."<br>";
              }
		  }*/


            if (strlen($tel) == 10) {
            	$tel1 = 1;
		//	echo "t".$bool_tel."<br>";
            }else {
				$tel1 = 0;
			//echo "t1".$bool_tel."<br>";
            }



            /*if ($bool_lname<strlen($surname)) {
            $surname1 = 0;
            }else {
            $surname1 = 1;
            }



            if ($bool_name<strlen($name)) {
            $name1 = 0;
            }else {
            $name2 = 1;
		}*/

			if(/*$name1 == 1 && $surname1 == 1*/ /*&& $email1 == 1*/  $tel1 == 1){
				return true;
			}
			else{
				return false;
			}
	}
	else {
		return false;
      }
	}
}
?>
