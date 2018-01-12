@extends('user.layouts.master')

@section('css')
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />

	<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

	<!-- Head Libs -->
	<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>
@endsection

@section('title', 'Item Suppliers')

@section('content')
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Suppliers Record</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Shop</span></li>
					<li><span>Suppliers</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->
		<section class="panel panel-featured panel-featured-dark">
			<header class="panel-heading">
				<div class="panel-title pull-right">
					<button id="addSupplier" type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#supplierModal">
						<i class="fa fa-plus"></i>
						Supplier
					</button>
					{{-- <button id="addCategory" type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modalBootstrap">
						<i class="fa fa-plus"></i>
						Category
					</button> --}}
				</div>
		
				<h2 class="panel-title">Suppliers</h2>
				<p class="panel-subtitle">List of all recorded suppliers</p>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Company</th>
							<th>Phone No.</th>
							<th>Contacts Person</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>S.No</th>
							<th>Company</th>
							<th>Phone No.</th>
							<th>Contacts Person</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($suppliers as $supplier)
						<tr class="">
							<td>{{$loop->index + 1}}</td>
							<td>{{$supplier->companyName}}</td>
							<td>{{$supplier->phonenumber}}</td>
							<td>{{$supplier->contactsPerson}}</td>
							<td>
								<button type="button" class="editSupplier btn btn-xs btn-warning" data-toggle="modal" data-target="#supplierModal" data-id="{{$supplier->id}}" data-name="{{$supplier->companyName}}">
									<i class="fa fa-edit"></i>
									{{-- <input type="hidden" name="id" id="supplierID" value="{{$supplier->id}}"> --}}
								</button>
								<button type="button" class="supplierDelete btn btn-xs btn-danger" data-toggle="modal" data-target="#supplierModal" data-id="{{$supplier->id}}" data-name="{{$supplier->companyName}}">
									<i class="fa fa-trash"></i>
									<input type="hidden" name="id" id="supplierID" value="{{$supplier->id}}">
								</button>
								<button id="supplierDetail" type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#supplierModal" data-id="{{$supplier->id}}" data-name="{{$supplier->companyName}}"s>
									<i class="fa fa-eye"></i>
								</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
		<!-- end: page -->

		<div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="supplierModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-primary">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="supplierModalLabel">Are you sure?</h4>
					</div>
					<div class="modal-body" style="padding:30px 30px;">
						<form id="supplier-form" class="form-horizontal mb-lg" enctype="multipart/form-data">
						{{csrf_field()}}
							<input type="hidden" id="id">
							<fieldset>
								<div class="form-group mt-lg">
									<label for="companyName" class="col-sm-3 control-label">Company Name</label>
									<div class="col-sm-9">
										<input type="text" name="companyName" id="companyName" class="form-control" placeholder="Enter the company name..."/>
									</div>
								</div>
								<div class="form-group">
									<label for="contactsPerson" class="col-sm-3 control-label">Contacts Person</label>
									<div class="col-sm-9">
										<input type="text" name="contactsPerson" id="contactsPerson" class="form-control" placeholder="Enter contacts-person's name..."/>
									</div>
								</div>
								<div class="form-group">
									<label for="phonenumber" class="col-sm-3 control-label">Phone No.</label>
									<div class="col-sm-9">
										<input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="Enter company's phonenumber..."/>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-9">
										<input type="email" name="email" id="email" class="form-control" placeholder="Enter company's email...">
									</div>
								</div>
								<div class="form-group">
									<label for="address" class="col-sm-3 control-label">Address</label>
									<div class="col-sm-9">
										<textarea class="form-control" name="address" id="address" placeholder="Enter company's address..." rows="3"></textarea>
									</div>
								</div>
							</fieldset>
						</form>

						{{-- Delete Prompt --}}
						<div id="supplierPrompt" class="text-center hidden">
							<i class="fa fa-times-circle fa-5x" style="color: #d2322d;"></i>
							<p id="message" style="font-size: 20px">Are you sure you want to delete: <h5 id="supplierName" style="color: red; font-size: 20px"></h5>?</p>
						</div>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-md-12 text-right">
								<button id="saveSupplier" class="btn btn-success" data-dismiss="modal">Add Supplier</button>
								<button id="updateSupplier" class="btn btn-warning" data-dismiss="modal">Save Changes</button>
								<button id="deleteSupplier" class="btn btn-danger" data-dismiss="modal">Confirm</button>
								<button id="cancel" class="btn btn-default modal-dismiss" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('js')
{{-- Javascript Files --}}
	<!-- Vendor -->
	<script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
	
	<!-- Specific Page Vendor -->
	<script src="{{asset('assets/vendor/select2/select2.js')}}"></script>
	<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="{{asset('assets/javascripts/theme.js')}}"></script>
	
	<!-- Theme Custom -->
	<script src="{{asset('assets/javascripts/theme.custom.js')}}"></script>
	
	<!-- Theme Initialization Files -->
	<script src="{{asset('assets/javascripts/theme.init.js')}}"></script>

	<!-- Examples -->
	<script src="{{asset('assets/javascripts/ui-elements/examples.modals.js')}}"></script>
	<script src="{{asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
	<script src="{{asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
	<script src="{{asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function() {
