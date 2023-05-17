@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Home Slide Page</h4>
                            <p class="card-title-desc">This form is pre-filled with your <code class="highlighter-rouge">Details. </code> Click to Edit </p>

                            <form method="POST" action="{{route('store.profile')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="title" id="title" value="{{ $homeslide->title }}" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Short Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="short_title" id="short_title" value="{{ $homeslide->short_title }}"  type="text" id="example-search-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Video Url</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="video_url" id="video_url" value="{{ $homeslide->video_url }}"  type="text" id="example-email-input">
                                        </div>
                                    </div>
                                    <!-- end row -->


                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Slider Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="home_slide" id="home_slide" type="file">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="mb-3" >
                                        <label for="example-email-input" class="col-sm-2 col-form-label"></label>
                                        <img id="showImage" class="rounded avatar-lg" alt="200x200" src="{{(!empty($homeslide->home_slide)) ? url('upload/home_slider/'.$homeslide->home_slide):url('upload/no_image.jpg')}}" alt="Card image cap">
                                    </div>
                                    <!-- end row -->

                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slider">
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

