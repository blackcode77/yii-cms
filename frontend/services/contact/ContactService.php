<?php
/**
 * Created by PhpStorm.
 * User: blackcode
 * Date: 16.12.17
 * Time: 23:34
 */

namespace frontend\services\contact;

use frontend\forms\ContactForm;


class ContactService
{
    private $adminEmail;

    public function __construct($adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(ContactForm $form): void
    {
        $sent = \Yii::$app->mailer->compose()
            ->setTo($this->adminEmail)
            ->setSubject($form->subject)
            ->setTextBody($form->body)
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Sending error.');
        }
    }
}