@extends('layouts.app')

@section('content')

<div class="d-flex dashboard">

    @include('include.left_panel')
    @include('include.topbar')

    <div class="right_panel position contact_section vh-100" id="right_panel">

        <div class="main_title d-flex aling-items-center justify-content-start">
            <i class="bi bi-diagram-2"></i>
            <h1>Catagory</h1>
        </div>

        <div class="content_wrapper pt-0">
            <div class="vm_content_box_1">
                <div class="title">
                    <h2><i class="bi bi-diagram-2"></i> Create Catagory</h2>
                </div>
                <div class="content pt-2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group pt-2">
                                <label for="create_cat">Create Catagory</label>
                                <input type="text" class="form-control" name="create_cat" id="create_cat"
                                    placeholder="Enter Catagory name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_wrapper pt-0">
            <div class="vm_content_box_1">
                <div class="title">
                    <h2><i class="bi bi-diagram-3"></i> Create Sub Catagory</h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group pt-2">
                                <label for="Select_main_cat">Select Main Catagory</label>
                                <select class="form-select" name="Select_main_cat" id="Select_main_cat">
                                    <option value="mc_1">Main Cat 1</option>
                                    <option value="mc_2">Main Cat 2</option>
                                    <option value="mc_3">Main Cat 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group pt-2">
                                <label for="create_sub_cat">Create Sub Catagory</label>
                                <input type="text" class="form-control" name="create_sub_cat" id="create_sub_cat"
                                    placeholder="Enter Sub Catagory name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                <button class="btn btn-sm btn_secondary text-white"><i class="bi bi-save me-2"></i>
                    Save</button>
            </div>

            <div class="vm_content_box_1 mt-4">
                <div class="title">
                    <h2><i class="bi bi-list-ol"></i> Manage Catagory</h2>
                </div>

                <div class="content">
                    <div id="example_wrapper" class="dataTables_wrapper">
                        <table id="example" class="display dataTable dtr-inline" style="width: 100%;"
                            aria-describedby="example_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                        colspan="1" style="width: 345px;" aria-sort="ascending"
                                        aria-label="Pin Title: activate to sort column descending">Manage Catagory</th>
                                    <th class="text-end sorting" tabindex="0" aria-controls="example" rowspan="1"
                                        colspan="1" style="width: 694px;"
                                        aria-label="Action: activate to sort column ascending">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- ------------- -->
                                <!-- Main Catagory -->
                                <!-- ------------- -->
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">
                                        <p>Main Catagory 1</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                        <button class="btn_light ms-2"><i class="bi bi-trash3"></i> Delete</button>
                                    </td>
                                </tr>
                                <!-- Sub Catagory -->
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">
                                        <p class="ps-4">Main Catagory 1 - Sub Catagory 1</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                        <button class="btn_light ms-2"><i class="bi bi-trash3"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">
                                        <p class="ps-4">Main Catagory 1 - Sub Catagory 2</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                        <button class="btn_light ms-2"><i class="bi bi-trash3"></i> Delete</button>
                                    </td>
                                </tr>
                                <!-- ------------- -->
                                <!-- Main Catagory -->
                                <!-- ------------- -->
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">
                                        <p>Main Catagory 2</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                        <button class="btn_light ms-2"><i class="bi bi-trash3"></i> Delete</button>
                                    </td>
                                </tr>
                                <!-- ------------- -->
                                <!-- Main Catagory -->
                                <!-- ------------- -->
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">
                                        <p>Main Catagory 3</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                        <button class="btn_light ms-2"><i class="bi bi-trash3"></i> Delete</button>
                                    </td>
                                </tr>
                                <!-- ------------- -->
                                <!-- Main Catagory -->
                                <!-- ------------- -->
                                <tr class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">
                                        <p>Main Catagory 4</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                        <button class="btn_light ms-2"><i class="bi bi-trash3"></i> Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Manage Catagory</th>
                                    <th class="text-end" rowspan="1" colspan="1">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection