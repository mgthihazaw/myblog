

 @extends('user.layouts.app')

 @section('content')
  

        
        <div class="col-md-8">

          
        @foreach($posts as $post)
          <!-- Blog Post -->
          <div class=" mb-4 my-4 ">
           <div class="card ">
        <div class="card-header bg-secondary">
           <h3 class="text-center"><strong>{{ $post->title }}</strong> </h3>
            
        </div>
        <div class="card-body">
          <p >{!! substr($post->body,0,200) !!}</p>
    
          <a class="btn btn-success" href="{{ route('user.readpost',$post->id) }}">ReadMore</i></a>
        </div>
        <div class="card-footer bg-secondary">
            {{ $post->updated_at }} by {{$post->user->name}}
        </div>
        </div>
          </div>
          

      
    
          @endforeach
           
         {{ $posts->links()}}

        
       </div>



<!---------------------SideBar---------------------------->
       <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header bg-secondary">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" name="searchtitle" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header bg-secondary">Categories</h5>
            <div class="card-body">
              <div class="row">
                
                  <ul class="list-group col-md-12">
                    @foreach($categories as $category)
                        <a href="{{route('user.category_posts',$category->id)}}">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $category->name }}
                        <span class="badge badge-primary badge-pill pull-right">{{count($category->posts)}}</span>
                      </li>
                      </a>

                      @endforeach
                      
                    </ul>
                
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header bg-secondary">Latested Posts</h5>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach($newposts as $newpost)
                   <a href="{{ route('user.readpost',$newpost->id) }}"> <li class="list-group-item">{{ $newpost->title }}</li></a>
                    @endforeach
                </ul>
             
            </div>
          </div>

        </div>
<!---------------------SideBar---------------------------->
 @endsection