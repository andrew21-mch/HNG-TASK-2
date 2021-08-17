<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = "us-cdbr-east-04.cleardb.com";
$cleardb_username = "bc8e20a232e8d6";
$cleardb_password = "f0d6700194d1905";
$cleardb_db = "heroku_56becd3199a95c8";
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
if(!$conn){
    echo " <script>alert('Trouble Connecting to Database')</script>";
}
else{
    echo " <script>alert('Success')</script>";
}


?>