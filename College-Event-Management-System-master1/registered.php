
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
    <form method="POST">

   
        <label>rid:</label><br>
        <input type="text" name="rid" class="form-control" required><br><br>

        <label>usn:</label><br>
        <input type="text" name="usn" class="form-control" required><br><br>

        <label>event_id:</label><br>
        <input type="text" name="event_id" class="form-control" required><br><br>

        <button type="submit" name="update" required>Submit</button><br><br>
        <a href="usn.php" ><u>Already registered ?</u></a>

    </div>
    </div>
    </div>
    </form>
    

    <?php require 'utils/footer.php'; ?>
    </body>
</html>

<?php

    if (isset($_POST["update"]))
    {
        $rid=$_POST["rid"];
        $usn=$_POST["usn"];
        $event_id=$_POST["event_id"];


        if( !empty(!empty($rid) ||!empty($name) ||!empty($event_id) ))
        {
        
            include 'classes/db1.php';
        $INSERT = "INSERT INTO  registered (rid,usn,event_id) VALUES('$rid','$usn','$event_id')";

          
                if($conn->query($INSERT)===True){
                    echo "<script>
                    alert('Registered Successfully!');
                    window.location.href='usn.php';
                    </script>";
                }
                else
                {
                    echo"<script>
                    alert(' Already registered this usn');
                    window.location.href='usn.php';
                    </script>";
                }
               
                $conn->close();
            
        }
        else
        {
            echo"<script>
            alert('All fields are required');
            window.location.href='register.php';
                    </script>";
        }
    }
    
?>