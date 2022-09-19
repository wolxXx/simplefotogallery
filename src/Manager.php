<?php

namespace Application;

class Manager
{
    
    protected Configuration $configuration;
    protected Gallery $gallery;
    
    public static function Factory(Configuration $configuration): Manager
    {
        $instance = new static();
        $instance->configuration = $configuration;
        $instance->gallery = new Gallery();
        $dataPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR;
        $Directory = new \RecursiveDirectoryIterator($dataPath);
        $Iterator  = new \RecursiveIteratorIterator($Directory);
        $counter = 0;
        foreach ($Iterator as $item) {
            $counter++;
            /**
             * @var \SplFileInfo $item
             */
            if (true === $item->isDir()) {
                continue;
            }
            $instance
                ->getGallery()
                ->addImage(
                    (new Image())
                        ->setPosition($counter)
                        ->setPath('/data/' . $item->getFilename())
                    ->setDescription(null)
                    ->setName($item->getFilename())
                    ->setVisible(true)
                )
                ;
            
        }
        $itemCount    = sizeof($instance->getGallery()->getImages());
        $itemsPerPage = $instance->getConfiguration()->getItemsPerPage();
        $maxPages     = ceil($itemCount / $itemsPerPage);
        $page         = (int) isset($_GET['page']) ? $_GET['page'] : 1;
        $instance
            ->getGallery()
            ->setItemsPerPage($itemsPerPage)
            ->setPage($page)
            ->setMaxPages($maxPages)
            ;
        if ($page < 1 || $page > $maxPages) {
            header('Location: /?page=1');
            exit();
        }
        
        return $instance;
    }
    
    private final function __construct()
    {
    }


    /**
     * @return \Application\Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }


    /**
     * @return \Application\Gallery
     */
    public function getGallery(): Gallery
    {
        return $this->gallery;
    }
}