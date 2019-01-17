 @extends('adminLayout.app')
@section('content')
 <div class="col-sm-12 ">
    	<div class="card">
		<div class="card-header ">
		   <h3 class="text-center"><strong>{!! $post->title !!}</strong> </h1>
		   	
	    </div>
	    <div class="card-body">
		  <p >{!! $post->body !!}</p>
	

        </div>
        <div class="card-footer">
			<p><strong>Post created by </strong> {{$post->user->name }} </p>
		</div>
     </div>
    </div>
    @endsection