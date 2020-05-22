<?php
include 'core.php';
?> 

<!DOCTYPE>
<html lang="fr">

    <head>
        <meta charset="utf-8"
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Liste Jeux video</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="assets/JS/scriptOlivier.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    </head>

    <body>

        <?php include 'view/navbar.php'; ?>

        <!-- accéder à l'élément unique souhaité dans un des tableaux, ici le 0 qui est le premier (en php tableau 0 = tableau )
        <?= $obj[0]->title ?> -->

        <div class="row justify-content-between ml-5 mr-5">
            <?php foreach ($obj as $game) { ?>

                <div class="card ml-2 mt-5 mb-5 cardCss" style="width: 19rem;">
                    <iframe src="<?= $game->video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <h5 class="card-title position codeManFont"><u><strong><i><?= $game->title; ?></i></strong></u></h5>
                        <p class="card-text description"><?= $game->description; ?></p>
                    </div>
                    <div class="card-footer cardFooterCss" >
                        <p class="card-text position">sortie : <?= $game->date; ?></p>
                        <p class="card-text position">Console : <?= $game->console; ?></p>
                        <p class="card-text position">Fabricant : <?= $game->fabricant; ?></p>
                        <p class="card-text position">Genre : <?= $game->genre; ?></p>
                    </div>
                </div>

            <?php } ?>
        </div>


        <nav aria-label="...">
            <ul class="pagination pagination-sm  ">
                <?php
                for ($i = 1; $i <= $page; $i++) :
                    isset($_GET['page']) ? $_GET['page'] : $_GET['page'] = 1;
                    if ($_GET['page'] != $i) :
                        ?>
                        <li class="page-item"><a class="page-link text-danger" href="?page=<?= $i ?>"><?= $i ?></a></li>
                        <?php
                    else :
                        ?>
                        <li class="page-item disabled page-link text-dark"> <?= $i ?></li>
                        <?php
                        endif;
                    endfor;
                    ?>
            </ul>
        </nav>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

    <footer>

    </footer>


</html>