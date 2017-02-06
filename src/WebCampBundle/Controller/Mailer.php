<?php
require_once '/var/www/html/Webcamp/gailha_p/WebCamp/vendor/swiftmailer/swiftmailer/lib/swift_required.php';

$transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
    ->setUsername('inventairebri@gmail.com')->setPassword('ADMIN123456789');

$mailer = \Swift_Mailer::newInstance($transport);

$message = \Swift_Message::newInstance()
    ->setSubject('title')
    ->setFrom(array('inventairebri@gmail.com' => 'I am someone'))
    ->setTo(array('tanggustin@gmail.com' => "tanggustin@gmail.com"))
    ->addPart("<h1>Welcome</h1>",'text/html')
;

$result = $mailer->send($message);

