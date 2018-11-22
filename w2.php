 
<?php
session_start();

include_once("database.php");
if (isset($_GET['page']))
{
    $page=$_GET['page'];
}
else{
    $page="start";
}

?>
<html dir="rtl">
<head>
	<title>bus masr</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header" >
        <h1>bus masr</h1>
    </div>
	<div id="out_cont">
    <div id="container">
		<div id="main">
			<?php require($page.".php"); ?>	
		</div>
	</div>
	
   </div>
	
</body>
</html>