<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //**********Get Lattest 5 comments added by the user ******************
    public function getComments($view = ''){
        $comment = new Comment();
        $comments =  $comment->fetchLattestComments();

        $commentsUnread = new Comment();
        $qurey1 = $commentsUnread->unreadComments();
        if(count($qurey1) > 0){
            $unread_comments = count($qurey1);
        }
        else{
            $unread_comments = '';
        }

        $output = '';
        $outputTable = '';
        if(count($comments) > 0){
            $i = 1;
            foreach($comments as $comment){
                $output .= '
                    <li style="background-color:antiquewhite;margin-bottom:5px;width:300px;">
                        <a href = "#" >
                           <strong>'.$comment->comment_subject.'</strong><br>
                           <small>'.$comment->comment_text.'</small>
                        </a>
                     </li>';

                $outputTable .= '
                    <tr>
                        <td>'.$i++.'</td>
                        <td>'.$comment->comment_subject.'</td>
                        <td>'.$comment->comment_text.'</td>
                     </tr>';
            }
        }
        else{
            $output .= '<li><a href = "#" class = "text-bold text-italic" >No Notifications Found</a></li>';
            $outputTable .= '<tr><td>No Data found ...</td></tr>';
        }

        $data = array();
        $data['notification'] = $output;
        $data['tableData'] = $outputTable;
        $data['unseen_notification'] = $unread_comments;

        echo json_encode($data);
    }

    //***************************Add Comments to database ********************
    public function addComments(Request $request){
        $data = array();
        $data['comment_subject'] = $request->comment_subject;
        $data['comment_text'] = $request->comment_text;

        $comment = new Comment();
        $comment->addComment($data);
    }

    //*******************Update notifications if seen by the user **********************
    public function  updateComments(){
        $comment = new Comment();
        $comment->updateComments();
    }
    //****************retrun post comment view ******************
    public function postComment(){
        return view('postComment');
    }
}
