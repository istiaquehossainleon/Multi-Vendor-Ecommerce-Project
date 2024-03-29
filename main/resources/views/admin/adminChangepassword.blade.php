@extends('admin.admin_master')
@section('admin')



<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Change Password Page</h4><br>
                            @if(count($errors))
                                @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show">{{$error}} </p>
                                @endforeach
                            @endif
                            <form method="post" action="{{ route('update.password') }}">
                                @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input name="oldpassword" class="form-control" type="password" value="" id="oldpassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input name="newpassword" class="form-control" type="password" value="" id="newpassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Paasword</label>
                                <div class="col-sm-10">
                                    <input name="confirmPaasword" class="form-control" type="password" value="" id="confirmPaasword">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light" value="Change Password">
                        </form>


                        <!-- end row -->

                        <!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        </div>
    </div>
</div>
@endsection
