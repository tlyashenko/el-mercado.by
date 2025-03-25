<?php

namespace App\Widgets;

use App\Models\CatalogCategory;
use Arrilot\Widgets\AbstractWidget;

class CategoriesList extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.categories_list', [
            'config' => $this->config,
            'categories' => CatalogCategory::query()->where(['is_published' => true])->get(),
        ]);
    }
}
