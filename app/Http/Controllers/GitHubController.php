<?php

namespace App\Http\Controllers;

use App\HttpClient\GithubService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GitHubController extends Controller {

    public function __construct(private GithubService $githubService)
    {

    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function searchRepos(Request $request): JsonResponse
    {
        $response = $this->githubService->search($request);
        if ($response->successful()) {
            $repositories = $response->json();
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetched GitHub repos',
                'data' => $repositories],
                200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch data from GitHub API'],
                500);
        }
    }
}
