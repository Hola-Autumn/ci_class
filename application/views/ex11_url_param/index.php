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
	<h1>index</h1>
	<form action="<?=base_url()?>ex11_post/result" method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="text" name="email" placeholder="Email">
		<button type="submit">전송</button>
	</form>

</body>