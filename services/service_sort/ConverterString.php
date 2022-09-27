<?php
class ConverterString{
    public static function filterString($string){
        $content = preg_replace("/[^0-9.-]/", " ", $string);
        $content = preg_replace('/\s+/', ' ', $content);
        $pieces = explode(" ", $content);

        $correctnumbers = array_filter ($pieces, function ($item) {
            return is_numeric($item); });
       return $correctnumbers;
    }
}