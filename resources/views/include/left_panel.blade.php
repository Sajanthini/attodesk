<div class="left_panel position-fixed" id="left_panel">

    <a href="dashboard.php">
        <div class="px-3 logo bg-dark align-items-center" id="mainlogo_big" style="display: flex;">
            <img width="140" src="img/logo_main_white.webp" alt="Attodesk Logo Big">
        </div>
        <div class="pe-2 logo bg-dark justify-content-end align-items-center" id="mainlogo_small"
            style="display: none;">
            <img width="20" src="img/atto_desk_logo_icon_white.webp" alt="Attodesk Logo Small">
        </div>
    </a>

    <!-- --------------- -->
    <!----- Navigation ---->
    <!-- --------------- -->
    <div class="navigation" id="navigation">
        <!-- <ul>
            <a href="index.php">
                <li class="active"><i class="bi bi-speedometer2"></i><span class="menu_text">Dashboard</span></li>
            </a>
            <a href="customers.php">
                <li><i class="bi bi-person"></i><span class="menu_text">Customers</span></li>
            </a>
            <a href="inventory.php">
                <li><i class="bi bi-car-front-fill"></i><span class="menu_text">Inventory</span></li>
            </a>
            <a href="contact.php">
                <li><i class="bi bi-person-rolodex"></i><span class="menu_text">Contact</span></li>
            </a>
            <li><i class="bi bi-gear"></i><span class="menu_text">Setting</span></li>
        </ul> -->

        <ul class="cd-accordion cd-accordion--animated margin-top-lg margin-bottom-lg ps-2" id="leftmenu">
            <!-- -------------------- -->
            <!-- Menu Dashboard -->
            <!-- -------------------- -->
            <!-- <li class="cd-accordion__item cd-accordion__item--has-children">
                <a href="index.php">
                    <div class="menu_item_desktop_expand">
                        <label class="d-flex justify-content-between w-100 cd-accordion__label cd-accordion__label--icon-folder px-2">
                            <div>
                                <i class="bi bi-speedometer2"></i>
                                <span>Dashboard</span>
                            </div>
                            <div class="notification bg-danger text-white d-flex justify-content-center align-items-center">
                                3
                            </div>
                        </label>
                    </div>
                </a>
                <label class="cd-accordion__label cd-accordion__label--icon-folder px-2 menu_item_desktop_collapsed" for="group-1">
                    <i class="bi bi-person-rolodex me-1"></i>
                </label>
            </li> -->

            <!-- -------------------- -->
            <!-- Menu Customer -->
            <!-- -------------------- -->
            <!-- <li class="cd-accordion__item cd-accordion__item--has-children">
                <a href="customers.php">
                    <div class="menu_item_desktop_expand">
                        <label class="d-flex cd-accordion__label cd-accordion__label--icon-folder px-2">
                            <i class="bi bi-person"></i>
                            <span>Customer</span>
                        </label>
                    </div>
                </a>
                <label class="cd-accordion__label cd-accordion__label--icon-folder px-2 menu_item_desktop_collapsed" for="group-1">
                    <i class="bi bi-person me-1"></i>
                </label>
            </li> -->

            <!-- -------------------- -->
            <!-- Menu Inventory -->
            <!-- -------------------- -->
            <!-- <li class="cd-accordion__item cd-accordion__item--has-children">
                <a href="inventory.php">
                    <div class="menu_item_desktop_expand">
                        <label class="d-flex cd-accordion__label cd-accordion__label--icon-folder px-2">
                            <i class="bi bi-car-front-fill"></i>
                            <span>Inventory</span>
                        </label>
                    </div>
                </a>
                <label class="cd-accordion__label cd-accordion__label--icon-folder px-2 menu_item_desktop_collapsed" for="group-1">
                    <i class="bi bi-car-front-fill me-1"></i>
                </label>
            </li> -->

            <!-- -------------------- -->
            <!-- Menu Contact -->
            <!-- -------------------- -->
            <!-- <li class="cd-accordion__item cd-accordion__item--has-children">
                <a href="leads.php">
                    <div class="menu_item_desktop_expand">
                        <label class="d-flex cd-accordion__label cd-accordion__label--icon-folder px-2">
                            <i class="bi bi-person-rolodex"></i>
                            <span>Leads</span>
                        </label>
                    </div>
                </a>
                <label class="cd-accordion__label cd-accordion__label--icon-folder px-2 menu_item_desktop_collapsed" for="group-1">
                    <i class="bi bi-person-rolodex me-1"></i>
                </label>
            </li> -->

            <!-- -------------------- -->
            <!-- Menu Setting -->
            <!-- -------------------- -->
            <li class="cd-accordion__item cd-accordion__item--has-children">
                <input class="cd-accordion__input" type="checkbox" name="group-1" id="group-1" />
                <a href="index.php">
                    <label class="menu_item_desktop_expand cd-accordion__label cd-accordion__label--icon-folder px-2"
                        for="group-1">
                        <div class="d-flex">
                            <i class="bi bi-gear"></i>
                            <span>Settings</span>
                        </div>
                        <i class="bi bi-caret-down-fill"></i>
                    </label>
                </a>
                <label class="cd-accordion__label cd-accordion__label--icon-folder px-2 menu_item_desktop_collapsed"
                    for="group-1">
                    <i class="bi bi-speedometer2 me-1"></i>
                </label>

                <!-- Setting Sub Menu Level 1 -->
                <ul class="cd-accordion__sub cd-accordion__sub--l1">
                    <li class="cd-accordion__item cd-accordion__item--has-children">
                        <a href="setting_comp_info.blade.php">
                            <!-- <input class="cd-accordion__input" type="checkbox" name="sub-group-1" id="sub-group-1" /> -->
                            <label class="cd-accordion__label cd-accordion__label--icon-folder menu_text"
                                for="sub-group-1">
                                <div class="d-flex justify-content-between">
                                    <span>
                                        <i class="bi bi-info-circle pe-1"></i> Company Info
                                    </span>
                                    <!-- <span class="end-0 position-absolute me-2"><i class="bi bi-caret-down-fill"></i></span> -->
                                </div>
                            </label>
                        </a>

                        <!-- Setting Sub Menu Level 2 -->
                        <!-- <ul class="cd-accordion__sub cd-accordion__sub--l2">
                            <li class="cd-accordion__item">
                                <a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span><i class="bi bi-arrow-right-short"></i> Sub Menu 1</span></a>
                            </li>
                            <li class="cd-accordion__item">
                                <a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span><i class="bi bi-arrow-right-short"></i> Sub Menu 2</span></a>
                            </li>
                            <li class="cd-accordion__item">
                                <a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span><i class="bi bi-arrow-right-short"></i> Sub Menu 3</span></a>
                            </li>
                        </ul> -->
                    </li>
                    <li class="cd-accordion__item cd-accordion__item--has-children">
                        <a href="setting_catagory.blade.php">
                            <label class="cd-accordion__label cd-accordion__label--icon-folder menu_text"
                                for="sub-group-1">
                                <div class="d-flex justify-content-between">
                                    <span>
                                        <i class="bi bi-diagram-2 pe-1"></i> Catagory
                                    </span>
                                </div>
                            </label>
                        </a>
                    </li>
                    <li class="cd-accordion__item cd-accordion__item--has-children">
                        <a href="#">
                            <label class="cd-accordion__label cd-accordion__label--icon-folder menu_text"
                                for="sub-group-1">
                                <div class="d-flex justify-content-between">
                                    <span>
                                        <i class="bi bi-cart-plus-fill pe-1"></i> Item
                                    </span>
                                </div>
                            </label>
                        </a>
                    </li>
                    <!-- <li class="cd-accordion__item cd-accordion__item--has-children">
                        <a href="setting_note.php">
                            <label class="cd-accordion__label cd-accordion__label--icon-folder menu_text" for="sub-group-1">
                                <div class="d-flex justify-content-between">
                                    <span>
                                        <i class="bi bi-sticky pe-1"></i> Note
                                    </span>
                                </div>
                            </label>
                        </a>
                    </li>
                    <li class="cd-accordion__item cd-accordion__item--has-children">
                        <a href="setting_upload.php">
                            <label class="cd-accordion__label cd-accordion__label--icon-folder menu_text" for="sub-group-1">
                                <div class="d-flex justify-content-between">
                                    <span>
                                        <i class="bi bi-upload pe-1"></i> Upload
                                    </span>
                                </div>
                            </label>
                        </a>
                    </li> -->
                </ul>
            </li>

            <!-- -------------------- -->
            <!-- Vehicle List -->
            <!-- -------------------- -->
            <!-- <li class="cd-accordion__item cd-accordion__item--has-children">
                <a href="vehicle_list.php">
                    <div class="menu_item_desktop_expand">
                        <label class="d-flex cd-accordion__label cd-accordion__label--icon-folder px-2">
                            <i class="bi bi-list"></i>
                            <span>Vehicle</span>
                        </label>
                    </div>
                </a>
                <label class="cd-accordion__label cd-accordion__label--icon-folder px-2 menu_item_desktop_collapsed" for="group-1">
                    <i class="bi bi-person-rolodex me-1"></i>
                </label>
            </li> -->

        </ul>

    </div>
</div>