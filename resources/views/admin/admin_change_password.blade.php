@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Change Password Page</h4>

                            @if(count($errors))
                                @foreach($errors->all() as $error)
                                    <p class="alert alert-danger alert-dismissible fade show" role="alert">{{$error}}</p>
                                @endforeach
                            @endif


                            <p class="card-title-desc">This form is pre-filled with your <code class="highlighter-rouge">Details. </code> Click to Edit </p>

                            <form method="POST" action="{{route('update.password')}}">
                                @csrf
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="oldpassword" id="oldpassword" type="password" id="example-text-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="newpassword" id="newpassword"  type="password" id="example-search-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="confirmpassword" id="confirmpassword" type="password" id="example-email-input">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
