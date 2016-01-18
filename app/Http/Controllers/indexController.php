<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Api\Character;

class indexController extends Controller
{

    protected $character;

    /**
     * @param Test $test
     */
    public function __construct(
        Character $character
    ) {
        $this->character = $character;
    }

    public function index()
    {
        $characterInfo = $this->character->getCharacterInfo();

        return view('index', ['data' => $characterInfo]);
    }

    public function test()
    {
        echo 'test';
        exit;
    }
}
