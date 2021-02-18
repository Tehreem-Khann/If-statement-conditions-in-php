<?php

$percentage=$_POST['percentage'];

if ($percentage>=35 && $percentage<=40)
 {
	echo "<select><option>KU</option><option>NED</option><option>IBA</option></select>";
}
elseif ($percentage>=41 && $percentage<=60)
 {
	echo "<select><option>Sir Syed</option><option>Aga Khan</option><option>IU</option></select>";
}
elseif ($percentage>=61 && $percentage<=75)
 {
	echo "<select><option>Ilma</option><option>DOW</option><option>Hamdarad</option></select>";
}
elseif ($percentage>=76 && $percentage<=100)
 {
	echo "<select><option>Ziauddin</option><option>IBM</option><option>KIE</option></select>";
}
else
{
	header('Location: task1.php');
    exit;
}
?>
