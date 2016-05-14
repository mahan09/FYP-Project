
<?php


function user_exists($username)
{
   
   return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users2015 WHERE username = '$username'"),0) == 1)? true : false;
}


?>