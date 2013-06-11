<?php
$chars = "abcdefghijkmnopqrstuvwxyz023456789";
   				 srand((double)microtime()*1000000);
    				 $i = 0;
				$var='';
    				$pass = '' ;
   				 while ($i <= 9) 
				{
       					 $num = rand() % 33;
        				 $tmp = substr($chars, $num, 1);
        				$pass = $pass . $tmp;
        				$i++;
    				}
    				$var= $pass;

$activelinkactivated=1;
?>
<p>Please click on the folloeing to get your account activated</p>
<a href="http://10.90.90.97/creditrepair/app.php/confirmation?activelinkactivated=<?php echo$activelinkactivated?>&wecomename=<?php echo $name?>&role=<?php echo $role?>">www.creditrepair.com<?php echo $var ?></a>
