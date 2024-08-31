<h1>Loops</h1>
<?php
$i=1;
while($i<0){
    echo $i;
    $i++;

}
$o=1;
do{
    echo $o;
    $o++;
}
while($o <6);

$colors=array("red","green","blue","yellow",);
foreach($colors as $x){
    echo "$x <br>";
}
?>
