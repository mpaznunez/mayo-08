<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+JSON:</h3>

<h5>En esta página vemos el detalle de los indicadores del <?php echo('Smart Citizen Kit '.$datos['id'].' instalado en '.$datos['data']['location']['city'].', '.$datos['data']['location']['country']);?>:</h5>

<p>Este kit esta instalado en: <strong><?php echo ($datos["data"]["location"]["city"]);?>,<?php echo ($datos["data"]["location"]["country"]);?></strong></p>
<p>la temperatura en ese lugar es:<strong><?php echo round($datos["data"]["sensors"][3]["value"],2);?><?php echo ($datos["data"]["sensors"][3]["unit"]);?>  <?php echo ($datos["data"]["location"]["exposure"]);?></strong>  </p>
<p>la humedad del aire es:<strong><?php echo round($datos["data"]["sensors"][2]["value"],2);?><?php echo ($datos["data"]["sensors"][2]["unit"]);?>.</strong></p>
<p>la iluminacion:<strong><?php echo round($datos["data"]["sensors"][0]["value"],2);?><?php echo ($datos["data"]["sensors"][0]["unit"]);?>.</strong></p>
<p>El ruido:<strong><?php echo round($datos["data"]["sensors"][7]["value"],2);?><?php echo ($datos["data"]["sensors"][7]["unit"]);?>.</strong></p>

<?php// print_r($datos)?>

<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los indicadores generados por los sensores del <?php echo('Smart Citizen Kit '.$datos['id']);?>.</p>
</div>

</section>
<?php include('footer.php');?>
