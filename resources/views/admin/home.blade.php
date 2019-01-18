@extends('admin.layouts.app')

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

<div class="row">
<div class="col-sm-12 col-lg-6">
<div class="brand-card">
<div class="brand-card-header bg-facebook">
<i class="fa fa-facebook"></i>
<div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
<canvas id="social-box-chart-1" height="96" width="384" class="chartjs-render-monitor" style="display: block; width: 384px; height: 96px;"></canvas>
</div>
</div>
<div class="brand-card-body">
<div>
<div class="text-value">89k</div>
<div class="text-uppercase text-muted small">friends</div>
</div>
<div>
<div class="text-value">459</div>
<div class="text-uppercase text-muted small">feeds</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-6">
<div class="brand-card">
<div class="brand-card-header bg-twitter">
<i class="fa fa-twitter"></i>
<div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
<canvas id="social-box-chart-2" height="96" width="384" class="chartjs-render-monitor" style="display: block; width: 384px; height: 96px;"></canvas>
</div>
</div>
<div class="brand-card-body">
<div>
<div class="text-value">973k</div>
<div class="text-uppercase text-muted small">followers</div>
</div>
<div>
<div class="text-value">1.792</div>
<div class="text-uppercase text-muted small">tweets</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-6">
<div class="brand-card">
<div class="brand-card-header bg-linkedin">
<i class="fa fa-linkedin"></i>
<div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
<canvas id="social-box-chart-3" height="96" width="384" class="chartjs-render-monitor" style="display: block; width: 384px; height: 96px;"></canvas>
</div>
</div>
<div class="brand-card-body">
<div>
<div class="text-value">500+</div>
<div class="text-uppercase text-muted small">contacts</div>
</div>
<div>
<div class="text-value">292</div>
<div class="text-uppercase text-muted small">feeds</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-6">
<div class="brand-card">
<div class="brand-card-header bg-google-plus">
<i class="fa fa-google-plus"></i>
<div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
<canvas id="social-box-chart-4" height="96" width="384" class="chartjs-render-monitor" style="display: block; width: 384px; height: 96px;"></canvas>
</div>
</div>
<div class="brand-card-body">
<div>
<div class="text-value">894</div>
<div class="text-uppercase text-muted small">followers</div>
</div>
<div>
<div class="text-value">92</div>
<div class="text-uppercase text-muted small">circles</div>
</div>
</div>
</div>
</div>

<div class="col-sm-12 col-lg-6">
<div class="brand-card">
<div class="brand-card-header bg-facebook">
<i class="fa fa-facebook"></i>
<div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
<canvas id="social-box-chart-1" height="96" width="384" class="chartjs-render-monitor" style="display: block; width: 384px; height: 96px;"></canvas>
</div>
</div>
<div class="brand-card-body">
<div>
<div class="text-value">89k</div>
<div class="text-uppercase text-muted small">friends</div>
</div>
<div>
<div class="text-value">459</div>
<div class="text-uppercase text-muted small">feeds</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-6">
<div class="brand-card">
<div class="brand-card-header bg-twitter">
<i class="fa fa-twitter"></i>
<div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
<canvas id="social-box-chart-2" height="96" width="384" class="chartjs-render-monitor" style="display: block; width: 384px; height: 96px;"></canvas>
</div>
</div>
<div class="brand-card-body">
<div>
<div class="text-value">973k</div>
<div class="text-uppercase text-muted small">followers</div>
</div>
<div>
<div class="text-value">1.792</div>
<div class="text-uppercase text-muted small">tweets</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-6">
<div class="brand-card">
<div class="brand-card-header bg-linkedin">
<i class="fa fa-linkedin"></i>
<div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
<canvas id="social-box-chart-3" height="96" width="384" class="chartjs-render-monitor" style="display: block; width: 384px; height: 96px;"></canvas>
</div>
</div>
<div class="brand-card-body">
<div>
<div class="text-value">500+</div>
<div class="text-uppercase text-muted small">contacts</div>
</div>
<div>
<div class="text-value">292</div>
<div class="text-uppercase text-muted small">feeds</div>
</div>
</div>
</div>
</div>

</div>
      
      </div></div>

@endsection
