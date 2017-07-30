<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= (empty($titleHTML) ? TITLE_NAME : $titleHTML) ?></title>
        <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/bootstrap-theme.min.css">
    </head>
    <body>

        <a href="<?= BASE_URL ?>">Home</a>
        <a href="<?= BASE_URL . 'galeria' ?>">Galeria</a>

        <div class="container">
            
            <a href="<?= BASE_URL ?>login" class="btn btn-info btn-sm">Login</a>

            <?php $this->loadViewInTemplate($viewName, $viewData); ?>

        </div>
        
        <script src="<?= BASE_URL ?>public/assets/js/jquery.min.js"></script>
        <script src="<?= BASE_URL ?>public/assets/js/bootstrap.min.js"></script>
        <script src="<?= BASE_URL ?>public/assets/js/script.js"></script>
        

    </body>
</html>
