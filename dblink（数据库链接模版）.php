<?php
$link = mysql_connect('数据库位置','用户名','密码');
	/* 下面测试是否链接成功，连接成功$link不为0。 */
	if(!$link){
		die ('can not find datebase location：'.mysql_error());
		} else {
		mysql_select_db('数据库名') 
			or die ('can not find datebase：'.mysql_error());
		}
?>
