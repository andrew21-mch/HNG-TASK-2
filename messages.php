<?php
use mysql_xdevapi\Table;
include_once "config.php";

$sql = "SELECT * FROM messages";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($sql);
while($row){
    echo "<table>".
        "<tr>".
            "<th>Message Id</th>".
            "<th>Email of Sender</th>".
            "<th>Name of Sender</th>".
            "<th>Subject</th>
            <th>Content</th>".
        "</tr>
        <tr>".
           " <td>".$row['Message_id']."</td>".
            "<td>".$row['Message_From_Email']."</td>".
            "<td>".$row['Message_From_Name']."</td>".
            "<td>".$row['Message_Subject']."</td>".
            "<td>".$row['Message_body']."</td>".

        "</tr>".
    "</table>";
}