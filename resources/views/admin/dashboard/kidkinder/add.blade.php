@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Add Social Links</h2>
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

                        <form method="post" action="{{route('admin.kidkinder.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Social Key</label>
                                <div class="col-lg-9">
                                    <input type="text" name="social_key" class="form-control">
                                    <small>
                                        Enter Social Key (like: facebook).
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Description</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" name="social_value"></textarea>
                                    <small>
                                        Enter Social Key (like: https://facebook.com).
                                    </small>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-gradient-01" type="submit">Submit</button>
                                <button class="btn btn-shadow" type="reset">Reset</button>
                            </div>

                        </form>
                        <a href="{{route('admin.kidkinder.kidkinder')}}" style="color: #ffffff" class="btn btn-gradient-05" type="reset">Back</a>
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->

@include('admin.asset.footer')
