<?php

namespace App\Http\Controllers;

use App\menu;
use App\Setting;
use App\models;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private  $data;
    public function __construct()
    {
        $this->data['menu'] = menu::all()->toArray();
    }
    /*
     * Home
     */

    public function Index(){

        $this->data['head'] = Setting::find(1);
        return view('Index')->with($this->data);
    }
    /*
     * All product
     */
    public function product(){

    }
    /*
     * Product detail
     */
    public function detail($id){

    }
    /*
     * Category
     */
    public function catagory(){

    }

}
