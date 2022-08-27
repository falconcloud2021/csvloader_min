<?php 
defined('INDEX') or die('Error page not found');

// Mysql connect cred
class MyDB()
{
    var $dblogin = "root";
    var $dbpassword = "";
    var $db = "csv_loader";
    var $dbhost = "localhost";
}