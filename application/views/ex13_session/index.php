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
	<? if($username){ ?>
	<h1> 저장된 세션값 : <?=$username?> </h1>
	<? }else{ ?>
	<h1> 세션없음 </h1>
	<? } ?>
	
	<form action="<?=base_url()?>ex13_session/result" method="post">
		<input type="text" name="username" placeholder="Username">
		<button type="submit">세션저장</button>
	</form>
	

</body>