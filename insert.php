<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
</head>
<body>
	<?PHP
		if($_POST['submit'] == "ȷ��"){
			
			$con = mysql_connect('localhost', 'root', '');
			if (!$con) {
				die ('�������ݿ����: ' . mysql_error());
			}
			mysql_select_db("yuemei",$con);
			$sqlInsert="insert into resume (name) values ( '{$_POST['name']}')";
			if (mysql_query($sqlInsert,$con))
			{
				echo "��ϲ�㣬������resume���ݱ����ɹ���!";
			}
			else
			{
				echo "����resume���ݱ��������ţ�".mysql_errno()." ����ԭ��".mysql_error();
			} 

			 echo "<script>alert('����ɹ���');javascript:location.href='./insert.php'</script>";
		}


	?>
	<form method="post" action="insert.php">
		������<input type="text" size=16 name="name"><br>
		<input type="submit" name="submit" value="ȷ��">
	</body>

</html>
