<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teszt;

class TesztController extends Controller
{
    public function index()
    {
       /*  return DB::table('teszts')
            ->join('kategorias', 'teszts.kategoriaId', '=', 'kategorias.id')
            ->select(
                'teszts.id',
                'teszts.kerdes',
                'teszts.v1',
                'teszts.v2',
                'teszts.v3',
                'teszts.v4',
                'teszts.helyes',
                'kategorias.kategorianev',
                'kategorias.id as kategoriaId'
            )

            ->get(); */
            return Teszt::all();
    }
}
