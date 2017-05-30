<table class="w3-table w3-striped w3-bordered">
            <thead>
                <tr class="w3-theme">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                </tr>
            </thead>
       <?php 
            include("Cshow_workplacesToUser.php");
            
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["id_W"];?></td>
                    <td><?php echo $row["name_W"];?></td>
                    <td><?php echo $row["address_W"];?></td>
                </tr>
            </tbody>
       <?php     
            }   
            mysqli_close($mysqli);  
       ?>     
        </table>