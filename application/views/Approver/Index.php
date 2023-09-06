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
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
				preserveAspectRatio="none">
				<path
					d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
					opacity=".25" class="shape-fill"></path>
				<path
					d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
					opacity=".5" class="shape-fill"></path>
				<path
					d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
					class="shape-fill"></path>
			</svg>
		</div>
		<div class="content">
			<div class="container ">
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
													คุณ <?php echo $_SESSION['username'] ?>
													<a href="<?php echo base_url() ?>Logout">
														<button class="btn btn-danger ms-3">ออกจากระบบ</button>
													</a>

												</div>
											</b>
										</h3>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col ">
										<div class="bg-warning bg-opacity-50 rounded-2 p-3 text-dark">
											รายการรออนุมัติ
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center"
												id="tb_wait_approved">
												<thead>
													<tr>
														<th class="text-center">หน้าที่รับผิดชอบ</th>
														<th class="text-center">วันที่ทำ OT</th>
														<th class="text-center">เวลาทำ OT</th>
														<th class="text-center">รายละเอียด</th>
														<th class="text-center">MachineName</th>
														<th class="text-center">เวลาบันทึก</th>
														<th class="text-center">#</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card mt-3">
							<div class="card-body">

								<div class="row">
									<div class="col ">
										<div class="bg-success bg-opacity-50 rounded-2 p-3 text-dark">
											รายการอนุมัติแล้ว
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center"
												id="tb_approved">
												<thead>
													<tr>
														<th class="text-center">หน้าที่รับผิดชอบ</th>
														<th class="text-center">วันที่ทำ OT</th>
														<th class="text-center">เวลาทำ OT</th>
														<th class="text-center">รายละเอียด</th>
														<th class="text-center">MachineName</th>
														<th class="text-center">เวลาบันทึก</th>
														<th class="text-center">#</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card mt-3">
							<div class="card-body">

								<div class="row">
									<div class="col ">
										<div class="bg-danger bg-opacity-50 rounded-2 p-3 text-dark">
											รายการไม่อนุมัติ
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center"
												id="tb_rejected">
												<thead>
													<tr>
														<th class="text-center">หน้าที่รับผิดชอบ</th>
														<th class="text-center">วันที่ทำ OT</th>
														<th class="text-center">เวลาทำ OT</th>
														<th class="text-center">รายละเอียด</th>
														<th class="text-center">MachineName</th>
														<th class="text-center">เวลาบันทึก</th>
														<th class="text-center">#</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="myModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalInfo"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col text-center">
										<button class="btn btn-success"
											onclick="ApprovedAllKey()">อนุมัติทั้งหมด</button>
										<button class="btn btn-danger"
											onclick="RejectdAllKey()">ไม่อนุมัติทั้งหมด</button>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<input type="text" id="request_key" hidden>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col text-center">
										<!-- table info -->
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center" id="tb_info">
												<thead>
													<tr>
														<th class="text-center">ชื่อ</th>
														<th class="text-center">สายรถ</th>
														<th class="text-center">เวลาบันทึก</th>
														<th class="text-center">#</th>
													</tr>
												</thead>
												<tbody id="tb_info_body"></tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="myModalApproved" tabindex="-1" role="dialog"
					aria-labelledby="myModalApproved" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row mt-3">
									<div class="col text-center">
										<!-- table info -->
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center"
												id="tb_approved">
												<thead>
													<tr>
														<th class="text-center">ชื่อ</th>
														<th class="text-center">สายรถ</th>
														<th class="text-center">เวลาบันทึก</th>

													</tr>
												</thead>
												<tbody id="tb_approved_body"></tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="myModalRejected" tabindex="-1" role="dialog"
					aria-labelledby="myModalRejected" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row mt-3">
									<div class="col text-center">
										<!-- table info -->
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center"
												id="tb_rejected">
												<thead>
													<tr>
														<th class="text-center">ชื่อ</th>
														<th class="text-center">สายรถ</th>
														<th class="text-center">เวลาบันทึก</th>

													</tr>
												</thead>
												<tbody id="tb_rejected_body"></tbody>
											</table>
										</div>
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
		<script type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
		<script>
			const myModalInfo = new mdb.Modal(document.getElementById('myModalInfo'))
			const myModalApproved = new mdb.Modal(document.getElementById('myModalApproved'))
			const myModalRejected = new mdb.Modal(document.getElementById('myModalRejected'))
			// เซ็ต DataTable
			var table_wait_approved = $('#tb_wait_approved').DataTable({
				processing: true,
				ajax: {
					'url': host + 'OTRequest/GetOTRequestWaitGroup',
					'type': 'GET',
				},
				columns: [{
					data: 'roles'
				},
				{
					data: null,
					render: function (data, type, row) {
						return `${row.ot_date}`;
						
					},
				},
				{
					data: null,
					render: function (data, type, row) {
						return `${row.ot_starttime} - ${row.ot_endtime}`;
					
					},
				},
				{
					data: "work_detail",
				},
				{
					data: "machine_name",
				},
				{
					data: "createdate",
				},
				{
					targets: -1,
					data: null,
					defaultContent: `<button class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>`,
				}],
			});
			var table_approved = $('#tb_approved').DataTable({
				processing: true,

				ajax: {
					'url': host + 'OTRequest/GetOTRequestApprovedGroup',
					'type': 'GET',
				},
				columns: [{
					data: 'roles'
				},
				{
					data: null,
					render: function (data, type, row) {
						return `${row.ot_date}`;
	
					},
				},
				{
					data: null,
					render: function (data, type, row) {
						return `${row.ot_starttime} - ${row.ot_endtime}`;
						
					},
				},
				{
					data: "work_detail",
				},
				{
					data: "machine_name",
				},
				{
					data: "createdate",
				},
				{
					targets: -1,
					data: null,
					defaultContent: `<button class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>`,
				}],
			});
			var table_rejected = $('#tb_rejected').DataTable({
				processing: true,

				ajax: {
					'url': host + 'OTRequest/GetOTRequestRejectedGroup',
					'type': 'GET',
				},
				columns: [{
					data: 'roles'
				},
				{
					data: null,
					render: function (data, type, row) {
						return `${row.ot_date}`;
				
					},
				},
				{
					data: null,
					render: function (data, type, row) {
						return `${row.ot_starttime} - ${row.ot_endtime}`;
						
					},
				},
				{
					data: "work_detail",
				},
				{
					data: "machine_name",
				},
				{
					data: "createdate",
				},
				{
					targets: -1,
					data: null,
					defaultContent: `<button class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>`,
				}],
			});
			// ปุ่มดูข้อมูล
			$('#tb_wait_approved tbody').on('click', 'button.btn-info', function () {
				var row = table_wait_approved.row($(this).parents('tr')).data();
				console.log('View', row)
				let data = {
					"request_key": row.request_key
				}
				console.log(data)
				$.ajax(host + 'OTRequest/GetOTRequestWaitGroupByKey', {
					data: data,
					contentType: "contentType/json",
					success: function (response) {
						// console.log(response)
						// 	[{
						//         "id": "23",
						//         "request_key": "dd407a0c-49c9-11ee-95af-18c04df8b83d",
						//         "employee_id": "570088",
						//         "employees_name": "นายเอกชัย ปินะกาพัง",
						//         "roles": "Repair/BM",
						//         "ot_starttime": "02:31:00",
						//         "ot_endtime": "02:32:00",
						//         "ot_date": "2023-09-20",
						//         "cars_text": "สะพานสี่ 1",
						//         "work_detail": "wdw",
						//         "machine_name": "dwdwd",
						//         "createdate": "2023-09-03 02:49:44",
						//         "sects": "MC"
						//     }
						//    ]
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
					error: function (res) {
						console.log("error", res)
					},
					complete: function (res) {
						console.log("complete", res)
					}
				});

			});
			$('#tb_approved tbody').on('click', 'button.btn-info', function () {
				var row = table_approved.row($(this).parents('tr')).data();
				console.log('View', row)
				let data = {
					"request_key": row.request_key
				}
				console.log(data)
				$.ajax(host + 'OTRequest/GetOTRequestApprovedGroupByKey', {
					data: data,
					contentType: "contentType/json",
					success: function (response) {
						console.log(response)
						let html = '';

						response.data.forEach(element => {
							console.log(element)
							html += `<tr>
						<td>${element.employees_name}</td>
						<td>${element.cars_text}</td>
						<td>${element.createdate}</td>
					
						</tr>`
						});
						$('#tb_approved_body').html(html)
						$('#request_key').val(row.request_key)
						myModalApproved.show()
					},
					error: function (res) {
						console.log("error", res)
					},
					complete: function (res) {
						console.log("complete", res)
					}
				});
			});
			$('#tb_rejected tbody').on('click', 'button.btn-info', function () {
				var row = table_rejected.row($(this).parents('tr')).data();
				console.log('View', row)
				let data = {
					"request_key": row.request_key
				}
				console.log(data)
				$.ajax(host + 'OTRequest/GetOTRequestRejectedGroupByKey', {
					data: data,
					contentType: "contentType/json",
					success: function (response) {
						console.log(response)
						let html = '';

						response.data.forEach(element => {
							console.log(element)
							html += `<tr>
						<td>${element.employees_name}</td>
						<td>${element.cars_text}</td>
						<td>${element.createdate}</td>
				
						</tr>`
						});
						$('#tb_rejected_body').html(html)
						$('#request_key').val(row.request_key)
						myModalRejected.show()
					},
					error: function (res) {
						console.log("error", res)
					},
					complete: function (res) {
						console.log("complete", res)
					}
				});
			});

			// ปุ่มลบข้อมูล
			$('#tb_wait_approved tbody ').on('click', 'button.btn-danger', function () {
				var row = table_wait_approved.row($(this).parents('tr')).data();
				Swal.fire({
					title: `ต้องการลบข้อมูล?`,
					icon: 'warning',
					html: `เลขบัตรประชาชน : ${row.MemberID}<br>
				ชื่อ : ${row.Fname} ${row.Lname}<br>
				`,
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'ยืนยัน',
					cancelButtonColor: '#d33',
					cancelButtonText: 'ยกเลิก',
				}).then((result) => {
					if (result.isConfirmed) {
						let data = {
							"id": row.id
						}
						$.ajax(host + 'api/_Member/delete_member', {
							data: data,
							headers: {
								"token": token
							},
							contentType: "contentType/json",
							timeout: 3000,
							success: function (response) {
								if (response.result == "success") {
									table_wait_approved.ajax.reload();
									table_approved.ajax.reload();
									table_rejected.ajax.reload();

								}
							},
							error: function (res) {
								console.log("error", res)
							},
							complete: function (res) {
								console.log("complete", res)
							}
						});
					}
				})
			});
			// ApprovedByID
			function ApprovedByID(id) {
				// swal confirm
				Swal.fire({
					title: `ต้องการอนุมัติ?`,
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'ยืนยัน',
					cancelButtonColor: '#d33',
					cancelButtonText: 'ยกเลิก',
				}).then((result) => {
					if (result.isConfirmed) {
						let data = {
							"id": id
						}
						$.ajax(host + 'OTRequest/ApprovedByID', {
							data: data,
							contentType: "contentType/json",
							success: function (response) {
								console.log(response)
								if (response.result == "success") {
									// remove row id =id
									$(`#tb_info_body tr td button.btn-success`).each(function () {
										if ($(this).attr('onclick') == `ApprovedByID(${id})`) {
											$(this).parents('tr').remove()
										}
									})
									// if empty body table close modal
									if ($('#tb_info_body tr').length == 0) {
										myModalInfo.hide()
									}

									// table reload
									table_wait_approved.ajax.reload();
									table_approved.ajax.reload();
									table_rejected.ajax.reload();

								}
							},
							error: function (res) {
								console.log("error", res)
							},
							complete: function (res) {
								console.log("complete", res)
							}
						});
					}
				})
			}
			// RejectByID
			function RejectByID(id) {
				// swal confirm
				Swal.fire({
					title: `ต้องการไม่อนุมัติ?`,
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'ยืนยัน',
					cancelButtonColor: '#d33',
					cancelButtonText: 'ยกเลิก',
				}).then((result) => {
					if (result.isConfirmed) {
						let data = {
							"id": id
						}
						$.ajax(host + 'OTRequest/RejectByID', {
							data: data,
							contentType: "contentType/json",
							success: function (response) {
								console.log(response)
								if (response.result == "success") {
									// remove row id =id
									$(`#tb_info_body tr td button.btn-danger`).each(function () {
										if ($(this).attr('onclick') == `RejectByID(${id})`) {
											$(this).parents('tr').remove()
										}
									})
									// if empty body table close modal
									if ($('#tb_info_body tr').length == 0) {
										myModalInfo.hide()
									}

									// table reload
									table_wait_approved.ajax.reload();
									table_approved.ajax.reload();
									table_rejected.ajax.reload();

								}
							},
							error: function (res) {
								console.log("error", res)
							},
							complete: function (res) {
								console.log("complete", res)
							}
						});
					}
				})
			}

			function ApprovedAllKey() {
				// swal confirm
				Swal.fire({
					title: `ต้องการอนุมัติทั้งหมด?`,
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'ยืนยัน',
					cancelButtonColor: '#d33',
					cancelButtonText: 'ยกเลิก',
				}).then((result) => {
					if (result.isConfirmed) {
						let data = {
							"request_key": $('#request_key').val()
						}
						$.ajax(host + 'OTRequest/ApprovedAllKey', {
							data: data,
							contentType: "contentType/json",
							success: function (response) {
								console.log(response)
								if (response.result == "success") {
									// remove row id =id
									$(`#tb_info_body tr`).each(function () {
										$(this).remove()
									})
									// if empty body table close modal
									if ($('#tb_info_body tr').length == 0) {
										myModalInfo.hide()
									}

									// table reload
									table_wait_approved.ajax.reload();
									table_approved.ajax.reload();
									table_rejected.ajax.reload();

								}
							},
							error: function (res) {
								console.log("error", res)
							},
							complete: function (res) {
								console.log("complete", res)
							}
						});
					}
				})
			}

			function RejectdAllKey() {
				// swal confirm
				Swal.fire({
					title: `ต้องการไม่อนุมัติทั้งหมด?`,
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'ยืนยัน',
					cancelButtonColor: '#d33',
					cancelButtonText: 'ยกเลิก',
				}).then((result) => {
					if (result.isConfirmed) {
						let data = {
							"request_key": $('#request_key').val()
						}
						$.ajax(host + 'OTRequest/RejectdAllKey', {
							data: data,
							contentType: "contentType/json",
							success: function (response) {
								console.log(response)
								if (response.result == "success") {
									// remove row id =id
									$(`#tb_info_body tr`).each(function () {
										$(this).remove()
									})
									// if empty body table close modal
									if ($('#tb_info_body tr').length == 0) {
										myModalInfo.hide()
									}

									// table reload
									table_wait_approved.ajax.reload();
									table_approved.ajax.reload();
									table_rejected.ajax.reload();

								}
							},
							error: function (res) {
								console.log("error", res)
							},
							complete: function (res) {
								console.log("complete", res)
							}
						});
					}
				})
			}

			setInterval(function () {
				table_wait_approved.ajax.reload();
				table_approved.ajax.reload();
				table_rejected.ajax.reload();
			}, 60000);
		</script>
</body>

</html>
