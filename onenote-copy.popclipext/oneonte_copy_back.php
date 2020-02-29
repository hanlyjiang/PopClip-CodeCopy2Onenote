<?php
mb_internal_encoding("UTF-8");
$input=getenv('POPCLIP_TEXT');
// $input=getenv('POPCLIP_HTML');
function trim_blank($str){
    //partern的第一位是个空格
    $partern = '/[ \x{00a0}]/u';
    return preg_replace($partern,' ', $str);
}
$result=trim_blank($input);
echo $result;

?>
