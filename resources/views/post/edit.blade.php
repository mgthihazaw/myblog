@extends('adminLayout.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
    	
      <div class="card">
		<div class="card-header ">
		   <h3><strong>Post</strong> Edit</h1>
	    </div>
	    <div class="card-body">
		  <form class="form-horizontal" action="{{ route('post.update',$post->id) }}" method="post">
		  	{{ csrf_field() }}
		  	<input type="hidden" name="user" value="{{ Auth::user()->id}}">
		    <div class="form-group row">
			 <label class="col-md-2 col-form-label" for="title">Post Title</label>
			  <div class="col-md-10">
			    <input class="form-control" id="title" type="text" name="title" value="{{ $post->title }}">
			    
		      </div>
		    </div>

		     <div class="form-group row">
			 <label class="col-md-2 col-form-label" for="title">Category Name</label>
			  <div class="col-md-10">
			   <select class="form-control" name="category" id="category">
			   	@foreach($categories as $category)
				   	
				   	<option value="{{ $category->id }}"
				   		@if($category->id==$post->category_id)
	                    
                    selected="selected"

       	              @endif

				   		>{{ $category->name }}</option>
				   		
				   		
				   
			   	@endforeach

			   </select>
		      </div>
		    </div>

		   
			
			<div class="form-group row">
			 <label class="col-md-2 col-form-label" for="body">Post Description</label>
			  <div class="col-md-10">
			    <textarea class="form-control" id="body" rows="7" name="body" 
			    placeholder="Say Something......">{!! $post->body !!}</textarea>
			    
		      </div>
		    </div>
			
			<div class="card-footer">
			<button class="btn btn-md btn-primary btn-block" type="submit">
			</i> Edit Post</button>
		   </div>
		</form>

      
      </div>
    

     

    </div>
   
</div>
@endsection