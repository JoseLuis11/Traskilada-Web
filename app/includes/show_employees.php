<table class="w3-table w3-striped w3-bordered">
            <thead>
                <tr class="w3-theme">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>E-mail</th>
                </tr>
            </thead>
       <?php 
            include("Cshow_employees.php");
            
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["id_E"];?></td>
                    <td><?php echo $row["name_E"];?></td>
                    <td><?php echo $row["lastName_E"];?></td>
                    <td><?php echo $row["phoneNumber_E"];?></td>
                    <td><?php echo $row["email_E"];?></td>
                </tr>
            </tbody>
       <?php     
            }   
            mysqli_close($mysqli);  
       ?>     
        </table>