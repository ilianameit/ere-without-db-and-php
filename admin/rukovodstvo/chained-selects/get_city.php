<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

require_once("db.php");


$result = mysql_query("SELECT * FROM city WHERE `region_id`='".$_POST["region"]."' ");

   echo"<option value=''>выберите город</option>";

while ($row = mysql_fetch_array($result))
{
    echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
}

}

?>
