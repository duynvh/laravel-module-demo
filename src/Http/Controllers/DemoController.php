<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 6/15/19
 * Time: 18:42
 */

namespace Module\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use Module\Demo\Models\Demo;

class DemoController extends Controller
{
    public function index()
    {
        Demo::create(['name' => 'Demo ' . time()]);
        return view('module-demo::index');
    }
}