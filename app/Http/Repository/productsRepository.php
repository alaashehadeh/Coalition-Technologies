<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 8/14/2018
 * Time: 6:36 PM
 */

namespace App\Http\Repository;

use Prettus\Repository\Eloquent\BaseRepository;

class productsRepository extends BaseRepository
{
    function model()
    {
        return "App\\products";
    }
}