<?php
namespace fruitstudios\searchit\web\twig;

use fruitstudios\searchit\Plugin;

use Craft;

class Extension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    public function getName(): string
    {
        return 'Searchit Twig Extension';
    }

    public function getFilters(): array
    {
        return [
            new \Twig_SimpleFilter('customFilter', [$this, 'customFilterFunction'])
        ];
    }

    public function customFilterFunction($string): string
    {
        return $string;
    }

}
