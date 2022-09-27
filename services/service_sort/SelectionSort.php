<?php
include_once 'ConverterString.php';
class SelectionSort{
    public static function sort($arr) {
        $size = count($arr);
        for ($i = 0; $i < $size-1; $i++){
            $min = $i;
            for ($j = $i + 1; $j < $size; $j++){
                if ($arr[$j] < $arr[$min]){
                    $min = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
        return $arr;
    }
    public static function outputArray($arr){
        foreach($arr as $value)
            echo $value." ";
    }
}
