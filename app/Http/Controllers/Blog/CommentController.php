<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Post;
use App\Comment;
use App\Reply;
use App\Category;

class CommentController extends Controller
{
    //

    public function create(Request $request)
    {
    	$formData=$request->all();

        $rule=array(
            'comment' => 'required',
            'author'=>'required',
            'email'=>'required',
            'post_id'=>'required',
            );

        $message=array(
            'comment.required'=>'Cover image is required.',
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){

        	return Response::json($validator);
            

        }else{

        	$comment=new Comment;

        	$comment->post_id=$request->post_id;

        	$comment->name=$request->author;

        	$comment->email=$request->email;

        	$comment->body=$request->comment;

        	$comment->avatar="1";

        	$comment->save();

            echo '<ul class="media-list">
                                                <li class="media">
                                                    <div class="media-left">
                                                    <a href="#">
                                                      <i style="font-size: 400%;" class="fas fa-user-circle"></i>
                                                    </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <p><b>&nbsp;&nbsp;&nbsp;'.$request->author.'</b></p>
                                                    <p>&nbsp;&nbsp;&nbsp;'.$request->comment.'</p>

                                                           

                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>';

        	
        	//return Response::json(['success'=>true])


    }

    }
}
