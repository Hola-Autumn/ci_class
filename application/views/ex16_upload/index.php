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

	
	<form action="<?=base_url()?>ex16_upload/result" method="post" enctype="multipart/form-data">
		<input type="file" name="photo" placeholder="jpg, png, gif">
		<button type="submit">파일업로드</button>
	</form>
	

</body>