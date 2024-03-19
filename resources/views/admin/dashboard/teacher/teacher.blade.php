@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Teachers</h2>
                </div>
            </div>

        </div>
        <!-- End Page Header -->

        <!-- Begin Row -->
        <div class="row flex-row">
            <div class="col-xl-12">
                <!-- Begin Widget 07 -->
                <div class="widget widget-07 has-shadow">
                    @if(Session::has('done'))
                        <div class="alert alert-success alert-dissmissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">X</button>
                            <strong>{{session()->get('done')}}</strong>
                        </div>
                    @endif
                    <!-- Begin Widget Header -->
                    <div class="widget-header bordered d-flex align-items-center">
                        <h2>Teachers Overview</h2>
                        <div class="widget-options">
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.teacher.add')}}">
                                    <button type="button" class="btn btn-primary ripple">Add Teacher</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Header -->
                    <!-- Begin Widget Body -->
                    <div class="widget-body">
                        <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Twitter</th>
                                    <th>Linkedin</th>
                                    <th>Facebook</th>
                                    <th>Specialist</th>
                                    <th>Class</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $key => $teacher)
                                    <tr>
                                        <td><span class="text-secondary">{{++$key}}</span></td>
                                        <td>{{$teacher->name}}</td>
                                        <td>{{$teacher->email}}</td>
                                        <td><a href=" {{$teacher->twitter}} "><i class="fab fa-twitter"></i></a></td>
                                        <td><a href=" {{$teacher->linkedin}} "><i class="fab fa-linkedin"></i></a></td>
                                        <td><a href=" {{$teacher->facebook}} "><i class="fab fa-facebook"></i></a></td>
                                        <td>{{$teacher->specialist}}</td>
                                        <td>{{$teacher->courses->title}}</td>
                                        <td><img class="rounded-circle" width="80px" height="80px" src="{{asset($teacher->img)}}"></td>
                                        <td >
                                            <a href="{{route('admin.teacher.edit', [$teacher->id])}}"><i style="padding: .5rem;" class="fas fa-edit edit"></i></a>
                                            <a href="{{route('admin.teacher.delete', [$teacher->id])}}"><i style="padding: .5rem;" class="fas fa-trash trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Widget Body -->

                </div>
                <!-- End Widget 07 -->
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Container -->

@include('admin.asset.footer')
