<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+GeoJSON:</h3>

<p>En esta página vemos el detalle de <strong><?php print($datos['properties']['place']);?></strong></p>

<h1> <?php echo($datos["properties"]["mag"]);?></h1>
<h2> <?php echo($datos["properties"]["place"]);?></h2>

<?php if($datos['properties']['mag']>=6)?>
  <div class="alert alert-danger">UY!</div>


<?php// print_r($datos)?>


<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los datos más importantes del movimiento sístimo que se observa en detalle.</p>
</div>

</section>
<?php include('footer.php');?>
