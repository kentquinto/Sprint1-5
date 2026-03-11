<?php
require_once "Notification.php";
class SMSNotification implements Notification {
    private $sender;
    public function __construct($sender) {
        $this->sender = $sender;
    }
    public function notify ($message) {
        echo "SMS: " . $message . "| Sender: " . $this->sender . "\n";
    }
}
?>