<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:description" content="อนุมัติ OT Online">
	<meta property="og:title" content="อนุมัติ OT Online">
	<title>ขออนุมัติปฏิบัติงานล่วงเวลา สำหรับ Import HRM</title>

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
								<hr>
								<div class="row mt-3">
									<div class="col text-center">
										<!-- tb_request -->
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center" id="tb_request">
												<thead>
													<tr>

														<th class="text-center">
															<div class="form-outline">
																<input type="text" id="emp_id" class="form-control" />
																<label class="form-label" for="emp_id">รหัสพนักงาน</label>
															</div>
														</th>
														<th class="text-center">
															<input type="text" name="DateOT" id="DateOT" size="30" class="form-control" placeholder="ระบุวันที่ทำ OT">
														</th>
														<th class="text-center">
															<input type="text" name="DateOT_2" id="DateOT_2" size="30" class="form-control" placeholder="ระบุวันที่ทำ OT">
														</th>
														<th class="text-center">เวลาทำ OT</th>
														<th class="text-center">เวลาทำ OT</th>

														<th class="text-center">CompanyCode</th>
														<th class="text-center">Date Type[1, 2, 3]</th>
														<th class="text-center">ApproveFlag[1, 2, 3]</th>

														<th class="text-center">
															<input type="text" name="DateOTRequest" id="DateOTRequest" size="30" class="form-control" placeholder="วันที่ส่งคำร้อง">
														</th>

														<th class="text-center">
															<select name="ApprovedStatus" id="ApprovedStatus" class="form-select" readonly>
																<option value="">ทั้งหมด</option>
																<option value="รออนุมัติ">รออนุมัติ</option>
																<option value="อนุมัติแล้ว">อนุมัติแล้ว</option>
																<option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
															</select>
														</th>
													</tr>
													<tr>

														<th class="text-center">EmpCode</th>
														<th class="text-center">dd/mm/yy</th>
														<th class="text-center">dd/mm/yy</th>
														<th class="text-center">hh:mm</th>
														<th class="text-center">hh:mm</th>
														<th class="text-center">CompanyCode</th>
														<th class="text-center">Date Type[1, 2, 3]</th>
														<th class="text-center">ApproveFlag[1, 2, 3]</th>
														<th class="text-center">วันที่ส่งคำร้อง</th>
														<th class="text-center">สถานะ</th>
													</tr>
												</thead>
												<tbody id="tb_request_body">

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<?php include_once(APPPATH . 'views/js.php'); ?>
			<!-- MDB -->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
			<script>
				// const myModalInfo = new mdb.Modal(document.getElementById('myModalInfo'))

				var currentDate = new Date();
				let day = ((currentDate.getDate())).toString().padStart(2, '0')
				let month = ((currentDate.getMonth()) + 1).toString().padStart(2, '0');
				let year = currentDate.getFullYear() % 100;
				$("#DateOT").datepicker({
					format: 'dd/mm/yy',
					todayHighlight: true,
					inline: true,
					setDate: currentDate,
					autoclose: true
				});
				$("#DateOT_2").datepicker({
					format: 'dd/mm/yy',
					todayHighlight: true,
					inline: true,
					setDate: currentDate,
					autoclose: true
				});
				$("#DateOTRequest").datepicker({
					format: 'yyyy-mm-dd',

					todayHighlight: true,
					inline: false,
					setDate: currentDate,
					autoclose: true
				});

				// เซ็ต DataTable
				var tb_request = $('#tb_request').DataTable({
					processing: true,
					order: [
						[8, 'desc']
					],
					dom: 'Bfrtip',
					buttons: [{
						extend: 'excel',
						title: null,
						text: 'Export to Excel',
						customize: function(xlsx) {
							// Remove the first sheet (header row)
							var sheet = xlsx.xl.worksheets['sheet1.xml'];
							var data = $('row', sheet);

							// Remove the header row (first row)
							$(data[0]).remove();
							// remove column index 8 and 9
							$('row c ', sheet).each(function() {
								if ($(this).index() == 8 || $(this).index() == 9) {
									$(this).remove();
								}
							});
						}
					}],
					ajax: {
						'url': host + 'OTRequest/GetOTRequestAllGroup',
						'type': 'GET',
					},
					columns: [{
							data: '',
							render: function(data, type, row) {
								return `${row.employee_id}`;
							},
						},
						{
							data: '',
							render: function(data, type, row) {
								// row.ot_date change format 2023-09-20 to 20/09/23
								let date = row.ot_date.split('-');
								let new_date = `${date[2]}/${date[1]}/${date[0].substring(2, 4)}`;

								return `${new_date}`;
							},
						},
						{
							data: '',
							render: function(data, type, row) {


								// row.ot_date change format 2023-09-20 to 20/09/23
								let date = row.ot_date_end.split('-');
								let new_date = `${date[2]}/${date[1]}/${date[0].substring(2, 4)}`;

								return `${new_date}`;

							},
						},

						{
							data: null,
							render: function(data, type, row) {
								var startOTTime = row.ot_starttime;
								// 02:31:00 => get only 5 digit like 02:31
								var startOTTime = startOTTime.substring(0, 5);
								return `${startOTTime}`;
							},
						},
						{
							data: null,
							render: function(data, type, row) {
								var endOTTime = row.ot_endtime;
								// 02:31:00 => get only 5 digit like 02:31
								var endOTTime = endOTTime.substring(0, 5);
								return `${endOTTime}`;
							},
						},
						{
							data: null,
							render: function(data, type, row) {
								return `1`;
							},
						},
						{
							data: null,
							render: function(data, type, row) {
								return `2`;
							},
						},
						{
							data: null,
							render: function(data, type, row) {
								return `3`;
							},
						},
						{
							data: "createdate",
						},
						{
							data: null,
							render: function(data, type, row) {
								if (row.approved_status == 0) {
									return `<span class="badge bg-warning  text-uppercase">รออนุมัติ</span>`;
								} else if (row.approved_status == 1) {
									return `<span class="badge bg-success  text-uppercase">อนุมัติแล้ว โดย ${row.username}</span>`;
								} else if (row.approved_status == 2) {
									return `<span class="badge bg-danger text-uppercase">ไม่อนุมัติ โดย ${row.username}</span>`;
								}

							},
						},
						// {
						// 	targets: -1,
						// 	data: null,
						// 	defaultContent: `<button class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>`,
						// }
					],
				});

				// ปุ่มดูข้อมูล
				$('#tb_info tbody').on('click', 'button.btn-info', function() {
					var row = tb_request.row($(this).parents('tr')).data();
					console.log('View', row)
					let data = {
						"request_key": row.request_key
					}
					
					$.ajax(host + 'OTRequest/GetOTRequestWaitGroupByKey', {
						data: data,
						contentType: "contentType/json",
						success: function(response) {
							let html = '';

							response.data.forEach(element => {
								console.log(element)
								html += `<tr>
						<td>${element.employees_name}</td>
						<td>${element.cars_text}</td>
						<td>${element.createdate}</td>
						<td><button class="btn btn-success" onclick="ApprovedByID(${element.id})"><i class="fa-solid fa-circle-check"></i></button>
						<button class="btn btn-danger" onclick="RejectByID(${element.id})"><i class="fa-solid fa-circle-xmark"></i></button></td>
						</tr>`
							});
							$('#tb_info_body').html(html)
							$('#request_key').val(row.request_key)
							myModalInfo.show()
						},
						error: function(res) {
							console.log("error", res)
						},
						complete: function(res) {
							console.log("complete", res)
						}
					});

				});


				// search emp_name
				$('#emp_id').on('keyup', function() {
					tb_request
						.columns(0)
						.search(this.value)
						.draw();
				});


				// search DateOTRequest
				$('#DateOTRequest').on('change', function() {
					tb_request
						.columns(8)
						.search(this.value)
						.draw();
				});

				// search ApprovedStatus
				$('#ApprovedStatus').on('change', function() {
					tb_request
						.columns(9)
						.search(this.value)
						.draw();
				});

				function getRoles() {
					let roles = {};
					// ajax post request
					$.ajax({
						url: "<?php echo base_url(); ?>Roles/getRoles",
						type: "POST",
						dataType: "json",
						success: function(response) {
							// console.log(response)
							roles = response;
							var list = document.getElementById('Roles');
							for (const [key, value] of Object.entries(response)) {
								// console.log(value)
								var option = document.createElement("option");
								option.value = `${value.roles}`;
								option.text = `${value.roles}`;
								list.appendChild(option);
							}
						},
					});
					return roles;
				}

				function getCars() {
					let roles = {};
					// ajax post request
					$.ajax({
						url: "<?php echo base_url(); ?>Cars/getCars",
						type: "POST",
						dataType: "json",
						success: function(response) {
							// console.log(response)
							roles = response;
							var list = document.getElementById('Cars');
							for (const [key, value] of Object.entries(response)) {
								// console.log(value)
								var option = document.createElement("option");
								option.value = `${value.cars}`;
								option.text = `${value.cars}`;
								list.appendChild(option);
							}
						},
					});
					return roles;
				}

				async function main() {
					await getRoles();
					await getCars();
				}
				main();

				setInterval(function() {
					// tb_request.ajax.reload();

				}, 60000);
			</script>
</body>

</html>