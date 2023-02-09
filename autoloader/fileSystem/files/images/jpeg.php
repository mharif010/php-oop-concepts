<?php
namespace CloudStorage\fileSystem\files\images;

use \CloudStorage\fileSystem\files\contracts\ImageContracts;
use \CloudStorage\mail\Mailer;

class Jpeg implements ImageContracts{
    function getDimention(){

        $mail = new Mailer();
        $mail->sendMail();
        echo "\n";
        return "100px*100px";
    }
}