<?php
/**
 * Created by PhpStorm.
 * User: chencheng
 * Date: 16-2-27
 * Time: 上午11:29
 */

namespace App\Http\Controllers\Demo;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{

    public function showDemo()
    {
        //$url = action('Demo\IndexController@showDemo');
        //dd(env('ABC'));
        dd(Config::get('local.app.url'));
        return view('demo.index');
    }
}