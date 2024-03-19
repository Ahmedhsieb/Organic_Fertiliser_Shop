@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Courses</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.course.add')}}"><i class="fas fa-plus"> Add Course</i></a></li>
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
            @foreach($courses as $course)
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
                                    <a href="{{route('admin.course.delete', [$course->id])}}" class="dropdown-item">
                                        <i class="fas fa-trash"></i>Delete
                                    </a>
                                    <a href="{{route('admin.course.edit', [$course->id])}}" class="dropdown-item">
                                        <i class="fas fa-edit"></i>Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-card">
                            <!-- Begin Widget Image -->
                            <div class="cover-image mx-auto">
                                <img src="{{asset($course->img)}}" alt="..." class="circle mx-auto">
                            </div>
                            <!-- Begin Widget Body -->
                            <div class="widget-body">
                                <h4 class="name"><a href="#">{{$course->title}}</a></h4>
                                <br>
                                <div class="job" style="color: #bbbbbb">{{$course->desc}}</div>
                                <div class="reviews owl-carousel owl-loaded owl-drag">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage">
                                            <div class="owl-item cloned" style=" font-size: 15px;width: 243.1px;">
                                                <div class="item">
                                                    <div class="stats">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col">
                                                                <span class="counter"style=" font-size: 13px" >{{$course->kids_age}}</span>
                                                                <span class="text">Age</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="counter"style=" font-size: 13px" >{{$course->seats_num}}</span>
                                                                <span class="text">Seats</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="counter"style=" font-size: 13px" >{{$course->time}}</span>
                                                                <span class="text">Time</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="counter"style=" font-size: 13px" >${{$course->price}} / Month</span>
                                                                <span class="text">Price</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
