<?php
    require('Model/Database.php');
     $db = new Database;

     $db->connect();

     // xử lý các request tại đây

     $db->closeDatabase();



?>