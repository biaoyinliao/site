<?php
$con = mysql_connect('localhost', 'root', '');
/************************�����ݿ��д�����*************************/ 
function createDB()
  {
		global $con;
		if (!$con) {
			die ('�������ݿ����: ' . mysql_error());
		}
		if (mysql_query("CREATE DATABASE yuemei",$con))
		{
			echo "��ϲ�㣬���ݿ�".$database."�����ɹ���!";
		}
		else
		{
			echo   "�������ݿ��������ţ�".mysql_errno()." ����ԭ��".mysql_error();
		}
  }
  createDB();
/******************************end***************************************/
/************************�����ݿ��д����� product\*************************/
function create_table()
	{
		global $con;

		mysql_select_db("yuemei",$con);   
		$sqlTable="create   table   product(   
			productid	  int   unsigned   not   null   auto_increment   primary   key,   
			name          varchar(20),   
			path          varchar(30),
			time          int,
			prouctorder   int)";   


		if (mysql_query($sqlTable,$con))
		{
			echo "��ϲ�㣬product���ݱ����ɹ���!";
		}
		else
		{
			echo "����product���ݱ��������ţ�".mysql_errno()." ����ԭ��".mysql_error();
		} 

		$sqlTable="create   table   resume(   
			resumeid			int   unsigned   not   null   auto_increment   primary   key,
			position			varchar(20),
			name				varchar(20), 
			salary				varchar(20),
			education			varchar(20),
			party				varchar(20),
			gender				varchar(4),
			borth				varchar(20),
			tel					varchar(20),
			email				varchar(20),
			address				varchar(20),
			introduction		text)";   


		if (mysql_query($sqlTable,$con))
		{
			echo "��ϲ�㣬resume���ݱ����ɹ���!";
		}
		else
		{
			echo "����resume���ݱ��������ţ�".mysql_errno()." ����ԭ��".mysql_error();
		} 

	}
create_table();

/******************************end***************************************/
mysql_close();
?>