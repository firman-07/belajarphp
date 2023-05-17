<?php

use Notification as GlobalNotification;

class Notification
{
    const webDev = "belajar web devolopment php.";
}
interface study
{
    public function personal study();
}
class school implements study
{
   public function persoNlStudy() 
   {
    echo Notification::webDev;
   }
}
$school = new school();
$school->persoNlStudy();