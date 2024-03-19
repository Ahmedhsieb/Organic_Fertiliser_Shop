@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Update Blog</h2>
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

                        <form method="post" action="{{route('admin.blog.update')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Title</label>
                                <div class="col-lg-9">
                                    <input type="text" name="title" value="{{$blog->title}}" class="form-control">
                                    <small>
                                        Enter Blog Title.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Short Description</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" name="desc">{{$blog->short_desc}}</textarea>
                                    <small>
                                        Enter Blog Short Description.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Description</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" rows="5" name="desc">{{$blog->desc}}</textarea>
                                    <small>
                                        Enter Blog Description.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-3 form-control-label">Image</label>
                                <div class="col-lg-9">
                                    <input type="file" name="img" class="form-control">
                                    <small>
                                        Upload Blog Image.
                                    </small>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="text-center">
                                <button class="btn btn-gradient-01" type="submit">Update</button>
                                <button class="btn btn-shadow" type="reset">Reset</button>
                            </div>
                            <input type="hidden" name="id" value="{{$blog->id}}">
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
