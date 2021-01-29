<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
//use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        for($i=1; $i<10; $i++){
//            DB::table('Post')->insert([
//                'user_id' => 1,
//                'content' => $i.'Đây là bài viết thứ',
//                'category_id' => 2,
//                'is_post' => true,
//            ]);
//        }
        $post = new Post();
        $post->user_id = 1;
        $post->content = 'AVC';
        $post->category_id = 1 ;
        $post->is_post = false ;
        $post->save();
    }
}
