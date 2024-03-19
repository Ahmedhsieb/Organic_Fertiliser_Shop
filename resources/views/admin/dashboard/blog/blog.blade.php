@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Blogs</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.blog.add')}}"><i class="fas fa-plus"> Add Blog</i></a></li>
                        </ul>
                    </div>
                </div>
                @if(Session::has('done'))
                    <div class="alert alert-success alert-dissmissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">X</button>
                        <strong>{{session()->get('done')}}</strong>
                    </div>
                @endif
            </div>

        </div>
        <!-- End Page Header -->

        <!-- Begin Row -->
        <div class="row flex-row">
            @foreach($blogs as $blog)
                <div class="col-xl-3 col-md-4 col-sm-6 col-remove">
                    <!-- Begin Card -->
                    <div class="widget-image has-shadow">
                        <div class="quick-actions hover dark">
                            <div class="dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"
                                        class="dropdown-toggle">
                                    <i style="color: aliceblue; font-size: 20px" class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu">
                                    @if($blog->user_id == Auth::user()->id)
                                        <a href="{{route('admin.blog.delete', [$blog->id])}}" class="dropdown-item">
                                            <i class="fas fa-trash"></i>Delete
                                        </a>
                                        <a href="{{route('admin.blog.edit', [$blog->id])}}" class="dropdown-item">
                                            <i class="fas fa-edit"></i>Edit
                                        </a>
                                    @endif
                                    <a href="{{route('admin.blog.view.blog', [$blog->id])}}" class="dropdown-item">
                                        <i class="fas fa-eye"></i>View
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-card">
                            <!-- Begin Widget Image -->
                            <div class="cover-image mx-auto">
                                <img src="{{asset($blog->img)}}" alt="..." class="circle mx-auto">
                            </div>
                            <!-- Begin Widget Body -->
                            <div class="widget-body">
                                <h4 class="name"><a href="#">{{$blog->title}}</a></h4>
                                <br>
                                <h4 style="text-align: center; font-size: 1em"><a href="#">{{$blog->user->name}}</a></h4>
                                <br>
                                <div class="job" style="color: #bbbbbb">{{$blog->short_desc}}</div>
                                <div class="reviews owl-carousel owl-loaded owl-drag">
                                </div>

                            </div>
                            <!-- End Widget Body -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            @endforeach


        </div>
        <!-- End Row -->

    </div>
    <!-- End Container -->

@include('admin.asset.footer')
