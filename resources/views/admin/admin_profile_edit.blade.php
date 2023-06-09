@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card"><br><br>
                        <center>
                            <img class="rounded-circle avatar-xl" alt="200x200" src="{{(!empty($editAdminData->profile_image)) ? url('upload/admin_images/'.$editAdminData->profile_image):url('upload/no_image.jpg')}}" alt="Card image cap">
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

                            <form method="POST" action="{{route('store.profile')}}" enctype="multipart/form-data">
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


                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Profile Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="profile_image" id="image" type="file">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="mb-3" >
                                        <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                        <img id="showImage" class="rounded avatar-lg" alt="200x200" src="{{(!empty($editAdminData->profile_image)) ? url('upload/admin_images/'.$editAdminData->profile_image):url('upload/no_image.jpg')}}" alt="Card image cap">
                                    </div>
                                    <!-- end row -->

                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function (){
                $('#image').change(function (e){
                    var reader = new FileReader();
                    reader.onload = function (e){
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>

@endsection
