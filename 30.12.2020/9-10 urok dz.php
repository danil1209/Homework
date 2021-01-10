<?php
echo "1)<br><br>";
function ex1($n) {
    $arr[] = array();
    for ($i = 0; $i < $n; $i++){
        $arr[$i] = rand(1,100);
        echo "$arr[$i] ";
    }
}
ex1(3);


echo "<br><br>2)<br><br>";
function ex2($str){
    print_r(str_word_count($str, 0));
}
$str="HTML, CSS, PHP, BITRIX";
ex2($str);

echo "<br><br>3)<br><br>";
function ex3($str) {
    echo strrev($str);
}
ex3($str);

echo "<br><br>4)<br><br>";
function ex4($str) {
    $ch=mb_strlen($str);
    echo $ch;
}
ex4($str);


echo "<br><br>5)<br><br>";
function ex5($str) {
    $a = str_split($str);
    foreach ($a as $item) {
        echo "$item<br>";
    }
}
ex5($str);