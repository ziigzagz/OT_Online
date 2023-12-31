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
			<div class="container ">
				<?php include(APPPATH . "views/Nav/BackBar.php"); ?>
				<div class="row mt-3">
					<div class="col">
						<div class="card text-center">
							<div class="card-body p-1">
								<form action id="InsertOTForm">
									<div class="row py-3">
										<div class="col text-center">
											<h1>
												<b class="d-flex justify-content-center mx-auto text-center flex-column">
													<div class="title-blue">
														แบบฟอร์ม
													</div>
													<div class="title-dark-blue">
														ขออนุมัติปฏิบัติงานล่วงเวลา
													</div>
												</b>
											</h1>
										</div>
									</div>
									<div class="row">
										<div class="col">
											บริษัท อาโอยาม่าไทย จำกัด
										</div>
									</div>
									<hr>
									<div class="row mt-3">
										<div class="col-12 col-lg-4 text-start">
											วันที่ทำ OT <span class="text-danger">*</span>
											<input type="text" name="DateOT" id="DateOT" size="30" class="form-control" placeholder="ระบุวันที่ทำ OT" readonly>
										</div>
										<div class="col-12 col-lg-4 text-start">
											Shift <span class="text-danger">*</span>
											<select name="shift" id="shift" class="form-select" onchange="shifthour_select()">
												<option value="">ระบุกะ</option>
												<option value="day">DAY</option>
												<option value="night">NIGHT</option>
											</select>
										</div>
										<div class="col-12 col-lg-4 text-start">
											จำนวนชั่วโมง <span class="text-danger">*</span>
											<select name="hour" id="hour" class="form-select" onchange="shifthour_select()">
												<option value="">ระบุจำนวนชั่วโมง</option>
												<option value="2_45">2.45</option>
												<option value="8">8</option>
												<option value="10_45">10.45</option>
												<option value="other">เลือกแก้ไขเวลาเอง</option>
											</select>
										</div>
									</div>

									<div class="row" id="">
										<div class="col-12 col-lg-4 text-start">
											<div class="row">
												<div class="col-6">
													เริ่ม OT <span class="text-danger">*</span>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<input type="time" id="StartOT" name="StartOT" class="form-control" readonly>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-4 text-start">
											<div class="row">
												<div class="col-6">
													สิ้นสุด OT <span class="text-danger">*</span>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<input type="time" id="EndOT" name="EndOT" class="form-control" readonly>
												</div>
											</div>
										</div>
									</div>

									<div class="row mt-3">

										<div class="col-12 col-lg-6 text-start">
											หน้าที่รับผิดชอบ <span class="text-danger">*</span>
											<select name="Roles" id="Roles" class="form-select">
												<option value>-- ระบุหน้าที่รับผิดชอบ --</option>
											</select>
										</div>
										<div class="col-12 col-lg-6 text-start">
											Sect <span class="text-danger">*</span>
											<select name="Sect" id="Sect" class="form-select" onchange="clearEmplistpanel()">
												<option value>-- เลือก Sect --</option>
											</select>
										</div>
									</div>

									<div class="row mt-3">
										<div class="col-12 col-lg-6">
											รายละเอียดงานที่ปฏิบัติ <span class="text-danger">*</span>
											<textarea name="WorkDetail" id="WorkDetail" cols="30" rows="5" class="form-control"></textarea>
										</div>
										<div class="col-12 col-lg-6">
											Machine Number<span class="text-danger">*</span>
											<textarea name="MachineName" id="MachineName" cols="30" rows="5" class="form-control"></textarea>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12 mx-auto my-auto">
											---- รายชื่อพนักงานที่ขออนุมัติ <span class="text-danger">*</span> ----
										</div>

									</div>

									<div class="row text-start">
										<div class="col">
											<ol class="ol-emp-list" id="ol-emp-list">

											</ol>
										</div>
									</div>
									<hr>
									<div id="Emp-list-panel">
										<div class="row d-flex justify-content-center align-items-center">
											<div class="col-12 col-sm-3  text-start mt-2">

												<div class="ui-widget d-flex">
													<input type="text" name="EmpID" id="EmpID" placeholder="รหัสพนักงาน" class="form-control" onchange="fetchEmp()">
													<button type="button" class="btn btn-danger" onclick="clearEmpID()">x</button>
												</div>

												<!-- <input type="text" name="EmpID" id="EmpID" maxlength="6" minlength="6" class="form-control" onkeyup="fetchEmp()" placeholder="รหัสพนักงาน" readonly> -->
											</div>

											<div class="col-12 col-sm-3 text-start mt-2">
												<select name="CarTravel" id="CarTravel" class="form-select" readonly>
													<option value="13">รถส่วนตัว</option>
												</select>
											</div>
											<div class="col-12 col-sm-3 mt-3">
												<button type="button" class="btn btn-add-emp form-control" onclick="addToOLList()">เพิ่ม</button>
											</div>
											<div class="mt-2"></div>
										</div>
									</div>
									<hr>
									<div class="row mt-3">
										<div class="col text-center">
											<button type="button" class="btn btn-create" onclick="CheckForm()">บันทึก</button>
											<!-- <button type="reset" class="btn btn-clear">ล้างข้อมูล</button> -->
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="myModalSending" tabindex="-1" role="dialog" aria-labelledby="myModalSending" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col text-center">
										<div class="lds-dual-ring mx-auto"></div>
									</div>
								</div>
								<div class="row">
									<div class="col text-center">
										กำลังโหลด
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="myModalSending" tabindex="-1" role="dialog" aria-labelledby="myModalSending" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col text-center">
										<div class="lds-dual-ring mx-auto"></div>
									</div>
								</div>
								<div class="row">
									<div class="col text-center title-dark-blue">
										กำลังส่งข้อมูล
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
	<!-- MDB -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
	<script>
		var SrcData = {}
		var EmpList = {}
		var RolesList = {}
		var DataList = {}
		const myModalSending = new mdb.Modal(document.getElementById('myModalSending'))
		const count = 1;
		const personal_cars_id = 13;
		var GenID = "";
		var currentDate = new Date();
		let day = ((currentDate.getDate())).toString().padStart(2, '0')
		let month = ((currentDate.getMonth()) + 1).toString().padStart(2, '0');
		let year = currentDate.getFullYear() % 100;

		var availableTags = {};

		var atcp = $("#EmpID").autocomplete({
			source: availableTags,
			minLength: 0,
			select: function(event, ui) {
				var emp_id = ui.item.value.split(":")[0];
				if (EmpList[emp_id].cars_id != personal_cars_id) {
					var list = document.getElementById(`CarTravel`);
					var option = document.createElement("option");
					option.value = EmpList[emp_id].cars_id;
					option.text = EmpList[emp_id].cars;
					// check duplicate
					if ($(`#CarTravel option[value=${EmpList[emp_id].cars_id}]`).length == 0)
						list.appendChild(option);
					// select last option
					$(`#CarTravel`).val(EmpList[emp_id].cars_id);
				} else {
					$(`#CarTravel option:not(:first)`).remove();
					$(`#CarTravel`).val(personal_cars_id);
				}

				// log(ui.item ?
				// 	"Selected: " + ui.item.value + ", geonameId: " + ui.item.id :
				// 	"Nothing selected, input was " + this.value);
			}
		});

		$("#DateOT").datepicker({
			format: 'dd/mm/yyyy',
			startDate: "-1d",
			todayHighlight: true,
			inline: false,
			setDate: currentDate,
			// autoclose: true
		});

		const Rules = {
			Roles: {
				required: true,
			},
			StartOT: {
				required: true,
			},
			EndOT: {
				required: true,
			},
			DateOT: {
				required: true,
			},
			CarTravel: {
				required: true,
			},
			WorkDetail: {
				required: true,
			},
			MachineName: {
				required: true,
			},
			Sect: {
				required: true,
			},
			shift: {
				required: true,
			},
			hour: {
				required: true,
			},
		}

		const Messages = {
			Roles: {
				required: "กรุณาระบุบทบาทหน้าที่",
			},
			StartOT: {
				required: "กรุณาระบุเวลาเริ่มทำโอที",
			},
			EndOT: {
				required: "กรุณาระบุเวลาทำโอทีเสร็จ",
				min: "เวลาสิ้นสุด ไม่น้อยกว่าเวลาเริ่ม"
			},
			DateOT: {
				required: "กรุณาระบุวันที่ทำโอที",
			},
			CarTravel: {
				required: "กรุณาระบุการเดินทาง",
			},
			WorkDetail: {
				required: "กรุณาระบุรายละเอียดงาน",
			},
			MachineName: {
				required: "กรุณาระบุ Machine Number",
			},
			Sect: {
				required: "กรุณาระบุ Sect",
			},
			shift: {
				required: "กรุณาระบุกะ",
			},
			hour: {
				required: "กรุณาระบุจำนวนชั่วโมง",
			},
		}

		function shifthour_select() {
			var shift = $(`#shift`).val();
			var hour = $(`#hour`).val();
			if (shift == "day") {
				if (hour == "2_45") {
					$(`#StartOT`).val("17:15");
					$(`#EndOT`).val("20:00");
				} else if (hour == "8") {
					$(`#StartOT`).val("08:00");
					$(`#EndOT`).val("17:00");
				} else if (hour == "10_45") {
					$(`#StartOT`).val("08:00");
					$(`#EndOT`).val("20:00");
				} else if (hour == "other") {
					$(`#StartOT`).val("");
					$(`#EndOT`).val("");
				}
			} else if (shift == "night") {
				if (hour == "2_45") {
					$(`#StartOT`).val("05:15");
					$(`#EndOT`).val("08:00");
				} else if (hour == "8") {
					$(`#StartOT`).val("20:00");
					$(`#EndOT`).val("05:00");
				} else if (hour == "10_45") {
					$(`#StartOT`).val("20:00");
					$(`#EndOT`).val("08:00");
				} else if (hour == "other") {
					$(`#StartOT`).val("");
					$(`#EndOT`).val("");
				}
			}
			if (hour != "other") {
				$(`#StartOT`).attr('readonly', hour != "other");
				$(`#EndOT`).attr('readonly', hour != "other");
			} else {
				$(`#StartOT`).attr('readonly', false);
				$(`#EndOT`).attr('readonly', false);
			}
		}


		function updateEndTime() {
			const startOTInput = document.getElementById('StartOT');
			const endOTInput = document.getElementById('EndOT');
			// Get the value of the start time input
			const startTime = startOTInput.value;
			// Update the minimum value of the end time input
			endOTInput.min = startTime;
		}

		async function CheckForm() {

			$("#InsertOTForm").validate({
				rules: Rules,
				messages: Messages
			});
			if (!$('#InsertOTForm').valid()) {
				// Swal
				return;
			}
			// if DataList empty
			if (Object.keys(DataList).length === 0) {
				Swal.fire({
					icon: 'error',
					title: 'กรอกรหัสพนักงาน',
					showConfirmButton: false,
					timer: 1500
				})
				return;
			}
			GenID = await GenerateID();
			InsertData()
		}

		function InsertData() {
			// console.log(DataList)
			// console.log(GenID)
			// return;
			// ajax post request
			let data = {
				"GenID": GenID,
				"Roles": $(`#Roles`).val(),
				"StartOT": $(`#StartOT`).val(),
				"EndOT": $(`#EndOT`).val(),
				// DateOT format yyyy/mm/dd
				"DateOT": $(`#DateOT`).val().split("/").reverse().join("-"),
				"WorkDetail": $(`#WorkDetail`).val(),
				"MachineName": $(`#MachineName`).val(),
				"Sect": $("#Sect").val(),
				"DataList": DataList,
			}
			console.log(data)
			// disable submit btn
			$(`.btn-create`).attr("disabled", true);
			myModalSending.show();
			$.ajax({
				url: "<?php echo base_url(); ?>OTRequest/CreateOTRequest",
				type: "POST",
				dataType: "json",
				data: data,
				success: function(response) {
					console.log(response)
					if (response.status == "success") {
						// clear form
						$(`#Roles`).val("")
						$(`#StartOT`).val("")
						$(`#EndOT`).val("")
						$(`#DateOT`).val("")
						$(`#WorkDetail`).val("")
						$(`#MachineName`).val("")
						// clear ol list all
						$("#ol-emp-list").empty();
						// remove all option except first option
						$(`#CarTravel option:not(:first)`).remove();
						// clear DataList
						DataList = {}
						// clear EmpList
						EmpList = {}
						// clear RolesList
						RolesList = {}
						// clear sect
						$(`#Sect option:not(:first)`).remove();
						// clear input
						$(`#EmpID`).val("")

						$(`#CarTravel option:not(:first)`).remove();
						// focus input
						$(`#EmpID`).focus()
						// alert
						Swal.fire({
							icon: 'success',
							title: 'บันทึกสำเร็จ',
							showConfirmButton: false,
							timer: 1500
						}).then(() => {

							window.location.reload();
							// reload
						});
						$(`.btn-create`).attr("disabled", false);
						myModalSending.hide();
					} else {
						Swal.fire({
							icon: 'error',
							title: 'บันทึกไม่สำเร็จ',
							showConfirmButton: false,
							timer: 3000
						}).then(() => {
							window.location.reload();
							// reload
						});

					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
		}

		function fetchEmp() {
			var emp_id = $(`#EmpID`).val();
			var emp_sect = $(`#Sect`).val();
			console.log("fetchEmp")

		}

		function GenerateID() {
			// generate id (number and string)
			let id = "";
			let possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			for (let i = 0; i < 15; i++)
				id += possible.charAt(Math.floor(Math.random() * possible.length));
			return id;
		}

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
						option.value = value.id;
						option.text = `${key} : ${value.roles}`;
						list.appendChild(option);
					}
					myModalSending.hide()
				},
			});
			return roles;
		}

		function getEmployees() {
			let employees = {};
			// ajax post request
			$.ajax({
				url: "<?php echo base_url(); ?>Employees/getEmployees",
				type: "POST",
				dataType: "json",
				success: function(response) {
					console.log(response)
					response.forEach(element => {
						if (SrcData.hasOwnProperty(element.sects) == false) {
							SrcData[element.sects] = [element]
							availableTags[element.sects] = [`${element.employees_id}:${element.employees_name}`]
						} else {
							SrcData[element.sects].push(element)
							availableTags[element.sects].push(`${element.employees_id}:${element.employees_name}`)
						}
						EmpList[element.employees_id] = element;
					});
					// add option sect and not duplicate
					var list = document.getElementById('Sect');
					var sect = [];
					response.forEach(element => {
						if (!sect.includes(element.sects)) {
							sect.push(element.sects)
							var option = document.createElement("option");
							option.value = element.sects;
							option.text = element.sects;
							list.appendChild(option);
						}
					});
				},
			});
			return employees;
		}

		function addToOLList() {
			// fetchEmp()
			let template = ``;
			let item = $(`#EmpID`).val().split(":")
			if (item.length == 0) {
				return;
			}
			let emp_id = $(`#EmpID`).val().split(":")[0];
			let emp_name = $(`#EmpID`).val().split(":")[1];
			let car_travel = $(`#CarTravel`).val();
			console.log(car_travel);
			console.log($(`#CarTravel option:selected`).text());
			if (emp_id.trim().length == 6 && emp_name.trim().length > 0 && DataList.hasOwnProperty(emp_id) == false) {
				template += `<li class="my-3" id="li-${emp_id}">
								(${emp_id}) ${emp_name} - ${$(`#CarTravel option:selected`).text()} <br><button type="button" class="btn btn-danger" onclick="removeFromOLList(${emp_id})">ลบ</button>
							</li>`
				DataList[emp_id] = {
					"employees_id": emp_id,
					"employees_name": emp_name,
					"cars_id": car_travel,
					"cars": $(`#CarTravel option:selected`).text(),
				}
				console.log(DataList)
			}
			// }
			$("#ol-emp-list").append(template)
			// // clear input
			$(`#EmpID`).val("")

			$(`#CarTravel option:not(:first)`).remove();
			// focus input
			$(`#EmpID`).focus()
		}

		function removeFromOLList(id) {
			$(`#li-${id}`).remove();
			delete DataList[id];
		}

		function clearEmplistpanel() {
			// clear ol list all
			$("#ol-emp-list").empty();
			DataList = {}
			// if not select sect set readonly Emp-list-panel
			if ($(`#Sect`).val().length == 0) {
				$('#EmpID').attr('readonly', true);
				$('#CarTravel').attr('readonly', true);
			} else {
				$('#EmpID').attr('readonly', false);
				$('#CarTravel').attr('readonly', false);
			}
			$("#EmpID").autocomplete( "option", "source", availableTags[$(`#Sect`).val()] );
		}
		
		function clearEmpID(){
			$(`#EmpID`).val("")
		}

		async function Main() {
			EmpList = await getEmployees();
			RolesList = await getRoles();
		}

		Main();
	</script>
</body>

</html>