//------------------------------------------------------------------------------------------
			// Add New Supplier
			$(document).on('click', '#addSupplier', function(event) {
				$('#supplierModalLabel').text('Add New Supplier');
				$('#supplier-form').show('300');
				$('#updateSupplier').hide('300');
				$('#deleteSupplier').hide('300');
				$('#saveSupplier').show('300');
				// disabling read-only on form controls
				$('#supplier-form input[type="number"],input[type="text"],input[type="email"], #supplier-form textarea, #supplier-form select').prop("disabled", false);
				$('#supplier-form').trigger("reset");
				$('#supplierPrompt').addClass('hidden');
			});

			// Save New Supplier
			$('#saveSupplier').click(function(event) {
				var companyName = $('#companyName').val();
				var email = $('#email').val();
				var phonenumber = $('#phonenumber').val();
				var address = $('#address').val();
				var contactsPerson = $('#contactsPerson').val();

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
				$.post('{{route('suppliers.store')}}', {
					'_token': $('input[name=_token]').val(),
					'companyName': companyName,
					'email': email,
					'phonenumber': phonenumber,
					'address': address,
					'contactsPerson': contactsPerson
				},
				function(data) {
					console.log(data);
					$('#supplier-form').trigger("reset");
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
						title: 'cheers!',
						text: 'supplier added successfully',
						type: 'success'
					});
				});
			});
//------------------------------------------------------------------------------------------ 
			// Edit Supplier
			$(document).on('click', '.editSupplier', function(event) {
				$('#supplierModalLabel').text('Edit Supplier');
				$('#supplierPrompt').addClass('hidden');
				$('#supplier-form').show('300');
				$('#updateSupplier').show('300');
				$('#deleteSupplier').hide('300');
				$('#saveSupplier').hide('300');
				// disabling read-only on form controls
				$('#supplier-form input[type="number"],input[type="text"],input[type="email"], #supplier-form textarea, #supplier-form select').prop("disabled", false);

				var id = $(this).data('id');
				var url = '{{route('suppliers.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#companyName').val(data.companyName);
					$('#email').val(data.email);
					$('#phonenumber').val(data.phonenumber);
					$('#address').val(data.address);
					$('#contactsPerson').val(data.contactsPerson);
				});
			});

			// Update Supplier
			$('#updateSupplier').click(function(event) {
				var companyName = $('#companyName').val();
				var email = $('#email').val();
				var phonenumber = $('#phonenumber').val();
				var address = $('#address').val();
				var contactsPerson = $('#contactsPerson').val();

				var id = $('#id').val();
				var url = '{{route('suppliers.update', 'id')}}';
				url = url.replace('id', id);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.post(url, {
					'_token': $('input[name=_token]').val(),
					'companyName': companyName,
					'email': email,
					'phonenumber': phonenumber,
					'address': address,
					'contactsPerson': contactsPerson,
					'_method': 'put' 
				}, function(data) {
					$('#supplier-form').trigger("reset");
					console.log(data);
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
											title: 'cheers!',
											text: 'changes saved successfully',
											type: 'info'
					});
				});
			});
//------------------------------------------------------------------------------------------ 
			// Supplier Delete
			$('.supplierDelete').click(function(event) {
				$('#supplierModalLabel').text('Delete Supplier');
				$('#supplier-form').hide('300');
				$('#saveSupplier').hide('300');
				$('#updateSupplier').hide('300');
				$('#deleteSupplier').show('300');
				$('#supplierPrompt').removeClass('hidden');
				var id = $(this).data('id');
				var name = $(this).data('name');
				$('#supplierID').val(id);
				$('#supplierName').text(name);
				console.log(name);
			});

			// Delete Item
			$('#deleteSupplier').click(function(event) {
				var id = $('#supplierID').val();
				var url = '{{route('suppliers.destroy', 'id')}}';
				url = url.replace('id', id);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.post(url, {
					'id': id,
					'_method': 'delete',
					'_token': $('input[name=_token]').val()
				}, function(data) {
					console.log(data);
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
						title: 'Alert!',
						text: 'supplier deleted successfully...',
						type: 'danger'
					});
				});
			});
//------------------------------------------------------------------------------------------
			// Display Full Supplier Details
			$(document).on('click', '#supplierDetail', function(event) {
				var name = $(this).data('name');
				$('#supplierModalLabel').text('Supplier ('+name+ ') full info');
				$('#supplierPrompt').addClass('hidden');
				$('#supplier-form').show('300');
				$('#updateSupplier').hide('300');
				$('#deleteSupplier').hide('300');
				$('#saveSupplier').hide('300');
				// enabling read-only on form controls
				$('#supplier-form input[type="number"],input[type="text"],input[type="email"], #supplier-form textarea, #supplier-form select').prop("disabled", true);

				var id = $(this).data('id');
				var url = '{{route('suppliers.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#companyName').val(data.companyName);
					$('#email').val(data.email);
					$('#phonenumber').val(data.phonenumber);
					$('#address').val(data.address);
					$('#contactsPerson').val(data.contactsPerson);
				});

				// $.get(url, function(data) {
				// 	console.log(data);
				// 	$('#id').val(data.id);
				// 	$('#productCode').val(data.productCode);
				// 	$('#name').val(data.name);
				// 	$('#description').val(data.description);
				// 	$('#categoryID').val(data.categoryID);
				// 	$('#supplierID').val(data.supplierID);
				// 	$('#brandID').val(data.brandID);
				// 	$('#sizeUnitMeasure').val(data.sizeUnitMeasure);
				// 	$('#size').val(data.size);
				// 	$('#weightUnitMeasure').val(data.weightUnitMeasure);
				// 	$('#weight').val(data.weight);
				// 	$('#color').val(data.color);
				// 	$('#quantity').val(data.quantity);
				// 	$('#reorderLevel').val(data.reorderLevel);
				// 	$('#costPrice').val(data.costPrice);
				// 	$('#sellPrice').val(data.sellPrice);
				// 	$('#status').val(data.status);
				// });
			}); 
		});
	</script>
@endsection
