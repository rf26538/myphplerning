<?php
//remove all variable
		session_unset();
		echo 'session unset successful'.'<br>';
//destroy thr session 
		session_destroy();
		echo "session destroyed seccessful";
?>