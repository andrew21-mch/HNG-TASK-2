<html>
    <title>messages</title>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dash.css">
    </head>
    <body>
        <div class="col-md-2">
            <h3><a href="#">Go to App</a></h3> <br> <br> <br> <br>
            <h3><a href="#">Logout</a></h3>  
            
        </div>

        <div class="col-md-10"> 
            <h2>
                View Received Messages
            </h2>
        <?php

        use mysql_xdevapi\Table;
        include_once "config.php";

        $sql = "SELECT * FROM messages";
        $query = mysqli_query($conn, $sql);?>

            <table class="table-striped">
            <thead class="thead-dark">
                   <tr>
                    <th><b>#</b></th>
                    <th> <b>Email of Sender</b></th>
                    <th> <b>Name of Sende</b> r</th>
                    <th> <b>Subject</b></th>
                    <th> <b>Content</b></th>
                </tr>
            </thead> 

                <?php
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td style="width: 15%"> <?php echo $row["Message_id"]?> </td> 
                        <td style="width: 15%"> <?php echo $row["Message_From_Email"]?> </td>
                        <td style="width: 15%"> <?php echo $row["Message_From_Name"]?> </td>
                        <td style="width: 15%"> <?php echo $row["Message_Subject"]?> </td>
                        <td style="width: 40%"> <?php echo $row["Message_body"] ?></td>
                <?php } ?>      
                </table>

        
        <?php mysqli_close($conn);?>
    
        </div>
</body>
 </html>