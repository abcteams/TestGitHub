<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function fetchLattestComments(){
       $comments =  DB::table('comments')->limit('10')->orderBy('id','desc')->get();
        return $comments;
    }

    public function unreadComments(){
        $comments = DB::table('comments')->where('comment_status',0)->get();
        return $comments;
    }

    public function addComment($data){
            DB::table('comments')->insert(
                ['comment_subject' => $data['comment_subject'], 'comment_text' => $data['comment_text']]
            );
    }

    public function updateComments(){
        DB::table('comments')
            ->update(['comment_status' => 1]);
    }
}
