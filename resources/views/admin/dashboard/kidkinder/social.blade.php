@include('admin.asset.header')

<div class="content-inner">
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">Social Links</h2>
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
                        <h2>Social Links Overview</h2>
                        <div class="widget-options">
                            <div class="btn-group" role="group">
                                <a href="{{route('admin.kidkinder.add')}}">
                                <button type="button" class="btn btn-primary ripple">Add Social Link</button>
                                </a>
                                <a href="{{route('admin.kidkinder.kidkinder')}}">
                                <button type="button" class="btn btn-gradient-05 ripple">Back</button>
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
                                    <th>Social Key</th>
                                    <th>Social Value</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($socials as $key => $social)
                                    <tr>
                                        <td><span class="text-secondary">{{++$key}}</span></td>
                                        <td>{{$social->social_key}}</td>
                                        <td>{{$social->social_value}}</td>
                                        <td >
                                            <a href="{{route('admin.kidkinder.edit.social.data', [$social->id])}}"><i style="padding: .5rem;" class="fas fa-edit edit"></i></a>
                                            <a href="{{route('admin.kidkinder.delete', [$social->id])}}"><i style="padding: .5rem;" class="fas fa-trash trash"></i></a>
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
