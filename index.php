<!-- INDEX PAGE -->
<!-- ECF "Créer un site web avec HTML, CSS et Bootstrap", Par Pierre BLANCHARD -->
<!-- Référence évaluation : GDWFSHTMLCSSBOOTEXAIII1A -->

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réunion des campeurs de france Acceuil - Par Pierre BLANCHARD</title>
    <meta name="description" content="Bienvenue sur le site de la réunion des campeurs de france, groupe de réunion de camping depuis 1995." >
    <link rel="stylesheet" href="style/style.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
        crossorigin="anonymous"
    >

</head>

<body>

    <?php
    include './html/header.html'
    ?>

    <main id="main">

        <div class="container-fluid d-flex justify-content-center align-items-center m-0 p-0">
            <div class="col-10 d-flex flex-column m-0 p-0">

                <?php
                include './html/who.html'
                ?>
                
                <?php
                include './html/activity.html'
                ?>

            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>









