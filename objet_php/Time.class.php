<?php

class Time {

 	private $hours;
 	private $minutes;
    private $seconds;

    

	public function __construct($hours, $minutes, $seconds) {
    
		$this->hours = $hours; 
    	$this->minutes = $minutes;
		$this->seconds = $seconds; 

	}


	public function showTime() {
    
    	echo $this->hours.':'.$this->minutes.':'.$this->seconds;
    }
    
    public function getHour() {
    
    	return $this->hours;
    
    }
    
    public function setHour($hour) {
    
    	$this->hours = $hour;
    
    }

	public function getMinute() {
    
    	return $this->minutes;
    
    }
    
    public function setMinute($minute) {
    
    	$this->minutes = $minute;

    
    }
    
    public function getSecond() {
    
    	return $this->seconds;
    
    }
    
    public function setSecond($second) {
    
    	$this->seconds = $second;
    
    }

    public function timer($second, $minute ,$hour){
        
        if($second > 59){
        $restSecond = $second%60;
        $resultSecond = (int)($second / 60) ;
        $this->seconds = $restSecond;
        $this->minutes = $resultSecond + $minute;

         echo  $this->seconds. ':'.$this->minutes.':'.$this->hours;

         var_dump('1');
        if($this->minutes > 59){
                $restMinutes = $minute % 60;
                $resultMinutes = (int)($minute/60);
                $this->minutes = $restMinutes;
                $this->hours = $resultMinutes+ $hour;

                 echo  $this->seconds. ':' .$this->minutes.':'  .$this->hours;

                 var_dump('je ne comp'.$this->minutes);

            }

        }else if($minute > 59){
            $restMinutes = $minute % 60;
                $resultMinutes = (int)($minute/60);
                $this->minutes = $restMinutes;
                $this->hours = $resultMinutes + $hour;

                 echo  $this->seconds. ':' .$this->minutes.':'  .$this->hours;
                 
        }



        else{

            $this->seconds = $second ;
            $this->minutes = $minute ;
            $this->hours = $hour ;

            echo  $this->seconds. ':' .$this->minutes.':'  .$this->hours;


            
            }

        
    }

}






?>