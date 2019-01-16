@extends('adminLayout.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
    	<section class="content-header">
        <h1 class="pull-left">Category Data Table</h1>
        
        <h1 class="pull-right">
           <a class="btn btn-primary btn-lg pull-right" style="margin-top: 2px;margin-bottom: 3px" id="createCategory">Add New Category</a>
        </h1>
        
    </section>
         <div class="clearfix"></div>
        
       <div class="p-2">
       <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" style="border-collapse: collapse !important">
       <thead>
            <tr role="row">
            	<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 137px;">No</th>
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 309px;">Name</th>
                
                
                
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 267px;">Date registered</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 258px;">Actions</th>
                

            </tr>
                </thead>
                <tbody>
                	@foreach($categories as $category)
                <tr role="row" class="odd">
                <td class="sorting_1">{{ $category->id }}</td>
                
                
                <td><span class="">{{ $category->name }}</span></td>
                <td>{{ $category->updated_at }}</td>
                <td>
                    <a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a>
                    <a class="btn btn-info" href=""><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a>
                </td>
           
                </tr>
            @endforeach
        </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="createCategoryModel" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                	<h4 class="modal-title">Edit Owner Info</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="categoryname">Category Name</label>
                            <input type="text" required class="form-control" name="categoryname" id="categoryname">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" value="Create ">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection