<?php

include "includes/config.php";

if (isset($_POST['search'])) {

   $Name = $_POST['search'];
   $Query = "SELECT id, driver_name FROM persons WHERE lower(driver_name) LIKE '%$Name%' LIMIT 5";
   $ExecQuery = MySQLi_query($connect, $Query);

   echo '
<ul>
   ';
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>

<div class="list-group">
   <li style="list-style-type: none;" onclick='fill("<?php echo $Result['driver_name']; ?>")'>
       <a href="action/user-view.php?id=<?php echo $Result['id'];?>" class="list-group-item list-group-item-action" style="color: rgba(88, 88, 88, 0.6);"><?php echo $Result['driver_name']; ?></a>
   </li>
</div>

   <?php
}}

?>

</ul>