<?php

namespace App\Http\Controllers\Admin\PostManagment;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class NormalPostController extends Controller
{
    //
    public function __construct()
    {
        //TODO:To Auth token who access this routes
        //todo:should insert in constructor of controller to auth with provider
        Config::set('jwt.user', Admins::class);
        Config::set('auth.providers', ['users' => [
            'driver' => 'eloquent',
            'model' => Admins::class,
        ]]);
    }

    public final function getFieldsByCharFromName($searchChar):object{
        try {
            $fields=DB::table('fields')->where("name",
                "like",$searchChar.'%')
                ->limit(10)
                ->get();

            return response()->json($fields, 200);
        }catch (\Exception $ex){
            return response()->json("Error", 404);
        }
    }

    public function RemoveAllPosts () {
        DB::statement("SET foreign_key_checks=0");
        Posts::truncate();
        DB::statement("SET foreign_key_checks=1");

        if(Posts::all()->isEmpty()){
            return response()->json("Done Deleted All Posts", 200);
        }
        else{
            return response()->json("error", 400);
        }
    }
}
