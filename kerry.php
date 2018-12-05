<?php
	require 'vendor/autoload.php';

	/* ##### ประกาศ Function postJSON ##### */

	function postJSON($postData){

		$url = "https://api.josoco.com/post";

		$ch = curl_init($url);

		$data_string = json_encode($postData);

		curl_setopt($ch, CURLOPT_POST, true);

		curl_setopt($ch, CURLOPT_POSTFIELDS, array("shipping"=>$data_string));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$output = curl_exec ($ch); // execute

		if($output === false)

		{

				echo "Error Number:".curl_errno($ch)."<br>";

				echo "Error String:".curl_error($ch);

		}else{

		curl_close($ch);

		return $output;

		}

	} /* ##### สิ้นสุด Function ##### */



	/* การใช้งาน สร้างรายการสิ้นค้าทั้งหมดของ Order นั้น ๆ จัดเรียงเป็น Array*/

	$data = array(
			"key" => "4c3373935ebb31bd73ad8779daff5d2e",
			"provider" => "4",
			"zipcode"=>"10100",
			"items" => array(
				array("sku"=>"sku001","st"=>"1","w"=>"30","l"=>"30","h"=>"30","weight"=>"0.1","box"=>"1"),
				// array("sku"=>"sku002","w"=>"30","l"=>"30","h"=>"30","weight"=>"10","box"=>"1"),
				// array("sku"=>"sku003","w"=>"30","l"=>"30","h"=>"30","weight"=>"10","box"=>"1")
			));

		$result = json_decode(postJSON($data), TRUE);
		s($result); exit;

		echo "<p>1. คืนค่าแบบ JSON</p>";

		echo "<pre>";

		print_r( postJSON($data) );

		echo "</pre>";



		echo "<br><p>2. คืนค่าแบบ Array</p>";

		echo "<pre>";

		print_r( $result );

		echo "</pre>";

		echo "<br><font color=\"green\">คืนผลลัพธ์ : ".$result["shipping"]["total"]."</font>";

		/* สิ้นสุดการใช้งาน */

?>
