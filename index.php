<!DOCTYPE html>
<html>
<body>
<?php
   class StopWatch {
       private $startTime;
       private $endTime;
       function start()
       {
           $this->startTime = date('h:m:s');
       }
       function getStart()
       {
           return $this->startTime;
       }
       function stop()
       {
           $this->endTime = date('h:m:s');
       }
       function getEnd()
       {
           return $this->endTime;
       }
       function getElapsedTime()
       {
           return strtotime($this->endTime) - strtotime($this->startTime);
       }
   }
   $watch = new Stopwatch();
   $watch->start();
   echo $watch->getStart() . '<br>';
   sleep(2);
   $watch->stop();
   echo $watch->getEnd().'<br>';
   echo $watch->getElapsedTime();

?>
</body>
</html>