<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="อนุมัติ OT Online">
    <meta property="og:title" content="อนุมัติ OT Online">
    <title>ขออนุมัติปฏิบัติงานล่วงเวลา</title>

    <!-- See CSS.html file -->
</head>

<body>
    <div class="">
        <div class="custom-shape-divider-top-1693803862">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="content">
            <div class="container-fluid">
                <?php include(APPPATH . "views/Nav/Navbar_admin.php"); ?>
                <div class="row mt-3">
                    <div class="col mx-auto">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <b class="d-flex justify-content-center mx-auto flex-column">
                                                <div class="title-dark-blue">
                                                    สวัสดี,
                                                    <?php echo $_SESSION['username'] ?>

                                                </div>
                                            </b>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" id="insert_modal_employee">
                                            เพิ่มพนักงาน
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="EmployeeForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มพนักงาน</h5>
                                                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form id="insert_form">
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="text" id="id" hidden>
                                                                    <div class="form-outline mt-3">
                                                                        <input class="form-control" type="text" name="employees_id" id="employees_id" required maxlength="6" minlength="6">
                                                                        <label for="employees_id" class="form-label">รหัสพนักงาน:</label>
                                                                    </div>
                                                                    <label id="employees_id-error" class="error" for="employees_id" style="margin-left: 0px;"></label>

                                                                    <div class="form-outline mt-3">
                                                                        <input class="form-control" type="text" name="employees_name" id="employees_name" required minlength="5">
                                                                        <label for="employees_name" class="form-label">ชื่อ - สกุล:</label>
                                                                    </div>
                                                                    <label id="employees_name-error" class="error" for="employees_name" style="margin-left: 0px;"></label>

                                                                    <div class="form-outline mt-3">
                                                                        <select name="employees_sect" id="employees_sect" class="form-select" required>
                                                                            <option value="">เลือก Sects</option>
                                                                        </select>
                                                                        <!-- <label for=""></label> -->
                                                                        <label id="employees_section-error" class="error" for="employees_section" style="margin-left: 0px;"></label>
                                                                    </div>
                                                                    <div class="form-outline mt-3">
                                                                        <!-- select cars-->
                                                                        <select name="cars_id" id="cars_id" class="form-select" required>
                                                                            <option value="">เลือก สายรถ</option>
                                                                        </select>
                                                                        <!-- <label for=""></label> -->
                                                                        <label id="cars_id-error" class="error" for="cars_id" style="margin-left: 0px;"></label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">ปิด</button>
                                                            <button type="button" class="btn btn-primary" id="insert_employee">เพิ่มพนักงาน</button>
                                                            <button type="button" class="btn btn-primary d-none" id="update_employee">บันทึก</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col text-center">
                                        <!-- tb_employees -->
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered text-center" id="tb_employees">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            <div class="form-outline">
                                                                <input type="text" id="emp_id" class="form-control" />
                                                                <label class="form-label" for="emp_id">รหัสพนักงาน</label>
                                                            </div>
                                                        </th>
                                                        <th class="text-center">
                                                            <div class="form-outline">
                                                                <input type="text" id="emp_name" class="form-control" />
                                                                <label class="form-label" for="emp_name">ชื่อ</label>
                                                            </div>
                                                        </th>
                                                        <th class="text-center">
                                                            <select name="Sects" id="Sects" class="form-select" readonly>
                                                                <option value="">ทั้งหมด</option>
                                                            </select>
                                                        </th>
                                                        <th class="text-center">
                                                            <select name="Cars" id="Cars" class="form-select" readonly>
                                                                <option value="">ทั้งหมด</option>
                                                            </select>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">รหัสพนักงาน</th>
                                                        <th class="text-center">ชื่อ</th>
                                                        <th class="text-center">Sect</th>
                                                        <th class="text-center">สายรถ</th>
                                                        <th class="text-center">จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tb_employees_body">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- modal insert employees -->


                </div>
            </div>
            <?php include_once(APPPATH . 'views/js.php'); ?>
            <!-- MDB -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
            <script>
                // เซ็ต DataTable
                var tb_employees = $('#tb_employees').DataTable({
                    processing: true,
                    order: [
                        [0, 'asc']
                    ],
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel'
                    ],
                    ajax: {
                        'url': host + 'Employees/getEmployeesDetail',
                        'type': 'GET',
                    },
                    columns: [{
                            data: null,
                            render: function(data, type, row) {
                                return `${row.employees_id}`;
                            },
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `${row.employees_name}`;
                            },
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `${row.sects}`;
                            },
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `${row.cars}`;
                            },
                        },
                        {
                            targets: -1,
                            data: null,
                            defaultContent: `<button class="btn btn-danger">ลบ</button><button class="btn btn-warning">แก้ไข</button>`,
                        }

                        // {
                        // 	targets: -1,
                        // 	data: null,
                        // 	defaultContent: `<button class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>`,
                        // }
                    ],
                });


                // search emp_name
                $('#emp_id').on('keyup', function() {
                    tb_employees
                        .columns(0)
                        .search(this.value)
                        .draw();
                });

                // search emp_name
                $('#emp_name').on('keyup', function() {
                    tb_employees
                        .columns(1)
                        .search(this.value)
                        .draw();
                });

                // search roles
                $('#Sects').on('change', function() {
                    console.log(this.value)
                    tb_employees
                        .columns(2)
                        .search(this.value)
                        .draw();
                });

                // search cars
                $('#Cars').on('change', function() {
                    console.log(this.value)
                    tb_employees
                        .columns(3)
                        .search(this.value)
                        .draw();
                });

                function getSect() {
                    let sects = {};
                    // ajax post request
                    $.ajax({
                        url: "<?php echo base_url(); ?>Sects/getSects",
                        type: "POST",
                        dataType: "json",
                        success: function(response) {
                            // console.log(response)
                            sects = response;
                            var list = document.getElementById('Sects');
                            for (const [key, value] of Object.entries(response)) {
                                // console.log(value)
                                var option = document.createElement("option");
                                option.value = `${value.sects}`;
                                option.text = `${value.sects}`;
                                list.appendChild(option);
                            }
                            // populate to employees_sect
                            var list = document.getElementById('employees_sect');
                            for (const [key, value] of Object.entries(response)) {
                                // console.log(value)
                                var option = document.createElement("option");
                                option.value = `${value.id}`;
                                option.text = `${value.sects}`;
                                list.appendChild(option);
                            }

                        },
                    });
                    return sects;
                }

                function getCars() {
                    let cars = {};
                    // ajax post request
                    $.ajax({
                        url: "<?php echo base_url(); ?>Cars/getCars",
                        type: "POST",
                        dataType: "json",
                        success: function(response) {
                            // console.log(response)
                            cars = response;
                            var list = document.getElementById('Cars');
                            for (const [key, value] of Object.entries(response)) {
                                // console.log(value)
                                var option = document.createElement("option");
                                option.value = `${value.cars}`;
                                option.text = `${value.cars}`;
                                list.appendChild(option);
                            }
                            // populate to cars_id
                            var list = document.getElementById('cars_id');
                            for (const [key, value] of Object.entries(response)) {
                                // console.log(value)
                                var option = document.createElement("option");
                                option.value = `${value.id}`;
                                option.text = `${value.cars}`;
                                list.appendChild(option);
                            }
                        },
                    });
                    return cars;
                }

                function delete_employee(id) {
                    let data = {
                        id: id,
                    }
                    $.ajax(host + 'Employees/delete_employee', {
                        data: data,
                        contentType: "contentType/json",
                        success: function(response) {
                            console.log(response)
                            if (response.response_code == 200) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'ลบพนักงานสำเร็จ',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                // clode modal
                                $('#EmployeeForm').modal('hide');
                                tb_employees.ajax.reload();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: response?.response_msg,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        },
                        error: function(err) {
                            console.log(err)
                        }
                    });
                }



                $('#tb_employees tbody').on('click', 'button.btn-danger', function() {
                    // swal comfirm
                    Swal.fire({
                        title: 'คุณต้องการลบพนักงานใช่หรือไม่?',
                        text: "คุณจะไม่สามารถย้อนกลับได้!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // swal
                            Swal.fire({
                                title: 'กำลังลบพนักงาน',
                                text: 'กรุณารอสักครู่...',
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                allowEnterKey: false,
                                didOpen: () => {
                                    Swal.showLoading()
                                    var row = tb_employees.row($(this).parents('tr')).data();
                                    delete_employee(row.id);
                                },
                            })
                        }
                    })
                });

                $('#tb_employees tbody').on('click', 'button.btn-warning', function() {
                    // update 
                    var row = tb_employees.row($(this).parents('tr')).data();
                    console.log(row)
                    $('#employees_id').val(row.employees_id);
                    $('#employees_name').val(row.employees_name);
                    // $('#employees_sect').val(row.sects);
                    // select sect that option equal row.sects
                    $('#employees_sect option').filter(function() {
                        return ($(this).text() == row.sects);
                    }).prop('selected', true);

                    // select cars that option equal row.cars
                    $('#cars_id option').filter(function() {
                        return ($(this).text() == row.cars);
                    }).prop('selected', true);
                    $('#id').val(row.id);


                    $('#EmployeeForm').modal('show');
                    // hide insert_employee
                    $('#insert_employee').addClass('d-none');
                    // show update_employee
                    $('#update_employee').removeClass('d-none');
                });


                $('#insert_employee').on("click", function() {

                    // insert_form validate
                    if (!$('#insert_form').valid()) {
                        // swal
                        Swal.fire({
                            icon: 'error',
                            title: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        return;
                    }

                    let employees_id = document.getElementById('employees_id').value;
                    let employees_name = document.getElementById('employees_name').value;
                    let employees_sect = document.getElementById('employees_sect').value;

                    let cars_id = document.getElementById('cars_id').value;
                    let data = {
                        employees_id: employees_id,
                        employees_name: employees_name,
                        employees_sect: employees_sect,
                        cars_id: cars_id,
                    };
                    console.log(data)

                    $.ajax(host + 'Employees/insert_employee', {
                        data: data,
                        contentType: "contentType/json",
                        success: function(response) {
                            console.log(response)
                            if (response.response_code == 200) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'เพิ่มพนักงานสำเร็จ',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                // clode modal
                                $('#EmployeeForm').modal('hide');
                                tb_employees.ajax.reload();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: response?.response_msg,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        },
                        error: function(err) {
                            console.log(err)
                        }
                    });
                });

                $('#update_employee').on("click", function() {
                    let employees_id = document.getElementById('employees_id').value;
                    let employees_name = document.getElementById('employees_name').value;
                    let employees_sect = document.getElementById('employees_sect').value;
                    let cars_id = document.getElementById('cars_id').value;
                    let id = document.getElementById('id').value;
                    let data = {
                        employees_id: employees_id,
                        employees_name: employees_name,
                        employees_sect: employees_sect,
                        cars_id: cars_id,
                        id: id,
                    };

                    $.ajax(host + 'Employees/update_employee', {
                        data: data,
                        contentType: "contentType/json",
                        success: function(response) {
                            console.log(response)
                            if (response.response_code == 200) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'แก้ไขพนักงานสำเร็จ',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                // clode modal
                                $('#EmployeeForm').modal('hide');
                                tb_employees.ajax.reload();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: response?.response_msg,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                            // reset form
                            $('#insert_form').trigger("reset");
                            
                        },
                        error: function(err) {
                            console.log(err)
                        }

                    });

                })

                // insert_modal_employee click
                $('#insert_modal_employee').on("click", function() {
                    // insert_form validate
                    //    if some input is emptu
                    
                    $('#EmployeeForm').modal('show');
                    // hide update_employee
                    $('#update_employee').addClass('d-none');
                    // show insert_employee
                    $('#insert_employee').removeClass('d-none');
                });



                async function main() {
                    await getSect();
                    await getCars();
                }
                main();

                setInterval(function() {
                    tb_employees.ajax.reload();
                }, 60000);
            </script>
</body>

</html>