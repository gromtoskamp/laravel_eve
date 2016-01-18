<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Api\Character;

class apiController extends Controller
{

    /** @var Character App\Api\Character */
    protected $apiCharacter;

    public function __construct(Character $apiCharacter)
    {
        $this->apiCharacter = $apiCharacter;
    }

    public function getCharacter()
    {
        print_r($_REQUEST);
        echo 'test';
    }

    public function getAllcharacters()
    {
        $this->apiCharacter->getAllCharacterInfo();
    }

    public function getCharacters()
    {
        print_r('test3');
        exit;
    }
}