@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <div class="page db-social">



            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">


                <!-- Begin Content -->
                <div class="content-inner compact">
                    <!-- Begin Jumbotron -->
                    <div class="jumbotron jumbotron-fluid"></div>
                    <!-- End Jumbotron -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Start Head Profile -->
                                <div class="widget head-profile has-shadow">
                                    <div class="widget-body pb-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-11 col-md-11 d-flex justify-content-center">
                                                <div class="image-default">
                                                    <img class="rounded-circle" src="{{asset($kidkinder->img)}}" alt="...">
                                                </div>
                                                <div class="infos">
                                                    <h2>KidKinder</h2>
                                                    <div class="location">{{$kidkinder->address}}</div>
                                                </div>
                                            </div>
                                            <div class="col-xl-1 col-md-1 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                                <div class="follow">
                                                    <a class="btn btn-gradient-05" href="{{route('admin.kidkinder.edit')}}"><i class="fas fa-edit"></i>Edit</a>
                                                </div>
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
                                <!-- End Head Profile -->
                                <div class="row">
                                    <div class="col-xl-3 column">
                                        <!-- Begin About -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header d-flex align-items-center">
                                                <div class="user-image">
                                                    <i class="fas fa-bars"></i>
                                                </div>
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username">About</span>
                                                    </div>
                                                </div>
                                                <div class="widget-options">
                                                    <div class="dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                            <i style="color: aliceblue; font-size: 20px" class="fas fa-ellipsis-h"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="{{route('admin.kidkinder.edit.single', ['about'])}}" class="dropdown-item">
                                                                <i class="la la-edit"></i>Edit About
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Widget Header -->

                                            <div class="widget-body">
                                                <p>{{$kidkinder->desc}}</p>
                                            </div>
                                        </div>
                                        <!-- End About -->
                                    </div>
                                    <!-- End Col -->

                                    <!-- Begin Timeline -->
                                    <div class="col-xl-6">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header d-flex align-items-center">
                                                <div class="user-image">
                                                    <i class="fas fa-link"></i>
                                                </div>
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username">Social Links</span>
                                                    </div>
                                                </div>
                                                <div class="widget-options">
                                                    <div class="dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                            <i style="color: aliceblue; font-size: 20px" class="fas fa-ellipsis-h"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="{{route('admin.kidkinder.add')}}" class="dropdown-item">
                                                                <i class="la la-edit"></i>Add Social Links
                                                            </a>
                                                            <a href="{{route('admin.kidkinder.edit.social')}}" class="dropdown-item">
                                                                <i class="la la-edit"></i>Edit Social Links
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Widget Header -->
                                            <!-- Begin Widget Body -->
                                            <div class="widget-body">
                                                @foreach($socials as $social)
                                                    <p>
                                                        <a href="{{$social->social_value}}"><i class="fab fa-{{$social->social_key}}">  {{$social->social_key}}</i></a>
                                                    </p>
                                                @endforeach
                                            </div>
                                            <!-- End Widget Body -->
                                            <!-- Begin Info -->
                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <i class="fas fa-phone-alt"></i>
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Phone</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-options">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i style="color: aliceblue; font-size: 20px" class="fas fa-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="{{route('admin.kidkinder.edit.single', ['phone'])}}" class="dropdown-item">
                                                                    <i class="la la-edit"></i>Edit Phone
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                    <p>
                                                        {{$kidkinder->phone}}
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Info -->

                                            <!-- Begin Info -->
                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <i class="fas fa-mail-bulk"></i>
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Email</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-options">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i style="color: aliceblue; font-size: 20px" class="fas fa-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="{{route('admin.kidkinder.edit.single', ['email'])}}" class="dropdown-item">
                                                                    <i class="la la-edit"></i>Edit Email
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                    <p>
                                                        {{$kidkinder->email}}
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Info -->

                                            <!-- Begin Info -->
                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Open Hours</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-options">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i style="color: aliceblue; font-size: 20px" class="fas fa-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="{{route('admin.kidkinder.edit.single', ['open_hours'])}}" class="dropdown-item">
                                                                    <i class="la la-edit"></i>Edit Open Hours
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                    <p>
                                                        {{$kidkinder->open_hours}}
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Info -->

                                            <!-- Begin Info -->
                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <i class="fas fa-calendar"></i>
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Open Days</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-options">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i style="color: aliceblue; font-size: 20px" class="fas fa-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="{{route('admin.kidkinder.edit.single', ['open_days'])}}" class="dropdown-item">
                                                                    <i class="la la-edit"></i>Edit Open Days
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                    <p>
                                                        {{$kidkinder->open_days}}
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Info -->

                                        </div>
                                        <!-- End Widget -->
                                    </div>
                                    <!-- End Timeline -->

                                    <!-- Begin Column -->
                                    <div class="col-xl-3 column">
                                        <!-- Begin Badge -->
                                        <div class="widget has-shadow">
                                            <div class="new-badge text-center">
                                                <div class="badge-img">
                                                    <i class="ion-fireball"></i>
                                                </div>
                                                <div class="title">
                                                    <div class="heading">Pages</div>
                                                    <ul class="list-styled">
                                                        <li>
                                                            <ul class="list-group-item pt-0">
                                                                <li ><br></li>
                                                                <li><a href="{{route('admin.kidkinder.kidkinder')}}">KidKinder</a></li>
                                                                <li ><br></li>
                                                                <li><a href="{{route('admin.facility.facility')}}">Facilities</a></li>
                                                                <li ><br></li>
                                                                <li><a href="{{route('admin.course.course')}}">Courses</a></li>
                                                                <li ><br></li>
                                                                <li><a href="{{route('admin.teacher.teacher')}}">Teacher</a></li>
                                                                <li ><br></li>
                                                                <li><a href="{{route('admin.review.review')}}">Reviews</a></li>
                                                                <li ><br></li>
                                                                <li><a href="{{route('admin.contact_us.contact_us')}}">Contact Us Form</a></li>
                                                                <li ><br></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Badge -->
                                    </div>
                                    <!-- End Column -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->



                    <a href="#" class="go-top" style="display: none;"><i class="fas fa-arrow-up"></i></a>



                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>

    </div>
    <!-- End Container -->

@include('admin.asset.footer')
