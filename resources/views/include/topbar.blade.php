<!-- --------------- -->
<!--- Admin Top Bar --->
<!-- --------------- -->
<div class="border-bottom pe-3 d-flex align-items-center justify-content-between bg-white topbar w-100 position-fixed" id="topbar">
    <div class="d-flex align-items-center">
        <i class="bi bi-arrow-left-short vm_font_bold vm_cursor_pointer fs-3" id="hideMenu" onclick="hideMenu()"></i>
        <i class="bi bi-list vm_font_bold vm_cursor_pointer fs-3" id="showMenu" onclick="showMenu()" style="display: none;"></i>
        <div class="d-flex align-items-center ms-3">
            <button class="border-0 bg-transparent"><i class="bi bi-search"></i></button>
            <input class="form-control search_input rounded-0 border-0 bg-transparent" placeholder="Search in Front" type="text">
        </div>
    </div>
    <div class="d-flex align-items-center">
        <i class="bi bi-bell fs-5"></i>
        <div class="user d-flex align-items-center ps-md-3">
            <p class="d-md-block d-none">Super Admin</p>
            <div class="dropdown">
                <div class="user_photo ms-2 vm_cursor_pointer vm_bg_center vm_bg_cover vm_bg_norepeat" style="background: url('img/user_login_photo.webp');" data-bs-toggle="dropdown" aria-expanded="false"></div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="setting_comp_info.php"><i class="bi bi-gear"></i> Setting</a></li>
                    <li><a class="dropdown-item" href="index.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>