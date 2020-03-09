<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conexion = new PDO('mysql:host=localhost;dbname=personas', 'root','');?>
<table class="table-striped">

    <tr>
<th>id </th>
<th>nombre</th>
<th>email</th>
    </tr>
    
    

<?php foreach ($conexion->query("SELECT * FROM personas ") AS $per ){?>
<tr>
<td><?php echo $per["id"] ?></td>
<td><?php echo $per["nombre"] ?></td>
<td><?php echo $per["email"] ?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>