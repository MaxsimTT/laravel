<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
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

        // $items = Post::leftJoin('post_authors', 'posts.author_id', '=', 'post_authors.id')->select('post_authors.name as author', 'posts.name', 'posts.description')->get();

        // $i = 1;

        // foreach ($items as $item) {
        //     echo $i . ": " . $item->author . "<br />";
        //     echo $item->name . "<br />";
        //     echo $item->description . "<br />";
        //     $i++;
        // }

        // dump($items = Post::where('id', '>', 3));

        // $items = Post::where('id', 8)->get();
        // $item = Post::find(8);

        // $item = Post::where('id', 8)->firstOrFail();
        // $item = Post::findOrFail(8);
        // echo $item->id;

        $post = new Post;

        $post->category_post_id = 5;
        $post->name = 'Test save';
        $post->description = 'Suspendisse sed urna id nulla accumsan dignissim sed et nulla. Praesent ullamcorper convallis ipsum quis pulvinar. Suspendisse pretium risus a cursus pharetra. Nullam eu congue neque, non placerat arcu. Aliquam erat volutpat. Sed at nunc viverra, fermentum elit fringilla, ullamcorper tortor. Vivamus elementum libero id ante pretium, non feugiat augue varius. Quisque elementum, lorem a placerat lobortis, urna dui tincidunt felis, eu volutpat nisi mi in lectus. Suspendisse ornare condimentum ligula, vitae scelerisque justo volutpat et. Curabitur scelerisque tellus ut quam consequat imperdiet. Proin ornare elit leo. Integer elementum est nibh, ut faucibus neque ornare eget.';
        $post->author_id = 9;

        $post->save();

        $items = Post::all();

        foreach ($items as $item) {
            dump($item);
        }


        // dump($item);

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

        // dump(DB::table('posts')->get());

        // DB::table('posts')->insert(['name' => 'home', 'description' => 'about home', 'author' => 'max']);

        // $post_id = DB::table('posts')->insertGetId(['name' => 'home', 'description' => 'about home', 'author' => 'max']);

        // $result = DB::table('posts')->where('id', 7)->update(['description' => 'I m go home']);

        // $result = DB::table('posts')->where('id', 1)->delete();

        // dump(DB::table('posts')->get());
        // echo $result;

        // $result = DB::table('posts')->delete();
        // echo $result . '<br>';

        // return 'This is posts';
    }
}
