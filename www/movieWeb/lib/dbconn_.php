<?php

	// localhost = DB�ּ�, web=DB�������̵�, 1234=DB������й�ȣ, post_board="DB�̸�"
	$db = new mysqli("localhost",'hye0','hye1218','hye0'); 
	$db->set_charset("EUC-KR");

	function query($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>  