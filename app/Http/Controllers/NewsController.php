<?php

namespace App\Http\Controllers;

use App\Http\NewsClient;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(NewsClient $client)
    {
        $data = $client->topHeadline('us');
        return view('news')
            ->with('data', $data);
    }
}
