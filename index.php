<?php
// plug-in: PHP extension pack ja PHP Intelephense


//library - me saime sellise klassi

class Job {
    public function task(Logger $logger){
            for($i = 0; $i < 10; $i++){
            $logger->log("task done! #$i\n");

// kahekordsed jutumärgid, kui tahame kasutada \n (line break)
// või muid spetsiaalseid stringi funktsioone
        }
    }
}
interface Logger {
    public function log($message);
}

class ConsoleLogger implements Logger{
    public function log($message){
        echo $message . "\n";
    }
}

// usage code - me tahame, et see klass teeks mingeid asju

class NothingLogger implements Logger{
    public function log($message){

    }
}

class FileLogger implements Logger{
    public function log($message){
        $file = fopen("log.txt", "a");
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

$job = new Job();
$logger = new FileLogger;
$job->task($logger);