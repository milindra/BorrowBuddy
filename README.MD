to start project first add you have full LAMP or WAMP in your computer put borrow buddy in localhost so we can start

1) set mysql database for borrowbuddy

cd <path where borrow buddy is>

mysql -u root -p borrowbuddy < borrowbuddy.sql 

2) open database_connect.php and change password

$dbuser = "root"; (default is root)
$dbpass = "your mysql password";

Note:- sign up page not built yet so use id which is available in database 
