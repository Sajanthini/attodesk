@extends('layouts.app')

@section('content')
<div class="d-flex dashboard">
    @include('include.left_panel')
    @include('include.topbar')

    <div class="right_panel position contact_section h-100" id="right_panel">
        <!-- Main Title -->
        <div class="main_title" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
            <h1><i class="bi bi-graph-up-arrow"></i> Dashboard</h1>
        </div>

        <div class="content_wrapper pt-0">
            <!-- Highlights Section -->
            <div class="row highlights">
                <div class="col-lg-3 col-md-6 col-6 pb-3 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="item vm_content_box_1 h-100">
                        <p class="text-uppercase">Contacts</p>
                        <h2 class="vm_font_semi_bold lh-base d-flex">
                            <i class="bi bi-person pe-1"></i>
                            <div class="value" akhi="350">0</div>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pb-3 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="item vm_content_box_1 h-100">
                        <div class="d-md-flex my-2 my-md-0 justify-content-between">
                            <p class="text-uppercase">Customers</p>
                            <div class="d-flex align-items-center vm_bg_light_green px-2">
                                <h5><i class="bi bi-arrow-up text-success"></i></h5>
                                <p class="text-uppercase vm_font_bold text-success">+02.00 %</p>
                            </div>
                        </div>
                        <h2 class="vm_font_semi_bold lh-base d-flex">
                            <i class="bi bi-people pe-1"></i>
                            <div class="value" akhi="125">0</div>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pb-3 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="item vm_content_box_1 h-100">
                        <div class="d-md-flex my-2 my-md-0 justify-content-between">
                            <p class="text-uppercase">Inventory</p>
                            <div class="d-flex align-items-center vm_bg_light_red px-2">
                                <h5><i class="bi bi-arrow-down text-danger"></i></h5>
                                <p class="text-uppercase vm_font_bold text-danger">+15.25 %</p>
                            </div>
                        </div>
                        <h2 class="vm_font_semi_bold lh-base d-flex">
                            <i class="bi bi-car-front pe-1"></i>
                            <div class="value" akhi="985">0</div>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pb-3 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="item vm_content_box_1 h-100">
                        <div class="d-md-flex my-2 my-md-0 justify-content-between">
                            <p class="text-uppercase">Revenue</p>
                            <div class="d-flex align-items-center vm_bg_light_green px-2">
                                <h5><i class="bi bi-arrow-up vm_text_color_secondary"></i></h5>
                                <p class="text-uppercase vm_font_bold vm_text_color_secondary">+29.08 %</p>
                            </div>
                        </div>
                        <h2 class="vm_font_semi_bold lh-base d-flex">
                            
                            <div class="value currency_value" akhi="91250">0</div>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-6 pb-4 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1 h-100">
                        <div class="title d-flex justify-content-between">
                            <h2>Latest Inqueries</h2>
                            <div class="d-flex">
                                <div class="btn_shake">
                                    <i class="bi bi-bell-fill text-danger fs-6 btn_shake"></i>
                                </div>
                                <span>3</span>
                            </div>
                        </div>
                        <div class="content" style="height: 280px;">
                            <div>
                                <div class="border-bottom pb-3 pt-2">
                                    <a href="leads_details.php">
                                        <p><span class="vm_font_bold"><i class="bi bi-calendar-week me-1"></i> Inquery Date</span> : 25 - August - 2023</p>
                                        <h4 class="vm_font_semi_bold lh-base pb-1">2019 MERCEDES-BENZ A 220 4MATIC</h4>
                                        <div class="d-md-flex justify-content-between">
                                            <p class="lh-1"><span class="vm_font_semi_bold">Price Range</span> :
                                                <span class="vm_font_semi_bold vm_text_color_secondary">
                                                    <span class="currency">CAD</span>31,999 -
                                                    <span class="currency">CAD</span>33,000
                                                </span>
                                            </p>
                                            <p class="lh-1 pt-2 pt-md-0"><span class="vm_font_semi_bold"><i class="bi bi-speedometer"></i> Milage</span> : 61,000 Km</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="border-bottom pb-3 pt-2">
                                    <a href="leads_details.php">
                                        <p><span class="vm_font_bold"><i class="bi bi-calendar-week me-1"></i> Inquery Date</span> : 20 - August - 2023</p>
                                        <h4 class="vm_font_semi_bold lh-base pb-1">2021 HYUNDAI ELANTRA SEL</h4>
                                        <div class="d-md-flex justify-content-between">
                                            <p class="lh-1"><span class="vm_font_semi_bold">Price Range</span> :
                                                <span class="vm_font_semi_bold vm_text_color_secondary">
                                                    <span class="currency">CAD</span>45,000 -
                                                    <span class="currency">CAD</span>48,000
                                                </span>
                                            </p>
                                            <p class="lh-1 pt-2 pt-md-0"><span class="vm_font_semi_bold"><i class="bi bi-speedometer"></i> Milage</span> : 42,000 Km</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="border-bottom pb-3 pt-2">
                                    <a href="leads_details.php">
                                        <p><span class="vm_font_bold"><i class="bi bi-calendar-week me-1"></i> Inquery Date</span> : 20 - August - 2023</p>
                                        <h4 class="vm_font_semi_bold lh-base pb-1">2021 HYUNDAI ELANTRA SEL</h4>
                                        <div class="d-md-flex justify-content-between">
                                            <p class="lh-1"><span class="vm_font_semi_bold">Price Range</span> :
                                                <span class="vm_font_semi_bold vm_text_color_secondary">
                                                    <span class="currency">CAD</span>45,000 -
                                                    <span class="currency">CAD</span>48,000
                                                </span>
                                            </p>
                                            <p class="lh-1 pt-2 pt-md-0"><span class="vm_font_semi_bold"><i class="bi bi-speedometer"></i> Milage</span> : 42,000 Km</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-4 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1">
                        <div class="title">
                            <h2>Monthly Sales Report</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Monthly Sales Report -->
            <div class="row pt-4">
                <div class="col-lg-6 pb-4 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1">
                        <div class="title">
                            <h2>Monthly Sales Report</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-4 pb-md-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1 h-100">
                        <div class="title">
                            <h2>Inventory Report</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <canvas id="dashboardPieChart1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1 h-100">
                        <div class="title">
                            <h2>Inventory Report</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <canvas id="dashboardPieChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Arrival -->
            <div class="row pt-4">
                <div class="col-lg-6 pb-4 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1 h-100" style="height:400px;">
                        <div class="title">
                            <h2>Inventory - Approval Pending</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <p>See and talk to your users and leads immediately by importing your data into the Front Dashboard platform.</p>
                        </div>
                        <div class="subtitle_1">
                            <h2>Latest Arrival</h2>
                        </div>
                        <div class="content pt-3">
                            <div class="d-flex align-items-center justify-content-between pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <div class="d-flex align-items-center">
                                    <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                    <div class="ps-2">
                                        <p class="vm_font_semi_bold">Mazda 2023</p>
                                        <p>03 - April - 2023</p>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <div class="d-flex align-items-center">
                                    <div class="circle_img bg-light" style="background: url('https://media.cnn.com/api/v1/images/stellar/prod/220822155902-01-new-delorean-2022.jpg?c=16x9&q=h_720,w_1280,c_fill/f_webp');"></div>
                                    <div class="ps-2">
                                        <p class="vm_font_semi_bold">Mazda 2023</p>
                                        <p>03 - April - 2023</p>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <div class="d-flex align-items-center">
                                    <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                    <div class="ps-2">
                                        <p class="vm_font_semi_bold">Mazda 2023</p>
                                        <p>03 - April - 2023</p>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn_light"><i class="bi bi-pencil-square"></i> Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="height:400px;" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1 h-100">
                        <div class="title">
                            <h2>My To Do List</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="todo1">
                                <label for="todo1">
                                    <p class="vm_font_semi_bold text-success">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="todo2">
                                <label for="todo2">
                                    <p class="vm_font_semi_bold text-decoration-line-through">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="todo3">
                                <label for="todo3">
                                    <p class="vm_font_semi_bold text-success">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="todo4">
                                <label for="todo4">
                                    <p class="vm_font_semi_bold text-decoration-line-through">Call New Lead Submission</p>
                                    <p>Contact : Jaskaran Singh</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="todo5">
                                <label for="todo5">
                                    <p class="vm_font_semi_bold text-success">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customer Data Table -->
            <div class="pt-4">
                <div class="vm_content_box_1">
                    <div class="title">
                        <h2>Customers</h2>
                        <div class="dropdown">
                            <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content overflow_y_hidden">
                        <table id="example" class="display">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Vehicle Name</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-primary rounded-1 px-2 py-1 text-white">Approved</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">80%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ananth_raja">
                                            <label for="ananth_raja">
                                                <p class="vm_font_semi_bold">Director</p>
                                                <p>Ananth Raja</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://stimg.cardekho.com/images/carexteriorimages/930x620/Nissan/Magnite/8127/1608191740345/front-left-side-47.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-danger rounded-1 px-2 py-1 text-white">Pending</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">20%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-success rounded-1 px-2 py-1 text-white">Finished</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">100%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-primary rounded-1 px-2 py-1 text-white">Approved</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">80%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ananth_raja">
                                            <label for="ananth_raja">
                                                <p class="vm_font_semi_bold">Director</p>
                                                <p>Ananth Raja</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://stimg.cardekho.com/images/carexteriorimages/930x620/Nissan/Magnite/8127/1608191740345/front-left-side-47.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-danger rounded-1 px-2 py-1 text-white">Pending</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">20%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-success rounded-1 px-2 py-1 text-white">Finished</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">100%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-primary rounded-1 px-2 py-1 text-white">Approved</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">80%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ananth_raja">
                                            <label for="ananth_raja">
                                                <p class="vm_font_semi_bold">Director</p>
                                                <p>Ananth Raja</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://stimg.cardekho.com/images/carexteriorimages/930x620/Nissan/Magnite/8127/1608191740345/front-left-side-47.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-danger rounded-1 px-2 py-1 text-white">Pending</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">20%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-success rounded-1 px-2 py-1 text-white">Finished</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">100%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-primary rounded-1 px-2 py-1 text-white">Approved</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">80%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ananth_raja">
                                            <label for="ananth_raja">
                                                <p class="vm_font_semi_bold">Director</p>
                                                <p>Ananth Raja</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://stimg.cardekho.com/images/carexteriorimages/930x620/Nissan/Magnite/8127/1608191740345/front-left-side-47.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-danger rounded-1 px-2 py-1 text-white">Pending</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">20%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-success rounded-1 px-2 py-1 text-white">Finished</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">100%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-primary rounded-1 px-2 py-1 text-white">Approved</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">80%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ananth_raja">
                                            <label for="ananth_raja">
                                                <p class="vm_font_semi_bold">Director</p>
                                                <p>Ananth Raja</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://stimg.cardekho.com/images/carexteriorimages/930x620/Nissan/Magnite/8127/1608191740345/front-left-side-47.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-danger rounded-1 px-2 py-1 text-white">Pending</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">20%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-success rounded-1 px-2 py-1 text-white">Finished</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">100%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-primary rounded-1 px-2 py-1 text-white">Approved</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">80%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ananth_raja">
                                            <label for="ananth_raja">
                                                <p class="vm_font_semi_bold">Director</p>
                                                <p>Ananth Raja</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://stimg.cardekho.com/images/carexteriorimages/930x620/Nissan/Magnite/8127/1608191740345/front-left-side-47.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-danger rounded-1 px-2 py-1 text-white">Pending</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">20%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button>
                                    </td>
                                </tr>
                                <tr data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                    <td>
                                        <div class="d-flex align-items-start">
                                            <input class="mt-1 me-2" type="checkbox" name="select" id="ramesh_kumar">
                                            <label for="ramesh_kumar">
                                                <p class="vm_font_semi_bold">Manager</p>
                                                <p>Ramesh Kumar</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <div class="circle_img bg-light" style="background: url('https://www.topgear.com/sites/default/files/cars-car/image/2021/02/cx-5-skyactiv-g-awd-gt-sport-auto-action-3.jpg');"></div>
                                            <div class="ps-md-2">
                                                <p class="vm_font_semi_bold">Mazda 2023</p>
                                                <p>03 - April - 2023</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-absolute mt-2">
                                            <span class="bg-success rounded-1 px-2 py-1 text-white">Finished</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-center vm_font_semi_bold">100%</p>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><button class="btn_light position-absolute mt-2"><i class="bi bi-eye-fill"></i> Veiew</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Vehicle Name</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Task and Appointment -->
            <div class="row pt-4">
                <div class="col-lg-6 pb-4 pb-lg-0" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1">
                        <div class="title">
                            <h2>Task</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content pt-3" style="height: 300px;">
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="task1">
                                <label for="task1">
                                    <p class="vm_font_semi_bold">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="task2">
                                <label for="task2">
                                    <p class="vm_font_semi_bold">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="task3">
                                <label for="task3">
                                    <p class="vm_font_semi_bold">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="task4">
                                <label for="task4">
                                    <p class="vm_font_semi_bold">Call New Lead Submission</p>
                                    <p>Contact : Jaskaran Singh</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="task5">
                                <label for="task5">
                                    <p class="vm_font_semi_bold">Make Initial Call</p>
                                    <p>Contact : Crystal Miles</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="" data-aos-duration="1200">
                    <div class="vm_content_box_1 h-100">
                        <div class="title">
                            <h2>Appointment</h2>
                            <div class="dropdown">
                                <i class="bi bi-three-dots-vertical vm_cursor_pointer" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="app1">
                                <label for="app1">
                                    <p class="vm_font_semi_bold">Familyt Da (Regional Holiday)</p>
                                    <p>12:00am - 11:56pm</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="app2">
                                <label for="app2">
                                    <p class="vm_font_semi_bold">Nova Scotia Heritage Day</p>
                                    <p>12:00am - 11:56pm</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start pb-3" data-aos="fade-right" data-aos-delay="" data-aos-duration="1200">
                                <input class="mt-1 me-2" type="checkbox" name="select" id="app3">
                                <label for="app3">
                                    <p class="vm_font_semi_bold">Louis Riel Day</p>
                                    <p>12:00am - 11:56pm</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    // ---------------------
    // Bar Chart - Home Page
    // ---------------------
    const ctx = document.getElementById("myChart");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                    label: "Sales Value",
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: ["green", "green", "green", "green", "green", "green"],
                    borderWidth: 1,
                },
                {
                    label: "Inventory",
                    data: [10, 15, 10, 8, 12, 17],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });

    const ctx2 = document.getElementById("myChart2");
    new Chart(ctx2, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                    label: "Sales Value",
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: ["green", "green", "green", "green", "green", "green"],
                    borderWidth: 1,
                },
                {
                    label: "Inventory",
                    data: [10, 15, 10, 8, 12, 17],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });

    // -----------------------
    // Pie Chart 1 - Home Page
    // -----------------------
    const dashboardPieChart1 = document.getElementById("dashboardPieChart1");
    new Chart(dashboardPieChart1, {
        type: "pie",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                label: "Sales Value",
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    "#F6DFB2",
                    "#9fd79a",
                    "#E4F59D",
                    "#B2E9F6",
                    "#DCB2F6",
                    "#F6B2E7",
                ],
                borderWidth: 2,
            }, ],
        },
    });

    // ----------------------
    // Pie Chart 2 - Home Pag
    // ----------------------
    const dashboardPieChart2 = document.getElementById("dashboardPieChart2");
    new Chart(dashboardPieChart2, {
        type: "doughnut",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                label: "Sales Value",
                data: [50, 20, 23, 32, 5, 9],
                backgroundColor: [
                    "#F6DFB2",
                    "#9fd79a",
                    "#E4F59D",
                    "#B2E9F6",
                    "#DCB2F6",
                    "#F6B2E7",
                ],
                borderWidth: 2,
            }, ],
        },
    });
</script>