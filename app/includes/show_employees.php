<table class="w3-table w3-striped w3-bordered">
            <thead>
                <tr class="w3-theme">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
            </thead>
       <?php 
            include("Cshow_employees.php");
            
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["Id"];?></td>
                    <td><?php echo $row["Name"];?></td>
                    <td><?php echo $row["LastName"];?></td>
                </tr>
            </tbody>
       <?php     
            }   
            mysqli_close($mysqli);  
       ?>     
        </table>