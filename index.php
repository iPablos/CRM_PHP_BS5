<?php include("templates/header.php");?>
<br><br>
<div class="p-5 mb-4 bg-light rounded-3 mt-4">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Bienvenido/a al sistema</h1>
      <p class="col-md-8 fs-4"><?php echo $_SESSION['usuario']; ?></p>
      <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
</div>

<?php include("templates/footer.php");?>