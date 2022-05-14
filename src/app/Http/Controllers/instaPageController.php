<?php

namespace App\Http\Controllers;

use App\Http\Requests\instaPageRequest;
use App\Server\Instagram\Page\instaPageService;

class instaPageController extends Controller
{
    public function __construct()
    {
        $this->instaPageService = new instaPageService();
    }

    public function all(instaPageRequest $request)
    {
        dd($this->instaPageService->requestPage($request->url, $request->sessionid));
    }

    public function limit($limit, instaPageRequest $request)
    {
        dd($this->instaPageService->requestPage($request->url, $request->sessionid, $limit));
    }
}
