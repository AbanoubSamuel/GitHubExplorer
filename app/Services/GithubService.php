<?php

namespace App\Services;


use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubService {

    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = "https://api.github.com/search/repositories";
    }

    public function search(Request $request): Response
    {
        $query = $request->query('q');
        $created = $request->query('created');
        $sort = $request->query('sort');
        $order = $request->query('order');
        $limit = $request->query('limit');

        return Http::get($this->baseUrl, [
            'q' => $query,
            'created' => $created,
            'sort' => $sort,
            'order' => $order,
            'limit' => $limit
        ]);
    }
}