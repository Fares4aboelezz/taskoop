<?php

//question1

class Account{
    private $id;
    private $name;
    private $balance;
 

    public function __construct($ID,$NAME,$BALANCE)
    {
        $this->id=$ID;
        $this->name=$NAME;
        $this->balance=$BALANCE;

    }
    public function getid(){
        return $this->id;
    }
    public function getname(){
        return $this->name;
    }
  
    public function credit($amount){
$this->balance +=$amount;

    }
    public function debit($amount){
        if($amount<=$this->balance){
        $this->balance -=$amount;
        
      
            }
            else{
                echo "amount exceeded balance"."<br>";
            }
        
    }
    public function transfairto($anotheraccount,$amount){
        if($amount<=$this->balance){
            $this->debit($amount);
            $anotheraccount->credit($amount);

    }
    else{
        echo "amount exceeded balance "."<br>";
    }
}
public function getbalance(){
    return $this->balance;
}
    
}
$account1=new Account("1","fares",1000);
$account2=new Account("2","ahmad",700);
 $account1->getbalance()."<br>";
 $account1->credit(200)."<br>";
 $account1->debit(150)."<br>";
 $account1->transfairto($account2,300);
echo "account1 balance ".$account1->getbalance()."<br>";
echo "account2 balance ".$account2->getbalance()."<br>";




//question 2

class Ball{
private $x;
private $y;
private $radius;
private $deltax;
private $deltay;

public function __construct($x,$y,$radius,$deltax,$deltay)
{
    $this->x=$x;
    $this->y=$y;
    $this->radius=$radius;
    $this->deltax=$deltax;
    $this->deltay=$deltay;
}
public function setx($x){
    $this->x=$x;
}
public function sety($y){
    $this->y=$y;
}
public function setradius($radius){
    $this->radius=$radius;
}
public function setdeltax($deltax){
    $this->deltax=$deltax;
}
public function setdeltay($deltay){
    $this->deltay=$deltay;
}
public function getx(){
   return $this->x;
}
public function gety(){
    return $this->y;
 }
 public function getradius(){
    return $this->radius;
 }
 public function getdeltax(){
    return $this->deltax;
 }
 public function getdeltay(){
    return $this->deltay;
 }
  
 public function move(){
    $this->x +=$this->deltax;
    $this->y +=$this->deltay;
 }
 public function reflecthorizontal(){
    $this->deltax=- $this->deltax;
 }
 public function reflectvertical(){
    $this->deltay=- $this->deltay;
 }
 
}
$ball1=new Ball(40,40,30,10,6);
echo "radius is : ".$ball1->getradius()."<br>";
echo "position x and y :".$ball1->getx().",".$ball1->gety()."<br>";

$ball1->move();
echo " the new position x and y :".$ball1->getx().",".$ball1->gety()."<br>";

$ball1->reflecthorizontal();
$ball1->move();
echo " the new position x and y :".$ball1->getx().",".$ball1->gety()."<br>";

$ball1->reflectvertical();
$ball1->move();
echo " the new position x and y :".$ball1->getx().",".$ball1->gety()."<br>";





//question 3

class Date {
    private $day;
    private $month;
    private $year;

    public function __construct($day, $month, $year) {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay() {
        return $this->day;
    }

    public function getMonth() {
        return $this->month;
    }

    public function getYear() {
        return $this->year;
    }

    public function setDay($day) {
        $this->day = $day;
    }

    public function setMonth($month) {
        $this->month = $month;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setdate() {
        return $this->day . '/' . $this->month . '/' . $this->year;
    }
}

$date = new Date(19, 9, 2023);
echo $date->setdate()."<br>";  

$date->setDay(20);
$date->setMonth(10);
$date->setYear(2023);

echo $date->setdate()."<br>";  





//question 4

class Time {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour, $minute, $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function nextSecond() {
        $this->second++;
        
        if ($this->second >= 60) {
            $this->second = 0;
            $this->nextMinute();
        }
        
        return $this;
    }

    public function previousSecond() {
        $this->second--;
        
        if ($this->second < 0) {
            $this->second = 59;
            $this->previousMinute();
        }
        
        return $this;
    }

    private function nextMinute() {
        $this->minute++;
        
        if ($this->minute >= 60) {
            $this->minute = 0;
            $this->nextHour();
        }
    }

    private function previousMinute() {
        $this->minute--;
        
        if ($this->minute < 0) {
            $this->minute = 59;
            $this->previousHour();
        }
    }

    private function nextHour() {
        $this->hour++;
        
        if ($this->hour >= 24) {
            $this->hour = 0;
        }
    }

    private function previousHour() {
        $this->hour--;
        
        if ($this->hour < 0) {
            $this->hour = 23;
        }
    }
    public function setSecond($second) {
        $this->second = $second;
    }
    public function setHour($hour) {
        $this->hour = $hour;
    }
    public function setMinute($minute) {
        $this->minute = $minute;
    }

    public function getHour() {
        return $this->hour;
    }

    public function getMinute() {
        return $this->minute;
    }

    public function getSecond() {
        return $this->second;
    }

    
}

$time1 = new Time(11, 36, 49);

echo "Initial Time: " . $time1->getHour() . ":" . $time1->getMinute() . ":" . $time1->getSecond() . "<br>";

$time->nextSecond()
     ->nextSecond();

echo "Updated Time: " . $time1->getHour() . ":" . $time1->getMinute() . ":" . $time1->getSecond() . "<br>";

$time->previousSecond();

echo "Updated Time: " . $time1->getHour() . ":" . $time1->getMinute() . ":" . $time1->getSecond() . "<br>";
