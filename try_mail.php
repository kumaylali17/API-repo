<?php
require_once 'ClassAutoLoad.php';
$mailCnt = [
    'name_from' => 'Kumaylali Murji',
    'email_from' => 'kumaylali.murji@strathmore.edu',
    'name_to' => 'His mini mail',
    'email_to' => 'kumaylmurji@gmail.com',
    'subject' => ' API class ',
    'body' => 'This is a test email for the <b>API class</b>',
];

$ObjSendMail->Send_Mail($conf, $mailCnt);