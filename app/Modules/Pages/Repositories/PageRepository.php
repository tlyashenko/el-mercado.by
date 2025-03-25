<?php

namespace App\Modules\Pages\Repositories;

use App\Modules\Pages\Models\Page;

class PageRepository
{

    public function getBySlug(string $slug)
    {
        return Page::query()->where('slug', $slug)->first();
    }
}
