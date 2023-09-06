<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ขออนุมัติปฏิบัติงานล่วงเวลา</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>Admin">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="Admin" href="<?php echo base_url()?>Admin/OTRequest">รายการขออนุมัติ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="Admin" href="<?php echo base_url()?>Admin/OTRequestHRM">Export HRM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="Admin" href="<?php echo base_url()?>Admin/Employees">พนักงาน</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <a href="<?php echo base_url() ?>Logout">
                    <button type="button" class="btn btn-danger ms-3">ออกจากระบบ</button>
                </a>
            </form>
        </div>
    </div>
</nav>