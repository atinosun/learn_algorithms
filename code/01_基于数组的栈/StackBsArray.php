<?php
//基于数组的栈
$array = [];
$arrData = ['Here','is','a','stack'];
foreach($arrData as $value){
    $ret = array_push($array,$value);
    echo <<<STR
        当前处理的数据为{$value},当前数组长度为{$ret} \n
STR;
}
echo '当前数组结构为:',var_export($array),PHP_EOL;
echo '当前数组指针在',current($array),PHP_EOL;
echo '开始从尾弹出元素:',PHP_EOL;
array_pop($array);
echo '当前数组结构为:',var_export($array),PHP_EOL;
echo '当前数组指针在',current($array),PHP_EOL;

echo '====================',PHP_EOL;
echo '以上过程相当于:',PHP_EOL;
$array = [];
echo '开始赋值:',PHP_EOL;
echo '因为foreach会将内部指针向后移动，故需要先将数组内部指针还原',PHP_EOL;
var_dump(reset($arrData));
while($value = each($arrData)){
    $value   = $value['value'];
    $array[] = $value;
    $length = count($array);
    echo <<<STR
        当前处理的数据为{$value},当前数组长度为{$length} \n
STR;
}
echo '当前数组结构为:',var_export($array),PHP_EOL;
echo '当前数组指针在',current($array),PHP_EOL;
echo '开始从尾弹出元素:',PHP_EOL;
//var_dump(end($array));
unset($array[count($array)-1]);
echo '当前数组结构为:',var_export($array),PHP_EOL;
echo '当前数组指针在',current($array),PHP_EOL;


