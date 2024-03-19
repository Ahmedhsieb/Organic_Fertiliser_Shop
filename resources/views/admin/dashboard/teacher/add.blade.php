@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Add Teacher</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row flex-row">
            <div class="col-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    {{--                    @if(Session::has('done'))--}}
                    {{--                        <div class="alert alert-success alert-dissmissible fade show" role="alert">--}}
                    {{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>--}}
                    {{--                            <strong>{{session()->get('done')}}</strong>--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <strong>{{$error}}</strong>
                            </div>
                        @endforeach
                    @endif
                    <div class="widget-header bordered no-actions d-flex align-items-center">

                    </div>
                    <div class="widget-body">

                        <form method="post" action="{{route('admin.teacher.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Name</label>
                                <div class="col-lg-9">
                                    <input type="text" name="name" class="form-control">
                                    <small>
                                        Enter Teachers Name.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input type="text" name="email" class="form-control">
                                    <small>
                                        Enter Teachers Email.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Specialist</label>
                                <div class="col-lg-9">
                                    <input type="text" name="specialist" class="form-control">
                                    <small>
                                        Enter Teachers Specialist.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Twitter</label>
                                <div class="col-lg-9">
                                    <input type="text" name="twitter" class="form-control">
                                    <small>
                                        Enter Teachers Twitter.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Linkedin</label>
                                <div class="col-lg-9">
                                    <input type="text" name="linkedin" class="form-control">
                                    <small>
                                        Enter Teachers Linkedin.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Facebook</label>
                                <div class="col-lg-9">
                                    <input type="text" name="facebook" class="form-control">
                                    <small>
                                        Enter Teachers Facebook.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Class</label>
                                <div class="col-lg-9">
                                    <select name="course" class="custom-select form-control">
                                        <option value="0">Select an option</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                    <small>
                                        Select Teachers Class.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Image</label>
                                <div class="col-lg-9">
                                    <input type="file" name="img" class="form-control">
                                    <small>
                                        Upload Teachers Image.
                                    </small>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-gradient-01" type="submit">Submit</button>
                                <button class="btn btn-shadow" type="reset">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->

@include('admin.asset.footer')
