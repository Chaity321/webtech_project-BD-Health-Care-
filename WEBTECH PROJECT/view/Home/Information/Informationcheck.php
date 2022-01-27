<?php
	session_start();

	if(isset($_POST['submit']))
    {
		$publicinfo =$_POST['publicinfo'];
        $moderatorinfo=$_POST['moderatorinfo'];
        $authorinfo=$_POST['authorinfo'];
        