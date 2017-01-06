<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/result.css">
		<title></title>
	</head>
	<body>
		<div class="results">
			<label for="">

				<?php
				$html = "";
				$arr = array("和食"=>"日本料理","焼き鳥" =>"烤鸡肉","階"=>"层");
				$apiKey = "e2e7ed7c401c5a7d";
				$url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=".$apiKey."&lat=34.67&lng=135.52&range=5&order=4";
				$xml  =  simplexml_load_file($url);
				for ($i=0; $i <10 ; $i++) {
					$id = $xml->shop[$i]->id;
					$name = $xml->shop[$i]->name;
					$address= $xml->shop[$i]->address;
					$food = $xml->shop[$i]->food->name;
					$html .= "<div>
															<h4>$name</h4>
															<h4>$address</h4>
															<h4>$food</h4>
															<hr>
													</div>";
					$html = strtr($html,$arr);
				}

			echo "$html";


			 ?>


			</label>
		</div>
	</body>
</html>
