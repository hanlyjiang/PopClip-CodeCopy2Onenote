<?php
mb_internal_encoding("UTF-8");
$input=getenv('POPCLIP_TEXT');

function trim_blank($str){
    //partern的第一位是个空格
    $partern = '/[ \x{00a0}\x{1680}\x{2000}-\x{200a}\x{202f}\x{205f}\x{3000}\x{2060}]/u';
    return preg_replace($partern,' ', $str);
}

$result=trim_blank($input);
echo $result;

?>
