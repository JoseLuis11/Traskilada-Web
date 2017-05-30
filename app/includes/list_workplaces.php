       <?php 
            include("Cshow_workplacesToUser.php");
            
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                ?>
                <a href="../user_views/create_appointment.php?name=<?php echo $row["name_W"];?>" method="GET"><?php echo $row["name_W"];?></a>
       <?php     
            }   
            mysqli_close($mysqli);  
       ?>     
        