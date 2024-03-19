@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <div class="page db-social">



            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">


                <!-- Begin Content -->
                <div class="content-inner compact">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="widget has-shadow">
                                    @if(Session::has('done'))
                                        <div class="alert alert-success alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong>{{session()->get('done')}}</strong>
                                        </div>
                                    @endif
                                        @if(Session::has('error'))
                                            <div class="alert alert-danger alert-dissmissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                <strong>{{session()->get('error')}}</strong>
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
                                        <h4>Update Profile</h4>
                                    </div>
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <small><strong>Note: </strong>Enter The Current Password for make any change</small>
                                    </div>
                                    <div class="widget-body">
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>Personal information</h4>
                                            </div>
                                        </div>
                                        <form action="{{route('admin.profile.update')}}" method="post" class="form-horizontal">
                                            @csrf
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Full Name</label>
                                                <div class="col-lg-6">
                                                    <input name="name" type="text" class="form-control" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                                                <div class="col-lg-6">
                                                    <input name="email" type="text" class="form-control" value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Current Password</label>
                                                <div class="col-lg-6">
                                                    <input name="oldPassword" type="text" class="form-control">
                                                    <small>Enter Your Old Password</small>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">New Password</label>
                                                <div class="col-lg-6">
                                                    <input name="Password" type="text" class="form-control">
                                                    <small>Enter Your New Password</small>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <div class="em-separator separator-dashed"></div>
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Save Changes</input>
                                            </div>
                                        </form>

                                    </div>
                                </div>
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
