<?php

namespace app\components\helpers;

use Yii;
use app\models\XfUser;
use yii\helpers\Url;
use yii\swiftmailer\Mailer;

class EmailHelper
{

    public static function sendEmail($emailTo , $subject ,$link, $param ,$charset = 'utf-8')
    {
        $mail = new Mailer();
       
        $teamplate = $mail->render($link, ['param' => $param],'/mailtemplate' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'html');
        $compose =  Yii::$app->mailer->compose()
                ->setFrom('from@domain.com')
                ->setCharset($charset)
                ->setTo($emailTo)
                ->setSubject($subject)                
                ->setHtmlBody($teamplate)
                ->send();
        return $compose;
    }

}
