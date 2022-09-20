<?php

	// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
	$db = new mysqli("localhost",'hye0','hye1218','hye0'); 
	$db->set_charset("EUC-KR");

	function query($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>  