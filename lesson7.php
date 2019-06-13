<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 9:49 AM
 */
//rsort() sort arrays in descending order
$cars=array('benz','vw','toyota','audi','ford');
rsort($cars);
for ($x=0; $x<count($cars);$x++){
    echo$x.$cars[$x]."<br>";
}
asort();
//asort ()sort associative array in ascending order
//according to value
foreach($food as $country=>$dish){
    echo"$country:$dish<br>";

}
asort($food);

foreach($food as $country => $dish) {
    echo "$country: $dish <br>";
}
?>

