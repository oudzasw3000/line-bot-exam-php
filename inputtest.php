<?php 
abstract class LogF{
    static $namefile;
    static $fp;
    public static function setFileName($nameFile='logf'){
        self::$namefile=   $nameFile;
        $file_log=self::$namefile.'_'.date('Ymd').'.txt';
        self::$fp= fopen($file_log, "a+");
    }
    public static function Log($text){
        $text=chr(13).date('Y-m-d H:i').'==>'.$text;
        fwrite(self::$fp, $text);
    }
    public static function closeFile(){
        fclose(self::$fp);        
    }
}
# example of use
LogF::setFileName();
LogF::log('primero');
LogF::log('segundo');
LogF::closeFile();
