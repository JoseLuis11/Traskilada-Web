<table class="w3-table w3-striped w3-bordered">
            <thead>
                <tr class="w3-theme">
                    <th>Fecha y Hora</th>
                    <th>Local</th>
                    <th>Empleado</th>
                    <th>Servicios</th>
                </tr>
            </thead>
       <?php 
            include("Cshow_appointment.php");
           
            $row=$result->fetch_array(MYSQLI_ASSOC)
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["Fecha y hora"];?></td>
                    <td><?php echo $row["Local"];?></td>
                    <td><?php echo $row["Empleado"];?></td>
                    <td><?php echo $row["Servicios"];?></td>
                </tr>
            </tbody>
       <?php     
               
            mysqli_close($mysqli);  
       ?>     
        </table>