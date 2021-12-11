
<table class="tabla">
    <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Fecha</th>
        <th>Ubicación</th>
    </thead>
    <?php
        $con=new mysqli("localhost","root","root","phpData");
        $query="SELECT nombre,correo,titulo,descripcion,fecha,latitud,longitud from denuncias where estado='Atendiendo' or estado='Aceptado';";

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
    </tr>
    <?php } ?>
</table>