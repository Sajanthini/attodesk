@extends('layouts.app')

@section('content')

<div class="d-flex dashboard">

    @include('include.left_panel')
    @include('include.topbar')

    <div class="right_panel position contact_section vh-100" id="right_panel">

        <div class="main_title d-flex aling-items-center justify-content-start">
            <i class="bi bi-info-circle"></i>
            <h1>Company Information</h1>
        </div>

        <div class="content_wrapper pt-0">
            <div class="vm_content_box_1">
                <div class="title">
                    <h2>Company Information</h2>
                </div>
                <div class="content pt-3">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img class="w-100" src="img/dummy_image.webp" alt="Dummy Image">
                            <div class="d-flex align-items-center pb-3 pb-md-0 pt-2 w-100">
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <label class="vm_cursor_pointer border border-2 d-flex align-items-center px-2"
                                        for="removeimg">
                                        <i class="bi bi-x-lg h3 me-2"></i>
                                        Remove Image
                                    </label>
                                    <!-- <input class="d-none" type="file" name="image" id="image"> -->
                                </div>
                                <!-- <div>
                                        <label class="vm_cursor_pointer border border-2 d-flex align-items-center px-2"
                                            for="image">
                                            <i class="bi bi-card-image h3 me-2"></i>
                                            Select Image
                                        </label>
                                        <input class="d-none" type="file" name="image" id="image">
                                    </div> -->
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group pt-2">
                                        <label for="company_name">Company Name</label>
                                        <input type="text" class="form-control" name="company_name" id="company_name"
                                            placeholder="Enter Company Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pt-2">
                                        <label for="display_namne">Display Name</label>
                                        <input type="text" class="form-control" name="display_namne" id="display_namne"
                                            placeholder="Enter Display Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group pt-2">
                                        <label for="company_name">Address</label>
                                        <input type="text" class="form-control" name="address" id="address"
                                            placeholder="Enter Company Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-2">
                                        <label for="comp_desc">Address</label>
                                        <textarea class="form-control" name="comp_desc" id="comp_desc" rows="4"
                                            placeholder="Company Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_wrapper pt-0">
            <div class="vm_content_box_1">
                <div class="title">
                    <h2><i class="bi bi-clock"></i> Opening Hours</h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group pt-3">
                                <label for="open_sunday">Sunday</label>
                                <input type="text" class="form-control" name="open_sunday" id="open_sunday"
                                    placeholder="Sunday">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group pt-2">
                                <label for="open_monday">Monday</label>
                                <input type="text" class="form-control" name="open_monday" id="open_monday"
                                    placeholder="Monday">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group pt-2">
                                <label for="open_tuesday">Tuesday</label>
                                <input type="text" class="form-control" name="open_tuesday" id="open_tuesday"
                                    placeholder="Tuesday">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group pt-2">
                                <label for="open_wednesday">Wednesday</label>
                                <input type="text" class="form-control" name="open_wednesday" id="open_wednesday"
                                    placeholder="Wednesday">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group pt-2">
                                <label for="open_thursday">Thursday</label>
                                <input type="text" class="form-control" name="open_thursday" id="open_thursday"
                                    placeholder="Thursday">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group pt-2">
                                <label for="open_friday">Friday</label>
                                <input type="text" class="form-control" name="open_friday" id="open_friday"
                                    placeholder="Friday">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group pt-2">
                                <label for="open_saturday">Saturday</label>
                                <input type="text" class="form-control" name="open_saturday" id="open_saturday"
                                    placeholder="Saturday">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                <button class="btn btn-sm btn_secondary text-white"><i class="bi bi-save me-2"></i>
                    Save</button>
            </div>
        </div>



    </div>
</div>

@endsection