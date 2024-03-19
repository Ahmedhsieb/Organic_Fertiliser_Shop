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
                                                    <img width="100" height="80" src="{{asset($blog->img)}}" alt="...">
                                                </div>
                                                <div class="infos">
                                                    <h2>{{$blog->title}}</h2>
                                                    <div class="location">{{$blog->user->name}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Head Profile -->
                                <div class="row">
                                    <div class="col-xl-4 column">
                                        <!-- Begin About -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Widget Header -->
                                            <div class="widget-header d-flex align-items-center">
                                                <div class="user-image">
                                                    <i class="fas fa-bars"></i>
                                                </div>
                                                <div class="d-flex flex-column mr-auto">
                                                    <div class="title">
                                                        <span class="username">Short Description</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Widget Header -->

                                            <div class="widget-body">
                                                <p>{{$blog->short_desc}}</p>
                                            </div>
                                        </div>
                                        <!-- End About -->
                                    </div>
                                    <!-- End Col -->

                                    <!-- Begin Timeline -->
                                    <div class="col-xl-8">
                                        <!-- Begin Widget -->
                                        <div class="widget has-shadow">
                                            <!-- Begin Info -->
                                            <div class="comments">
                                                <div class="comments-header d-flex align-items-center">
                                                    <div class="user-image">
                                                        <i class="fas fa-barcode"></i>
                                                    </div>
                                                    <div class="d-flex flex-column mr-auto">
                                                        <div class="title">
                                                            <span class="username">Description</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comments-body">
                                                    <p>
                                                        {{$blog->desc}}
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Info -->
                                        </div>
                                        <!-- End Widget -->
                                    </div>
                                    <!-- End Timeline -->
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
