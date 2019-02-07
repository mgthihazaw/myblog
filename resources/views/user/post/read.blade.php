@extends('user.layouts.app')

@section('content')

<div class="col-md-12 mb-4 my-4 ">
    	<div class="card">
		<div class="card-header bg-secondary">
		   <h3 class="text-center"><strong>{!! $post->title !!}</strong> </h1>
		   	
	    </div>
	    <div class="card-body">
		  <p >{!! $post->body !!}</p>
	

        </div>
        <div class="card-footer">
			<p><strong>Post created by </strong> {{$post->user->name }} </p>
		</div>
     </div>
    








   <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header bg-secondary ch">Create Comment:</h5>
            <div class="card-body cb">
              <form method="post" action="{{ route('comments.store',$post->id) }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <textarea class="form-control" rows="3" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comment</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="card my-4">
            <h5 class="card-header bg-secondary csh">{{$post->comments->count()}} Comment</h5>
            @foreach($post->comments as $comment)
            <div class="card-body csb">
              
              <div class="media mb-1">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                 <h6 class="mt-0">{{ $comment->user->name }}&nbsp;&nbsp;
                  <span class="font-weight-light font-italic">{{ $comment->updated_at->diffForHumans()}}</span></h6>
                  


                  
                   {{$comment->comment}}<br>
                    <h6>
                    <a href="#" class="createReply" data-id="{{ $comment->id }}"> <span class="badge badge-warning">Reply</span></a>
                    &nbsp;
                     <a href="">
                    <span class="badge badge-danger">Delete</span>
                  </a> </h6>

                   <div class="card my-1">
                     <h5 class="card-header bg-secondary rsh">{{$comment->replies->count()}} Replies</h5>

                     
                @foreach($comment->replies as $reply)
                    <div class="card-body rsb">
                   <div class="media mt-1">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h6 class="mt-0">{{ $reply->user->name }}
                  &nbsp;&nbsp;
                  <span class="font-weight-light font-italic">{{ $reply->updated_at->diffForHumans()}}</span></h>
                  <p class="font-weight-normal">{{$reply->reply}}</p>
                  
                    <h6>
                    
                     <a href="">
                    <span class="badge badge-danger">Delete</span>
                  </a> </h6>
                </div>
              </div>
            </div>
              @endforeach
               </div>

                </div>
             </div>
            </div>
            @endforeach
          </div>
         
         
          

          <!-- Comment with nested comments -->
         <!--  <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div-->
         </div> 

<div id="createReplyModel" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Comment Reply</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <form action="{{ route('comments.reply',$post->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" required class="form-control" name="comment_id" id="comment_id">
                        <input type="hidden" required class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="categoryname">Reply </label>
                            <input type="text" required class="form-control" name="reply" >
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" value="Reply">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

         
           
         
@endsection