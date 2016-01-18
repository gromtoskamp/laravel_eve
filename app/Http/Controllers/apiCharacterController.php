<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Api\Character;

/**
 * Class apiCharacterController
 *
 * @package App\Http\Controllers
 */
class apiCharacterController extends Controller
{

    protected $apiCharacter;

    protected $response = array();

    /**
     * @param Character $apiCharacter
     */
    public function __construct(
        Character $apiCharacter
    ) {
        $this->apiCharacter = $apiCharacter;
    }

    public function get()
    {
        $data['apiCharacter'] = $this->apiCharacter->getCharacterInfo();

        return $data;
    }

}
