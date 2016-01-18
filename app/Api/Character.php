<?php

namespace App\Api;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    protected $tommiejj = array(
        'name'  => 'Tommiejj',
        'skillPoints' => '8234917',
        'marketOrders' => '23',
        'maxMarketOrders' => '50'
    );

    protected $tomaatje93 = array(
        'name'  => 'Tomaatje93',
        'skillPoints' => '2134567',
        'marketOrders' => '84',
        'maxMarketOrders' => '120'
    );

    protected $blorpTowan = array(
        'name'  => 'Blorp Towan',
        'skillPoints' => '750456',
        'marketOrders' => '12',
        'maxMarketOrders' => '30'
    );

    protected $characters = ['tommiejj', 'tomaatje93', 'blorpTowan'];

    /**
     * @return array
     */
    public function getCharacterInfo($characterName =  'tommiejj')
    {
        return $this->$characterName;
    }

    public function getAllCharacterInfo()
    {
        foreach ($this->characters as $characterName) {
            print_r($this->$characterName);
        }
        exit;
    }
}
