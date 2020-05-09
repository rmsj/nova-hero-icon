<?php

namespace NovaHeroIcon;

use Laravel\Nova\ResourceTool;

class HeroIcon extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Hero Icon';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'hero-icon';
    }
}
