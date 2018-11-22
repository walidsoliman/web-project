<?php
  include ("database.php");

  $tab=" create table bus (id int not null primary key auto_increment ,
  source char(30) not null  ,
  distnation  char(30) not null,
  move_t varchar(100) NOT NULL,
	arrive_t varchar(250) NOT NULL,
 day date not null,grade char(30) not null 
 ,price int not null);";
  $r=$db->myExec($tab);
  
  if($r===false)
  {
    echo" Erorre in creat table";
  }
  else
  echo "sucsses";
  $tab ="CREATE  table reserve (id int not null  ,num int not null,primary key (id,num) );";
  $r=$db->myExec($tab);
  
  if($r===false)
  {
    echo" Erorre in creat table2";
  }
  else
  echo "sucsses"
?>