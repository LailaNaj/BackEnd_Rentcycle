<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bicycle;

class BicycleController extends Controller
{
    public function viewListById($id)
        {
            $bicycle = Bicycle::find($id);
            return view('viewlistbyid', compact('bicycle'));
        }


        public function viewList()
        {
            $bicycles = Bicycle::all();
            return view('viewlist', compact('bicycles'));
        }

}
