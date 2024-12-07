<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 

require_once 'dbconf.php'; //(conf/dbconf.php) (folder/file)
require_once 'myfunc.php';


 
 $id = $_GET['id'];

Studentdetails($id,$connect);


?>


</body>
</html>