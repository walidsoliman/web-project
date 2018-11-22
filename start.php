<html>
    <head>
        <title>start</title>
    </head>
    <body>
        <form method="get">
          
			<?php
              include_once ("database.php");
              
               ?>
			   
			  
			   <select name="gov1" id="gov1">
                <?php
				$rows=$db->getRows("SELECT distinct source FROM bus"); 
				foreach($rows as $res) {
                   ?>   
				<option> <?php echo $res['source']?></option>"
				<?php }?>
				</select><br><br>
				
		
			   <select name="gov2" id="gov2">
			   
                 <?php
               $rows=$db->getRows("SELECT distinct distnation FROM bus"); 
				 foreach($rows as $res) {
                   ?> 
				   
				<option> <?php echo $res['distnation']?></option>"
				<?php }?>
				</select><br><br>
				
				<input type="date" name="da" id="da" ><br><br>
                
			  
			   <select name="grade" id="grade">
                <?php  
				$rows=$db->getRows("SELECT distinct grade FROM bus"); 
				foreach($rows as $res) {
                   ?> 
				   
				<option> <?php echo $res['grade']?></option>
				<?php }?>
                   </select><br><br>
            <input type="hidden" name="page" value="bus">
           <div > <input type="submit" value="عرض" id="sub"></div>
       
        </form>
    </body>
</html>