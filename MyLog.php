<?php namespace polueva;
use core\LogAbstract;
use core\LogInterface;
class MyLog extends LogAbstract implements LogInterface
{
    public function _log(string $str)
    {
        $this->log []= $str;
    }

    public static function log($str):void
    {
        self::Instance()->_log($str);
    }
    public function _write()
    {
        foreach($this->log as $value){
            echo $value."\n";
            $log.=$value."\n";
        }
        $d = new \DateTime();
        $file = "./log/". $d->format('d-m-Y\TH_i_s.u').".log";
        if (!is_dir('./log/')) {
            mkdir("./log/");
        }
        file_put_contents($file,$log);
    }

    public static function write():void
    {
        self::Instance()->_write();
    }
}

?>