<html>
    <title>messages</title>
    <head>
        <style>
        body{
            width: 100%;
            background-color: grbisque;

        }
        table{
            width: 100%;
            border-style: solid;
            background-color: gray;
        }
        .col-md-2{
            background-color: blue;
            color: white;
            height: 100%;
        }
        .col-md-10{
            background-color: white;
            height: 100%
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-md-2">
            <a href="#">Go to App</a>
            <a href="#">Logout</a>
        </div>

        <div class="col-md-10"> 
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
                        <td style="width: 100px"> <?php echo $row["Message_id"]?> </td> 
                        <td style="width: 100px"> <?php echo $row["Message_From_Email"]?> </td>
                        <td style="width: 100px"> <?php echo $row["Message_From_Name"]?> </td>
                        <td style="width: 100px"> <?php echo $row["Message_Subject"]?> </td>
                        <td style="width: 100px"> <?php echo $row["Message_body"] ?></td>
                <?php } ?>      
                </table>

        
        <?php mysqli_close($conn);?>
    
        </div>
</body>
 </html>