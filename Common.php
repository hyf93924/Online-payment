<?php

function HmacMd5($data,$key){
// RFC 2104 HMAC implementation for php.
// Creates an md5 HMAC.
// Eliminates the need to install mhash to compute a HMAC
// Hacked by Lance Rushing(NOTE: Hacked means written)
//��Ҫ���û���֧��iconv���������Ĳ���������������
$key = iconv("GB2312","UTF-8",$key);
$data = iconv("GB2312","UTF-8",$data);
$b = 64; // byte length for md5
if (strlen($key) > $b) {
$key = pack("H*",md5($key));
}
$key = str_pad($key, $b, chr(0x00));
$ipad = str_pad('', $b, chr(0x36));
$opad = str_pad('', $b, chr(0x5c));
$k_ipad = $key ^ $ipad ;
$k_opad = $key ^ $opad;
return md5($k_opad . pack("H*",md5($k_ipad . $data)));}

?>