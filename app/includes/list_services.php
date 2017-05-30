<?php 
    include("Cshow_services.php");
    
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
        ?>
        <option value="<?php echo $row["Service"];?>"><?php echo $row["Service"];?></option>
<?php     
    }   
    mysqli_close($mysqli);  
?>