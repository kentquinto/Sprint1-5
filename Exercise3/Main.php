<?php
require_once "Notification.php";
require_once "Email.php";
require_once "SMS.php";
require_once "Mailbox.php";
echo "Notification System!!!\n";

$email = new EmailNotification ("ITAcademy");
$email->notify("Welcome to ITAcademy!");
$sms = new SMSNotification("Correos");
$sms->notify("Update your payment information. Official notification from Correos(not scammer).");
$mailbox = new MailboxNotification("Agencia Tributaria");
$mailbox->notify("Seizure of your property due to unpaid taxes."); 
?>