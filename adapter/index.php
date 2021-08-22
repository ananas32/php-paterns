<?php

namespace adapter;

include '../autoload.php';

/**
 * Клиентский код работает с классами, которые следуют Целевому интерфейсу.
 */
function clientCode(Notification $notification)
{
    echo $notification->send("Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!");
}

echo "Client code is designed correctly and works with email notifications:<br>";
$notification = new EmailNotification("developers@example.com");
clientCode($notification);
echo "<br><br>";


echo "The same client code can work with other classes via adapter:<br>";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientCode($notification);