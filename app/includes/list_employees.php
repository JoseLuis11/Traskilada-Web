<?php

    $result = $mysqli->query("SELECT id_W
    from workplace
    where name_W = '$workplace';");
    $row=$result->fetch_array(MYSQLI_ASSOC);

    $workplace_id = $row["id_W"];

    include("Cchoose_employees.php");
    
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
        ?>
<?php     
    }   
    mysqli_close($mysqli);  
?>
