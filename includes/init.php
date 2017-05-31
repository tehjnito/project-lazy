   <?php
//Initiation file that starts the session and includes db on all pages.

    session_start();
     ob_start();
    
    include("db.php");
   

?>