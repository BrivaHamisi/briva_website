@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card"><br><br>
                        <center>
                            <img class="rounded-circle avatar-xl" alt="200x200" src="{{ asset('backend/assets/images/users/avatar-4.jpg')}}" alt="Card image cap">
                        </center>

                        <div class="card-body">
                            <h4 class="card-title">Name:</h4>
                            <p>{{$editAdminData->name}}</p>
                            <hr>
                            <h4 class="card-title">User Email:</h4>
                            <p>{{$editAdminData->email}}</p>
                            <hr>
                            <h4 class="card-title">Username: </h4>
                            <p>{{$editAdminData->username}}</p>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Profile Details</h4>
                            <p class="card-title-desc">This form is pre-filled with your <code class="highlighter-rouge">Details. </code> Click to Edit </p>

                            <form method="POST" action="">
                                @csrf
                                <div class="col-12">
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="name" id="name" value="{{ $editAdminData->name }}" type="text" id="example-text-input">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">UserName</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="username" id="username" value="{{ $editAdminData->username }}"  type="text" id="example-search-input">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="email" id="email" value="{{ $editAdminData->email }}"  type="email" id="example-email-input">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                </div>
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>

@endsection
