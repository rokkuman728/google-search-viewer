<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Config;

class SearchController extends Controller
{
    public function index()
    {
        return view('search_index');
    }
    public function search(Request $request)
    {
        // GoogleCustomSearchJSON APIのエンドポイント
        $endpoint = 'https://www.googleapis.com/customsearch/v1';
        
        $apiKey = config('services.google.google_api_key');
        $enginId = config('services.google.google_engine_id');
        
        $query = $request->input('search_term');

        $params = [
            'key' => $apiKey,
            'cx' => $enginId,
            'q' => $query,
        ];

        // GuzzleHttpを使用してAPIにGETリクエストを投げる
        $client = new Client();
        $response = $client->get($endpoint, ['query' => $params]);
        $results = json_decode($response->getBody()->getContents(), true);

        return view('search_results', [
            'results' => $results['items'],  
            'query' => $query,
            'serchInfo' => $results['searchInformation'],
        ]);
    }
}
