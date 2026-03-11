<?php
require_once "Notification.php";
class MailboxNotification implements Notification {
    private $sender;
    public function __construct(string $sender) {
        $this->sender = $sender;
    }
    public function notify ($message) {
        echo "MailBox: " . $message . "| Sender: " . $this->sender . "\n";
    }
}
?>