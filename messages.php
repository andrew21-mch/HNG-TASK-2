<html>
    <title>messages</title>
    <head>
        <style>
        body{
            width: 100%;
        }
        table{
            width: 90%;
            border-style: solid;
            border: 2px;
            background-color: gray;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php

        use mysql_xdevapi\Table;
        include_once "config.php";

        $sql = "SELECT * FROM messages";
        $query = mysqli_query($conn, $sql);

            echo "<table>" . "<tr>".
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
</body>
 </html>