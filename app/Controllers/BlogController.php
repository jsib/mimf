<?php

use Core\Facades\DB;
use Core\Facades\View;
use Core\Facades\Route;

class BlogController extends Controller
{
    public function listAction()
    {
        DB::query('SELECT * FROM `users` ORDER BY `name` ASC');
        
        $menu = DB::fetchAll(MYSQLI_ASSOC);
        
        //return view('blog', ['menu' => $menu]);
        return view('index');
        
    }
    
    public function showPostAction($post)
    {
        dump($post);
    }
}
