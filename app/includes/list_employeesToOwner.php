<?php

    include("Cshow_employees.php");
    
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
        ?>
        <option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>
<?php     
    }   
    mysqli_close($mysqli);  
?>