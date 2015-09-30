<?php
require_once ("inc/Services/Twilio.php");
$strfromnumber = "+13853557227";
$strtonumber =   "+15512259993";
$strmsg = "Hello from Shah Nishit";
 
$accountsid = "PNb2b8d32e395342872ca3a7b6f6d10b24";
$authtoken = "2b932114990d3d43860f5a1aedd43aa2";
 
$objconnection = new Services_Twilio($accountsid, $authtoken);
 
$bsuccess = $objconnection->account->sms_messages->create(
      $strfromnumber,
      $strtonumber,
      $strmsg
);
echo "Sent <b>Text</b>: $strmsg, <b>Number</b>: $strtonumber";
?>
