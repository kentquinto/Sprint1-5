<?php
require_once "Notification.php";
class EmailNotification implements Notification {
    private $sender;
     public function __construct(string $sender) {
        $this->sender = $sender;
     }
    public function notify ($message) {
        echo "Email: " . $message . "| Sender: " . $this->sender . "\n";
    }
}
?>