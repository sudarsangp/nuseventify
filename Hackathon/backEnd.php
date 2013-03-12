<?php
	$link = mysql_connect('localhost','root','');
	mysql_set_charset('UTF-8');
	if(!$link){
		echo('Could not connect successfully');
	}
	else{
    	echo('Connected successfully');
	}
	$db_selected = mysql_select_db('database',$link);
	if(!$db_selected)
	{
    	die('Could not find the database' .mysql_error());
	}
	if($_POST['img_URL']  && $_POST['site_URL']) 
	{
		$query="Insert into image(site_URL,img_URL,Category)
		values('$_POST[site_URL]','$_POST[img_URL]','$_POST[Category]')";
	 	if(!mysql_query($query,$link))
    	{
        	die("At2, Error occured" . mysql_error());
    	}
	}
?>