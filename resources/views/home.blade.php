@extends('adminLayout.app')

@section('content')
<!-- <nav aria-label="breadcrumb" role="navigation">
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="#">Dashboard</a>
</li>
<li class="breadcrumb-item">
<a href="#">Post</a>
</li>
<li class="breadcrumb-item active" aria-current="page">Data</li>
</ol>
</nav> -->
    

               <!--  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
 <div class="row">
    <div class="col-sm-12">
       <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
         <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="                  Username: activate to sort column descending" style="width: 309px;">Username</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 267px;">Date registered</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 124px;">Role</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 137px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 258px;">Actions</th>
            </tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                <td class="sorting_1">Adam Alister</td>
                <td>2012/01/21</td>
                <td>Staff</td>
                <td><span class="badge badge-success">Active</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="even">
                <td class="sorting_1">Adinah Ralph</td>
                <td>2012/06/01</td>
                <td>Admin</td>
                <td><span class="badge badge-dark">Inactive</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="odd">
                <td class="sorting_1">Ajith Hristijan</td>
                <td>2012/03/01</td>
                <td>Member</td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="even">
                <td class="sorting_1">Alphonse Ivo</td>
                <td>2012/01/01</td>
                <td>Member</td>
                <td><span class="badge badge-success">Active</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="odd">
                <td class="sorting_1">Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>Member</td>
                <td><span class="badge badge-success">Active</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="even">
                <td class="sorting_1">Bao Gaspar</td>
                <td>2012/01/01</td>
                <td>Member</td>
                <td><span class="badge badge-success">Active</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="odd">
                <td class="sorting_1">Bernhard Shelah</td>
                <td>2012/06/01</td>
                <td>Admin</td>
                <td><span class="badge badge-dark">Inactive</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="even">
                <td class="sorting_1">Bünyamin Kasper</td>
                <td>2012/08/23</td>
                <td>Staff</td>
                <td><span class="badge badge-danger">Banned</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="odd">
                <td class="sorting_1">Carlito Roffe</td>
                <td>2012/08/23</td>
                <td>Staff</td>
                <td><span class="badge badge-danger">Banned</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr><tr role="row" class="even">
                <td class="sorting_1">Chidubem Gottlob</td>
                <td>2012/02/01</td>
                <td>Staff</td>
                <td><span class="badge badge-danger">Banned</span></td>
                <td><a class="btn btn-success" href="#"><i class="fa fa-search-plus"></i></a><a class="btn btn-info" href="#"><i class="fa fa-edit"></i></a><a class="btn btn-danger" href="#"><i class="fa fa-trash-o"></i></a></td>
                </tr></tbody>
                </table></div></div>

@endsection
