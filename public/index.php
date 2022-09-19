<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
if (false === isset($_GET['page'])) {
    header('Location: /?page=1');
    exit();
}

require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$manager = \Application\Manager::Factory(\Application\Configuration::Factory(require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php'));

?>

<html>
    <head>
        <link rel="stylesheet" href="/assets/styles.css?ts=<?= rand(0,1000000) ?>" />
        <script src="/assets/jquery-1.12.4.min.js?ts=<?= rand(0,1000000) ?>"></script>
        <script src="/assets/app.js?ts=<?= rand(0,1000000) ?>"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.0/lightgallery.min.js"></script>
        
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.6.0/css/lightgallery-bundle.min.css" />
        
    </head>
    <body>
    <header>
        <?= $manager->getConfiguration()->getName() ?>
    </header>
    <div id="lightgallery">
         <? foreach ($manager->getGallery()->getPagedImages() as $image): ?>          
             <a href="<?= $image->getPath() ?>" data-lg-size="1024-800">
                <img alt="img2" src="<?= $image->getPath() ?>" />
            </a>
        <? endforeach ?>
    </div>
    <div id="paginator">
        <? foreach(range(1, $manager->getGallery()->getMaxPages()) as $availablePage): ?>
            <a href="/?page=<?= $availablePage ?>" class="<?= $availablePage == $manager->getGallery()->getPage()? 'active': '' ?>">
                <?= $availablePage ?>
            </a>
        <? endforeach ?>
    </div>
    </body>
</html>