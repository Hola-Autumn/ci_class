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
	<h1> 저장된 Flashdata : <?=$temp_input?> </h1>
	<? }else{ ?>
	<h1> Flashdata 없음 </h1>
	<? } ?>
	
	<form action="<?=base_url()?>ex14_flashdata/result" method="post">
		<input type="text" name="temp_input" placeholder="임시저장값">
		<button type="submit">세션저장</button>
	</form>
	

</body>