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
                            <p>{{$adminData->name}}</p>
                            <hr>
                            <h4 class="card-title">User Email:</h4>
                            <p>{{$adminData->email}}</p>
                            <hr>
                            <h4 class="card-title">Username: </h4>
                            <p>{{$adminData->username}}</p>
                            <hr>

                            <a href="{{route('edit.profile')}}">Edit Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Vertical Nav Tabs</h4>
                            <p class="card-title-desc">Example of Vertical nav tabs</p>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link mb-2" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Home</a>
                                        <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                        <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                                        <a class="nav-link active" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="true">Settings</a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                        <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <p>
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid. Aliquip placeat salvia cillum
                                                iphone. Seitan aliquip quis cardigan.
                                            </p>
                                            <p>Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                                                qui irure terry richardson ex squid.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <p>
                                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                single-origin coffee squid. Exercitation +1 labore velit, blog
                                                sartorial PBR leggings next level wes anderson artisan four loko
                                                farm-to-table craft beer twee. Qui photo booth letterpress,
                                                commodo enim craft beer mlkshk.
                                            </p>
                                            <p class="mb-0"> Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna 8-bit</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <p>
                                                Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                farm-to-table readymade. Messenger bag gentrify pitchfork
                                                tattooed craft beer, iphone skateboard locavore carles etsy
                                                salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                Leggings gentrify squid 8-bit cred.
                                            </p>
                                            <p class="mb-0">DIY synth PBR banksy irony.
                                                Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                mi whatever gluten-free.</p>
                                        </div>
                                        <div class="tab-pane fade active show" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <p>
                                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                art party before they sold out master cleanse gluten-free squid
                                                scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                art party locavore wolf cliche high life echo park Austin. Cred
                                                vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                farm-to-table.
                                            </p>
                                            <p class="mb-0">Fanny pack portland seitan DIY,
                                                art party locavore wolf cliche high life echo park Austin. Cred
                                                vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                farm-to-table.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
    </div>
    </div>

@endsection
