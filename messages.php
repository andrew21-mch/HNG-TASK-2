<html>
    <title>messages</title>
    <head>
        <style>
        body{
            width: 100%;
        }
        table{
            width: 80%;
            border-style: solid;
            background-color: gray;
        }
        td{
            height: 15px;
            
        }
        tr{
            height:20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php

        use mysql_xdevapi\Table;
        include_once "config.php";

        $sql = "SELECT * FROM messages";
        $query = mysqli_query($conn, $sql);?>

            <table border="1">
                <tr>
                    <th>Message Id</th>
                    <th>Email of Sender</th>
                    <th>Name of Sender</th>
                    <th>Subject</th>
                    <th>Content</th>
                </tr>

                <?php
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td> <?php echo $row["Message_id"]?> </td> 
                        <td> <?php echo $row["Message_From_Email"]?> </td>
                        <td> <?php echo $row["Message_From_Name"]?> </td>
                        <td> <?php echo $row["Message_Subject"]?> </td>
                        <td> <?php echo $row["Message_body"] ?></td>
                <?php } ?>}       
                </table>

        
        <?php mysqli_close($conn);?>
    
    
</body>
 </html>