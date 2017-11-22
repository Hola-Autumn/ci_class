<!DOCTYPE html>
<html lnag="en">
<!-- 
	/application/views/
 -->
<head>
	<meta charset="UTF-8">
	<title>Codeigniter</title>
</head>
<body>
	<? if($mycookie){ ?>
	<h1>저장된 쿠키값 : <?=$mycookie?></h1>
	<? }else{ ?>
	<h1>저장된 쿠키 없음</h1>
	<? } ?>

	<form action="<?=base_url()?>ex12_cookie/result" method="post">
		<input type="text" name="username" placeholder="Username">
		<button type="submit">쿠키저장</button>
	</form>

</body>