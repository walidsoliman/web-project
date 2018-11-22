 <form method="get">
                <input type="hidden" name="page" value="start">
                <input type="submit" value="عودة للصفحة الرئيسية" id="dd">
                </form>
            
            <table>
                <tr>
                    
                    <th>قيام</th>
                    <th>وصول</th>
                    <th>السعر  </th>
                    
                    <th>الدرجة  </th>
					<th>حجز  </th>
                    
                </tr>
                <?php
                $g1=$_GET['gov1'];
                $g2=$_GET['gov2'];
				 $gr=$_GET['grade'];
				 $da=$_GET['da'];
                $i=0;
                
              
                $rows = $db->getRows("SELECT * FROM bus  WHERE source= '$g1' And distnation= '$g2' And day='$da'" , array());
                foreach ($rows as $row)
                {
                    $i++;
                ?>
               <tr>
                <td><?php  echo $row['id'] ; ?></td>
                <td><?php  echo $row['move_t'] ; ?></td>
                <td><?php  echo $row['arrive_t'] ; ?></td>
                
               
                <td><?php  echo $row['grade'] ; ?></td>
				 <td><a href="w2.php?page=reserv&id=<?php echo $row['id']?>">حجز</a></td>
             
               </tr>
               <?php
                }
                echo" <div id=ff> من $g1 الي $g2 يوجد $i اتوبيس </div>" ; ?>
            </table>
           
        </body>
    </html>