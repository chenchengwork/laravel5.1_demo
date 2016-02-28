<?php
/**
 * Created by PhpStorm.
 * User: chencheng
 * Date: 16-2-27
 * Time: 上午11:29
 */

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Gate;

class IndexController extends Controller
{

    public function showDemo()
    {
        $post = new \stdClass();

        if (Gate::denies('update-post', $post)) {
            dd("该操作权限不足");
            abort(403);
        }


        return view('demo.index');
    }
}