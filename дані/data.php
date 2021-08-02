<?php
include_once("phaccess.php");
$ox1 = $_COOKIE['ox']+1;
$ox2 = $_COOKIE['ox']-1;
$oy1 = $_COOKIE['oy']+1;
$oy2 = $_COOKIE['oy']-1;
$status_ox = $_POST['ox']; 
$status_oy = $_POST['oy']; 
if(empty($status_ox)){
	}else{
		setcookie("ox", $status_ox);
		echo '<meta http-equiv="refresh" content="0">';
	};
if(empty($status_oy)){
	}else{
		setcookie("oy", $status_oy);
		echo '<meta http-equiv="refresh" content="0">';
	};
echo 'x:'.$_COOKIE['ox'].' y:'.$_COOKIE['oy'].'<br />';
echo '
<form method="POST">
	<button type="submit" name="ox" value="'.$ox1.'">x:'.$ox1.'</button>
	<button type="submit" name="ox" value="'.$ox2.'">x:'.$ox2.'</button>
<br />
	<button type="submit" name="oy" value="'.$oy1.'">y:'.$oy1.'</button>
	<button type="submit" name="oy" value="'.$oy2.'">y:'.$oy2.'</button>
</form>';
if ($_COOKIE['ox'] == 1 and $_COOKIE['oy'] == 1) {
    include_once("p_script/x1y1.php");
};
?>
