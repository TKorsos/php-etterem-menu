<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
  </head>
  <body>
    <?php include("nav.php") ?>
    
    <main class="container-lg py-5">
      <section class="row justify-content-center text-center pb-5">
          <article class="col pb-5">
            <h1>Blog</h1>
          </article>
      </section>
      <section class="row row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 justify-content-center justify-content-sm-start">
        <?php
          foreach($this->receptek()[0] as $beturend)  {
            echo '<article class="col-7 col-sm">
                    <div>'.ucfirst($beturend).'</div>';
                    foreach($this->receptek()[1] as $key => $recept) {
                      $filename = './assets/imgs/receptek/'.$beturend.'/' . $key . '.png';
                      if(lcfirst($recept[0]) == $beturend && file_exists($filename)) {
                        echo '
                        <a href="?page=receptekView&id='.$key.'">
                          <div class="card text-bg-dark border-0">
                            <img src="./assets/imgs/receptek/'.$beturend.'/' . $key . '.png" class="card-img" alt="' . $recept . '">
                            <div class="card-img-overlay text-center p-0">
                              <h5 class="card-title">
                                <div class="text-light p-2 rounded-top-2 card-opacity">
                                  '.$recept.'
                                </div>
                              </h5>
                            </div>
                          </div>
                        </a>
                        ';
                      }
                    }
            echo '</article>';
          }
        ?>
      </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>