<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
include "../class/CSVReader.php";
$ricette = new CSVReader('../ricette.csv');
$ricetta = $ricette->getDataByIndex($_GET['id'])->getResult();

?>
<?php include "./parts/head.php" ?>

<body>

  <?php include "./parts/navbar.php" ?>
  <?php include "./parts/header.php" ?>

  <!-- Page Content -->
  <main class="container-fluid">
    <div class="container">


      <!-- Ricetta Item Heading -->
      <h1 class="my-4"><?php echo $ricetta['Titolo Articolo'] ?>
        <small><?php echo $ricetta['Categoria'] ?></small>
      </h1>

      <!-- Ricetta Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="https://dummyimage.com/750x500/ebdfeb/c0c2e0&text=foto+ricetta" alt="">
        </div>

        <div class="col-md-4 p-0">

        <div class="bg-white p-3">
            <h3 class="my-3">Ingredienti</h3>
                      <?php echo parseList($ricetta['ingredienti_corretti'])  ?>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="bg-white p-3">
          <h3 class="my-3">Preparazione</h3>
          <?php echo parseP($ricetta['preparazione_corretta'])  ?>
          </div>
        </div>
        <div class="col-md-4">
          <!-- <?php include "./parts/photo-list.php" ?> -->
        </div>
      </div>
      <!-- /.row -->
    </div>
    <aside class="container-fluid bg-secondary">
      <div class="container">
        <!-- Related Ricette Row -->
        
        <?php include "./parts/article-list-horizontal.php" ?>
        <!-- /.row -->

      </div>

    </aside>
  </main>
  <!-- /.container -->



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>