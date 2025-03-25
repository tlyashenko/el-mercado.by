<?php

namespace App\Modules\Pages\Services;

use App\Modules\Pages\Repositories\PageRepository;

readonly class PageService
{
    public function __construct(private PageRepository $pageRepository) {}

    public function getPageBySlug(string $slug)
    {
        $page = $this->pageRepository->getBySlug($slug);

        if (!$page || !$page->is_published)
            return null;

        return $page;
    }
}
