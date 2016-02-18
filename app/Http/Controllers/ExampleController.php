<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ExampleController extends Controller
{
    public function __construct() {}    

    public function identify(Request $request)
    {
        $name = $request->input('name');
        return "Hello and a good day to you, {$name}... would you care for a cup of tea?\n";
    }

    public function computeFactorial($iterations)
    {
        $result = 1;
        for($i=($result+1); $i<=$iterations; $i++)
        {
            $result = $result * $i;
        }
        return $result;
    }

    public function hitExampleSite()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://example.com', []);
        return str_replace( '<h1>Example Domain</h1>', '<h1>Example Domain (Hi there, Lumen!)</h1>', $res->getBody() );
    }


}
