<section class="section">
	<div class="section-header"><a href="/">
			<h1>Kelas</h1>
		</a></div>
	<div class="section-body">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4>Table Kelas</h4>
						<div class="card-header-action"><button class="btn btn-primary" onclick="add()">Tambah Data</button></div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="myTable" class="table" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Paket</th>
										<th scope="col">Kelas</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody class="table-content">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Modal Kelas</h3>
			</div>
			<div class="modal-body">
				<form action="#" id="form">
					<div class="form-group">
						<label for="">Kelas</label>
						<input type="text" class="form-control" id="name" name="name">
						<span class="help-block text-danger text-capitalize"></span>
					</div>
					<div class="form-group">
						<label for="">Paket</label>
						<select name="package_id" id="package_id" class="form-control">

						</select>
						<span class="help-block text-danger text-capitalize"></span>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="btn_save" onclick="save()" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	var save_method;
	var table;
	var url_id;
	$(document).ready(function() {

		//datatables
		table = $('#myTable').DataTable({

			"pageLength": 20,
			"processing": true,
			"serverSide": true,
			"order": [],

			"ajax": {
				"url": "<?php echo site_url('FeatureController/get_data_user') ?>",
				"type": "POST",
			},


			"columnDefs": [{
				"targets": [0],
				"orderable": false,
			}, ],


		});

		packageDropdown();


		$("input").change(function() {
			$(this).parent().parent().removeClass('has-error');
			$(this).next().empty();
		});
		$("textarea").change(function() {
			$(this).parent().parent().removeClass('has-error');
			$(this).next().empty();
		});
		$("select").change(function() {
			$(this).parent().parent().removeClass('has-error');
			$(this).next().empty();
		});

	});




	function packageDropdown() {
		$.ajax({
			url: "<?= base_url('FeatureController/get_data_package'); ?>",
			type: 'GET',
			dataType: 'JSON',
			success: function(data) {
				let html = '';
				data.forEach(function(item) {
					html += `
				<option value="${item.id}">${item.name}</option>
				`

				});
				$('#package_id').html(html);
			}
		});
	}

	function reload_table() {
		table.ajax.reload(null, false); //reload datatable ajax
	};


	function updateList(id) {
		save_method = 'update';
		url_id = id;
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		$.ajax({
			url: "<?= base_url('FeatureController/get_id/'); ?>" + id,
			type: 'GET',
			dataType: 'JSON',
			success: function(data) {
				$('[name="name"]').val(data.name);
				$('[name="price"]').val(data.price);
				$('[name="description"]').val(data.description);
				$('[name="duration"]').val(data.duration);
				$('[name="level"]').val(data.level);
				$('#modalForm').modal('show');
				$('.modal-title').text('Update Data');
				reload_table();
			}
		});
	}


	function add() {
		save_method = 'add';
		$('[name="id"]').prop("disabled", false);
		$('#form')[0].reset();
		$('.form-group').removeClass('has-error');
		$('.help-block').empty();
		$('#modalForm').modal('show');
		$('.modal-title').text('Tambah Data');
	}


	function save() {
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled', true);
		var url;

		if (save_method == 'add') {
			url = "<?php echo site_url('FeatureController/add'); ?>";
		} else {
			url = "<?php echo site_url('FeatureController/update/'); ?>" + url_id;
		}
		// ajax adding data to database
		$.ajax({
			url: url,
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function(data) {
				if (data.status) //if success close modal and reload ajax table
				{
					$('#modalForm').modal('hide');
					reload_table();
				} else {
					for (var i = 0; i < data.inputerror.length; i++) {
						$('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}

				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable


			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Error adding / update data');
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable

			}
		});
	}

	function deleteList(id) {
		swal({
			title: 'Konfirmasi',
			text: 'Apakah anda yakin akan menghapus data ini?',
			icon: 'warning',
			buttons: ['Batal', "OK"],
			dangerMode: true,
		}).then((result) => {
			if (result) {
				$.ajax({
					url: "<?= base_url('FeatureController/delete/'); ?>" + id,
					type: "POST",
					dataType: "JSON",
					success: function(data) {
						reload_table();
					}

				});
			} else {
				swal({
					title: 'Dibatalkan',
					icon: 'success',
					type: 'success'
				})
			}
		});


	}
</script>