
<table class="tabla">
    <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Fecha</th>
        <th>Ubicación</th>
        <th>Validar</th>
    </thead>
    <?php
        $con=new mysqli("localhost","root","root","phpData");
        $query="SELECT id,nombre,correo,titulo,descripcion,fecha,latitud,longitud,estado from denuncias";

        $exec=mysqli_query($con,$query);
        foreach($exec as $row){
    ?>
    <tr>
        <td><?php echo $row["nombre"]?></td>
        <td><?php echo $row["correo"]?></td>
        <td><?php echo $row["titulo"]?></td>
        <td><?php echo $row["descripcion"]?></td>
        <td><?php echo $row["fecha"]?></td>
        <td><?php echo ($row["latitud"].'.'.$row["longitud"])?></td>
        <td><?php 
            if($row["estado"]=="Enviado"){
                ?>
                <a href="/templates/valid.php?id=<?php echo $row["id"]?>">Aceptar Reporte</a>
                <?php
            }
        ?></td>
    </tr>
    <?php } ?>
</table>