@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Portfolio Page</h4>
                            <p class="card-title-desc">This Form Contains Data from <code class="highlighter-rouge"> The Portfolio Page.</code> Click to Edit </p>

                            <form method="POST" action="#" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="portfolio_name" id="portfolio_name" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="portfolio_title" id="portfolio_title"  type="text" id="example-search-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                                        <div class="col-sm-10">
                                            <textarea id="elm1" name="portfolio_description" ></textarea>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="portfolio_image" id="portfolio_image" type="file">
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="mb-3" >
                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                        <img id="showImage" class="rounded avatar-lg" alt="200x200"
                                             src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                    <!-- end row -->

                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Portfolio Page">
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

