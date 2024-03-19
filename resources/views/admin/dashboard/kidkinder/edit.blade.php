@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Update KidKinder</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row flex-row">
            <div class="col-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    @if(Session::has('done'))
                        <div class="alert alert-success alert-dissmissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong>{{session()->get('done')}}</strong>
                        </div>
                    @endif
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

                        <form method="post" action="{{route('admin.kidkinder.update')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Address</label>
                                <div class="col-lg-9">
                                    <input type="text" name="address" value="{{$kidkinder->address}}" class="form-control">
                                    <small>
                                        Enter KidKinder Address.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input type="text" name="email" value="{{$kidkinder->email}}" class="form-control">
                                    <small>
                                        Enter KidKinder Email.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Phone</label>
                                <div class="col-lg-9">
                                    <input type="text" name="phone" value="{{$kidkinder->phone}}" class="form-control">
                                    <small>
                                        Enter KidKinder Phone.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Open Hours</label>
                                <div class="col-lg-9">
                                    <input type="text" name="open_hours" value="{{$kidkinder->open_hours}}" class="form-control">
                                    <small>
                                        Enter KidKinder Open Hours.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Open Days</label>
                                <div class="col-lg-9">
                                    <input type="text" name="open_days" value="{{$kidkinder->open_days}}" class="form-control">
                                    <small>
                                        Enter KidKinder Open Days.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">About</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" name="desc">{{$kidkinder->desc}}</textarea>
                                    <small>
                                        Enter KidKinder Description.
                                    </small>
                                </div>
                            </div>

                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Image</label>
                                <div class="col-lg-9">
                                    <input type="file" name="img" class="form-control">
                                    <small>
                                        Upload KidKinder Cover Image.
                                    </small>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$kidkinder->id}}">
                            <div class="text-center">
                                <button class="btn btn-gradient-01" type="submit">Update</button>
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
