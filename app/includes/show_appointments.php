<table class="w3-table w3-striped w3-bordered">
            <thead>
                <tr class="w3-theme">
                    <th>Fecha y Hora</th>
                    <th>Local</th>
                    <th>Cliente</th>
                    <th>Empleado</th>
                    <th>Servicios</th>
                </tr>
            </thead>
       <?php 
            include("Cshow_appointments.php");
           //falta editar esto 
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["DateTime"];?></td>
                    <td><?php echo $row["Name"];?></td>
                    <td><?php echo $row["LastName"];?></td>
                </tr>
            </tbody>
       <?php     
            }   
            mysqli_close($mysqli);  
       ?>     
        </table>