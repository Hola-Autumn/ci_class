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
	
	<? if($temp_input){ ?>
	<h1> 저장된 tempdata : <?=$temp_input?> </h1>
	<? }else{ ?>
	<h1> tempdata 없음 </h1>
	<? } ?>
	
	<form action="<?=base_url()?>ex15_tempdata/result" method="post">
		<input type="text" name="temp_input" placeholder="임시저장값">
		<button type="submit">세션저장</button>
	</form>
	

</body>