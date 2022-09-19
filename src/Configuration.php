<?php

namespace Application;

class Configuration
{
    public const KEY_NAME           = 'name';

    public const KEY_ITEMS_PER_PAGE = 'items_per_page';

    private array $configuration;


    /**
     * @param array $configuration
     *
     * @return \Application\Configuration
     */
    public static function Factory(array $configuration): Configuration
    {

        $instance                = new static();
        $instance->configuration = $configuration;

        return $instance;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->configuration[static::KEY_NAME];
    }


    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return (int) $this->configuration[static::KEY_ITEMS_PER_PAGE];
    }
}
