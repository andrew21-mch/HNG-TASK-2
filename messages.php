<html>
    <title>messages</title>
    <head>
        <style>
        table{
            border: 2px;
            background-color: gray;
        }
    </style>
    </head>
    
<?php


use mysql_xdevapi\Table;
include_once "config.php";

$sql = "SELECT * FROM messages";
$query = mysqli_query($conn, $sql);

    echo "<table style='border: 1'>" . "<tr>".
            "<th>Message Id</th>".
            "<th>Email of Sender</th>".
           " <th>Name of Sender</th>".
            "<th>Subject</th>".
            "<th>Content</th>".
        "</tr>";

        while($row = mysqli_fetch_assoc($query)){
            echo "<tr>";
            echo "<td>".$row["Message_id"]."</td>" .
                 "<td>". $row["Message_From_Email"]. "</td>".
                 "<td>". $row["Message_From_Name"]."</td>".
                 "<td>". $row["Message_Subject"]."</td>".
                 "<td>". $row["Message_body"]. "</td>" ."<tr>";
          }       
        echo "</table>";

 
 mysqli_close($conn);
 ?>
 </html>