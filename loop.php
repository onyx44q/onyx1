<h1>Loops</h1>
<?php

//while loop
$max = 0;
while($max < 10){
    print $max . "<br>";
    $max++;
}
//do while loop
?>
<h1>Do while loop</h1>
<?php
$x = 1;
do{
    print $x . "<br>";
    $x++;

}while($x < 7);

?>

<h1>For loop</h1>
<?php

for($r=3; $r<12; $r++){
    print $r."br";

}


?>

<h1>For each</h1>
<?php

$months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
 foreach($months As $month){
    ?>
    <option value = ""><?php print $month; ?></option>
    <?php
 }
?>
</select>
  <select name = "" id ="">
    <?php
    $y = 2014;
    while($y < 2030){
      $y++;
    }

?>
<option value = ""><?php print $y; ?></option>

<br>
<br>
<br>
<br>
