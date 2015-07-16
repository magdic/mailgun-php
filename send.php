<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
//Your credentials
$mg = new Mailgun("key-xxxxxxxxxxx");
$domain = "https://api.mailgun.net/v3/xxxxxxxxxxxx.mailgun.org";

//Customise the email - self explanatory
$mg->sendMessage($domain, array(
'from'=>'Sender <sender@mail.com>',
'to'=> 'my@mail.com',
'subject' => 'Mailgun and Php!',
'html'=> '<html>Sending an <b>email</b>, with <b>PHP</b> and <b>Mailgun API</b></html>'
    )
);

