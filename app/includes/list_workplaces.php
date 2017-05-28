       <?php 
            include("Cshow_workplaces.php");
            
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                ?>
                <a href="../user_views/create_appointment.php?name=<?php echo $row["Name"];?>" method="GET"><?php echo $row["Name"];?></a>
       <?php     
            }   
            mysqli_close($mysqli);  
       ?>     
        