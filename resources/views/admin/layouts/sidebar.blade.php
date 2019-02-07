<div class="sidebar" >
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link active m-2" href="{{url('/admin/home')}}">
                    <i class="nav-icon icon-speedometer "></i> Dashboard
                </a>
            </li>

            

            <li class="nav-title bg-success m-2">Posts</li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.index')}}">
                    <i class="nav-icon icon-user"></i> Post Datas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.create')}}">
                    <i class="nav-icon icon-lock"></i> Create Post
                </a>
            </li>


            <li class="nav-title bg-success m-2">Categories</li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="nav-icon icon-user"></i> Category Data
                </a>
            </li>
           <!--  <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-lock"></i> C++
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-lock"></i> Vue.Js
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-lock"></i> IOT
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-lock"></i> AI
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-lock"></i> Andriod
                </a>
            </li> -->
            <li class="nav-title bg-success m-2">Settings( {{ Auth::user()->name }})</li>
            <!-- <li class="nav-item">
                <a class="nav-link" >
                    <i class="nav-icon icon-user"></i> {{ Auth::user()->name }}
                </a>
            </li> -->
            <a class="nav-link" href="{{url('/')}}">
              <i class="nav-icon icon-user"></i>User Panel</a>
                
            <li class="nav-item">
                
               <a class="nav-link" href="{{route('user.logout')}}">
               <i class="nav-icon icon-lock"></i>logout</a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>