<?php
include("database.php");
$db->myExec("SET NAMES 'utf8'");
$db->myExec('SET CHARACTER SET utf8');
$inse= " insert into bus (source ,distnation,day,move_t,arrive_t,grade,price)values

('cairo','Assuit','2018-12-25','08:00pm','01:00','vip',200),('cairo','qena','2018-12-25','08:00pm','01:00','vip',200)";
      
      
$r=$db->myExec($inse);
  if($r===false)
  {
    echo" Erorre in insert table";
  }
  else
  echo "sucsses";
 
?>