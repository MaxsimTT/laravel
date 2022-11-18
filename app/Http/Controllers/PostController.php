<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{

    protected static $posts;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public static function addPosts($arr) {

        return self::$posts[] = $arr;
    }

    public function getPosts() {

        // return DB::table('posts')->get();
        // return DB::table('posts')->first();
        // return DB::table('posts')->value('name');
        // DB::table('posts')->orderBy('id')->chunk(2, function($posts) {

        //     foreach ($posts as $post) {
        //         PostController::addPosts($post);
        //     }

        // });

        // dump(self::$posts);

        // return DB::table('posts')->pluck('name');

        // return DB::table('posts')->count();
        // return DB::table('posts')->max('id');

        // dump(DB::table('posts')->select(['id', 'description', 'author'])->get());

        // dump(DB::table('posts')->distinct()->select('author')->get());

        // $query = DB::table('posts')->select('author');
        // // code for conditions
        // $posts = $query->addSelect('description AS desc')->get();
        // dump($posts);

        // dump(DB::table('posts')->distinct()->select('author', 'id')
        //                                                 ->where('id', '>', 1)
        //                                                 ->orWhere('author', 'like', 'admin%')
        //                                                 ->get());

        // dump(DB::table('posts')->distinct()->select('author', 'id')
        //                                                 ->where([
        //                                                             ['id', '>', 1],
        //                                                             ['author', 'like', 'admin%', 'or'],
        //                                                         ])
        //                                                 ->get());


        // dump(DB::table('posts')->select('id', 'description', 'author')->whereNotBetween('id', [2, 3])->get());

        // dump(DB::table('posts')->select('id', 'description', 'author')->whereNotIn('id', [2, 3])->get());

        // dump(DB::table('posts')->groupBy('id')->get());

        // dump(DB::table('posts')->take(1)->skip(2)->get());

        dump(DB::table('posts')->get());

        // DB::table('posts')->insert(['name' => 'home', 'description' => 'about home', 'author' => 'max']);

        // $post_id = DB::table('posts')->insertGetId(['name' => 'home', 'description' => 'about home', 'author' => 'max']);

        $result = DB::table('posts')->where('id', 7)->update(['description' => 'I m go home']);

        dump(DB::table('posts')->get());
        echo $result;



        // return 'This is posts';
    }
}
