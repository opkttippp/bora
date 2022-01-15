<?php

namespace api\object;

use Swift_Attachment;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Mail
{
    public object $mailer;

    public static function send($prodId)
    {

        $transport = (new Swift_SmtpTransport('smtp.ukr.net', 465))
            ->setUsername('tttolll@ukr.net')
            ->setPassword('xh3GrAQtvDAphMAc')
            ->setEncryption('SSL');
        $mailer = new Swift_Mailer($transport);
        $message = (new Swift_Message('Hello!!! Subject'))
            ->setFrom(['tttolll@ukr.net' => 'ttttt'])
            ->setTo(['tttolll@rambler.ru' => 'tolik'])
            ->setBody(' Hello!!!');

        $attachment = Swift_Attachment::fromPath('../public/images/301.jpg');
        $message->attach($attachment);

        $mailer->send($message);
        echo " Success!";
    }
}
