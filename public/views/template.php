<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= (empty($titleHTML) ? TITLE_NAME : $titleHTML) ?></title>
    </head>
    <body>


        <div class="container">

            <?php $this->loadViewInTemplate($viewName, $viewData); ?>

        </div>
        

    </body>
</html>
