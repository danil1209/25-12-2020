<?php
echo "Задание 5.<br>" ;

$b='picture.png';
$c=mb_substr($b,-4,null,'UTF-8');
$v=".png";
if($c==$v){
    echo "yes.<br>";
} else{
    echo "no.<br>";
}
echo "Задача 1.<br>" ;
$str0='123456';
$arr=str_split($str0);
     if( count($arr)>5) {
         echo "$arr[0]$arr[1]$arr[2]$arr[3]$arr[4]... <br>";
     } else{
    echo "$str0<br>";}

echo "Задача 2.<br>" ;
$str='aaccbb';
echo str_replace (['a','b','c'], [1, 2, 3], $str);

echo "<br>Задача 3.<br>" ;
$i = 'abc abc abc';
echo strrpos ($i, 'b');

echo "<br>Задача 4.<br>" ;
$f = 'html css php';
$a = explode (' ', $f);
var_dump($a);

echo "<br>Задача 5.<br>" ;
$date_start = date_create("10-12-2020");
$date_end = date_create("12-12-2020");
$res=date_diff($date_start, $date_end);
echo $res->days;
