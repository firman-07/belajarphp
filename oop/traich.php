<?php

use Notification as GlobalNotification;

class Notification
{
    const oop = "oop is so funny to learn, but so hard ";
}
trait learn
{
    public function learnoop()
    {
        echo Notification::oop;
    }
}
class learnToday
{
    use learn;
}
$learn = new learnToday();
$learn->learnoop();
