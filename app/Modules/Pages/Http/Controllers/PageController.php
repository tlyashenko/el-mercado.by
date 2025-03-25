<?php

namespace App\Modules\Pages\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Pages\Services\PageService;

class PageController extends Controller
{
    public function __construct(private readonly PageService $pageService) {}

    public function index()
    {
        return $this->show('/');
    }

    public function show(string $slug)
    {
        $page = $this->pageService->getPageBySlug($slug);

        if (!$page)
            abort(404);

        return view('index', compact('page'));
    }
}
