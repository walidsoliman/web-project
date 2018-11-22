
<script>
k=0;
function fun(x){

 document.getElementById(x).style.backgroundColor ="green";
k++;
 }
 function fun2(){
 
 alert ("you have reserve "+k+"  ticket");
 
 }
 </script>

 
 <form method ="get"  action="">
<table>
<?php 
$x=1;

for ( $i=1 ;$i<=15 ;$i++)
{?>
<tr> 

<?php for( $j=$x ;$j<=$i*4 ;$j++){?>
<td>

<input type ="button" name ='n'  id="bt<?php echo $j?>" value='<?php echo $j ;?>' onclick="fun('bt<?php echo $j?>') "></td>
<?php


  if ($j %2 ==0) 
echo "<td></td><td></td>";}?>		
</tr>
<?php $x=$j;   
}?>
</table>

<input type="submit" name ="f" value="انهاء الحجز" onclick="fun2()" >
</form>