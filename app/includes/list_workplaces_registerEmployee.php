<?php 
    include("Cshow_workplaces.php");
    
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
        ?>
        <option value="<?php echo $row["name_W"];?>"><?php echo $row["name_W"];?></option>
<?php     
    }   
    mysqli_close($mysqli);  
?>