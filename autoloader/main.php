<?php 
namespace CloudStorage;
include "autoloader.php";

use \CloudStorage\Mail\Mailer;
use \CloudStorage\fileSystem\Scanner;
use \CloudStorage\fileSystem\files\images\Jpeg;

class Main{
    function __construct(){
        echo "the main class\n";
        //$mailer = new Mail\Mailer();
        $mailer = new Mailer();
        $mailer->sendMail();
        echo "\n";
        $scanner = new Scanner();
        $scanner->scan();
        echo "\n";
        $jpeg = new Jpeg();
        echo $jpeg->getDimention(); 
    }
}
new Main;