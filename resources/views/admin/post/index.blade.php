@extends('admin.layouts.app')

@section('content')
   
   <div class="row">
    <div class="col-sm-12">
    	<section class="content-header">
        <h1 class="pull-left">Category Data Table</h1>
        
        <h1 class="pull-right">
           <a class="btn btn-primary btn-lg pull-right" style="margin-top: 2px;margin-bottom: 3px" 
           href="{{ action('PostController@create') }}">Add New Category</a>
        </h1>
        
        </section>
         <div class="clearfix"></div>
        
       <div class="p-2">
       <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" style="border-collapse: collapse !important">
       <thead>
            <tr role="row">
            	<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 137px;">No</th>
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 309px;">Title</th>
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 309px;">Body</th>
                
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 309px;">Category Name</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 267px;">Date registered</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 258px;">Actions</th>
                

            </tr>
                </thead>
                <tbody>
                	@foreach($posts as $key=>$post)
                <tr role="row" class="odd">
                <td class="sorting_1">{{ $key+1 }}</td>
                
                
                <td><span class="">{{ $post->title }}</span></td>
                <td><span class="">{{  substr($post->body,0,50) }}</span></td>
                <td><span class="">{{ $post->category->name }}</span></td>
                <td>{{ $post->updated_at }}</td>
                <td>
                  <div class="row">
                    
                    <a class="btn btn-success" href="{{ route('post.show',$post->id) }}"><i class="fa fa-search-plus"></i></a>
                    <a class="btn btn-info" href="{{route('post.edit',$post->id)}}"><i class="fa fa-edit"></i></a>
                    
                    <form  class="deleteCategory" action="{{route('post.delete',$post->id)}}" method="post">
                         @csrf
                        <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger" type="submit" ><i class="fa fa-trash-o"></i>
                      </button>
                      
               </form>
               </div>
                </td>
           
                </tr>
            @endforeach
        </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection