@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Images</h4>
                            <p class="card-title-desc">This Form Contains Data from <code class="highlighter-rouge"> The Selected Image from the Multiple Images.</code> Click to Edit </p>

                            <form method="POST" action="{{route('update.multi.image')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$multiImage->id}}">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Update Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="multi_image" id="about_image" type="file">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="mb-3" >
                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                        <img id="showImage" class="rounded avatar-lg" alt="200x200"
                                             src="{{asset($multiImage->multi_image)}}" alt="Card image cap">
                                    </div>
                                    <!-- end row -->

                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Image">
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function (){
                $('#about_image').change(function (e){
                    var reader = new FileReader();
                    reader.onload = function (e){
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>

@endsection

