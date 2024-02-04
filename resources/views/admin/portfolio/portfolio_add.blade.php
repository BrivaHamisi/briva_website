@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">About Page</h4>
                            <p class="card-title-desc">This Form Contains Data from <code class="highlighter-rouge"> The About Page.</code> Click to Edit </p>

                            <form method="POST" action="{{route('update.about')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $aboutpage->id }}">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="title" id="title" value="{{ $aboutpage->title }}" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="short_title" id="short_title" value="{{ $aboutpage->short_title }}"  type="text" id="example-search-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                        <div class="col-sm-10">
                                            <textarea required="" name="short_description" id="short_description" class="form-control" rows="5">{{ $aboutpage->short_description }}</textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                        <div class="col-sm-10">
                                            <textarea id="elm1" name="long_description" >{{ $aboutpage->long_description }}</textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">About Us Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="about_image" id="about_image" type="file">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="mb-3" >
                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                        <img id="showImage" class="rounded avatar-lg" alt="200x200"
                                             src="{{ (!empty($aboutpage->about_image))? url( $aboutpage->about_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Company Profile</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="company_profile" id="company_profile" type="file">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update About Page">
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

