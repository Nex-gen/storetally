@extends('user.layouts.master')

@section('css')
	{{-- Javascript Files --}}
	<!-- Vendor -->
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

@section('title', 'Items Category & Brands')

@section('content')
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Item Categories &amp; Brands</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Shop</span></li>
					<li><span>Categories</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		{{-- start: page --}}
		<div class="row">
			{{-- categories table col --}}
			<div class="col-sm-6">

				{{-- Controls Panel --}}
				<section class="panel panel-transparent">
					<div class="panel-body">
						<div class="pull-right">
							<button id="addCat" type="button" class="btn btn-default" data-toggle="modal" data-target="#categoryModal">
								<i class="fa fa-plus"></i>
								Category
							</button>
						</div>
					</div>
				</section>
				{{-- End Controls Panel --}}

				<section class="panel panel-featured panel-featured-dark">
					<header class="panel-heading">
						<h2 class="panel-title">Categories</h2>
						<p class="panel-subtitle">List of all item categories</p>
					</header>
					<div class="panel-body">
						<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
							<thead>
								<tr>
									<th colspan="1">S.No</th>
									<th>Name</th>
									<th>Created By</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Created By</th>
									<th>Actions</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($categories as $category)
								<tr class="">
									<td>{{$loop->index + 1}}</td>
									<td>{{$category->name}}</td>
									<td>{{$category->created_by}}</td>
									{{-- <td>{{$category->created_at}}</td> --}}
									<td>
										<button type="button" class="editCat btn btn-xs btn-warning" data-toggle="modal" data-target="#categoryModal" data-id="{{$category->id}}" data-name="{{$category->name}}">
											<i class="fa fa-edit"></i>
										</button>
										<button type="button" class="catDelete btn btn-xs btn-danger" data-toggle="modal" data-target="#categoryModal" data-id="{{$category->id}}" data-name="{{$category->name}}">
											<i class="fa fa-trash"></i>
											<input type="hidden" name="id" id="catID" value="{{$category->id}}">
										</button>
										<button id="catDetail" type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#categoryModal" data-id="{{$category->id}}" data-name="{{$category->name}}"s>
											<i class="fa fa-eye"></i>
										</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</section>
			</div>
			{{-- end: categories table col --}}

			{{-- brands table col --}}
			<div class="col-sm-6">

				{{-- Controls Panel --}}
				<section class="panel panel-transparent">
					<div class="panel-body">
						<div class="pull-right">
							<button id="addBrand" type="button" class="btn btn-default" data-toggle="modal" data-target="#brandModal">
								<i class="fa fa-plus"></i>
								Brand
							</button>
						</div>
					</div>
				</section>
				{{-- End Controls Panel --}}

				<section class="panel panel-featured panel-featured-dark">
					<header class="panel-heading">
						<h2 class="panel-title">Brands</h2>
						<p class="panel-subtitle">List of all item brands</p>
					</header>
					<div class="panel-body">
						<table class="table table-bordered table-striped mb-none" id="datatable-default">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Created By</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Created By</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($brands as $brand)
								<tr class="">
									<td>{{$loop->index + 1}}</td>
									<td>{{$brand->name}}</td>
									<td>{{$brand->created_by}}</td>
									{{-- <td>{{$brand->created_at}}</td> --}}
									<td>
										<button type="button" class="editBrand btn btn-xs btn-warning" data-toggle="modal" data-target="#brandModal" data-id="{{$brand->id}}" data-name="{{$brand->name}}">
											<i class="fa fa-edit"></i>
										</button>
										<button type="button" class="brandDelete btn btn-xs btn-danger" data-toggle="modal" data-target="#brandModal" data-id="{{$brand->id}}" data-name="{{$brand->name}}">
											<i class="fa fa-trash"></i>
											<input type="hidden" name="id" id="brandID" value="{{$brand->id}}">
										</button>
										<button id="brandDetail" type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#brandModal" data-id="{{$brand->id}}" data-name="{{$brand->name}}"s>
											<i class="fa fa-eye"></i>
										</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</section>
			</div>
			{{-- end: brands table col --}}
		</div>
		{{-- end: page --}}

		{{-- Category Modal --}}
		<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="catModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-primary">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="catModalLabel">Are you sure?</h4>
					</div>
					<div class="modal-body" style="padding:30px 30px;">
						<form id="cat-form" class="form-horizontal mb-lg" enctype="multipart/form-data">
						{{csrf_field()}}
							<input type="hidden" id="id">
							<fieldset>
								<div class="form-group mt-lg">
									<label for="name" class="col-sm-3 control-label">Category Name</label>
									<div class="col-sm-9">
										<input type="text" name="name" id="name" class="form-control" placeholder="Enter category name..."/>
									</div>
								</div>
							</fieldset>
						</form>

						{{-- Delete Prompt --}}
						<div id="prompt" class="text-center hidden">
							<i class="fa fa-times-circle fa-5x" style="color: #d2322d;"></i>
							<p id="message" style="font-size: 20px">Are you sure you want to delete: <h5 id="catName" style="color: red; font-size: 20px"></h5>?</p>
						</div>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-md-12 text-right">
								<button id="saveCat" class="btn btn-success" data-dismiss="modal">Add Category</button>
								<button id="updateCat" class="btn btn-warning" data-dismiss="modal">Save Changes</button>
								<button id="deleteCat" class="btn btn-danger" data-dismiss="modal">Confirm</button>
								<button id="cancel" class="btn btn-default modal-dismiss" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- End Category Modal --}}

		{{-- Brand Modal --}}
		<div class="modal fade" id="brandModal" tabindex="-1" role="dialog" aria-labelledby="brandModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-primary">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="brandModalLabel">Title</h4>
					</div>
					<div class="modal-body" style="padding:30px 30px;">
						<form id="brand-form" class="form-horizontal mb-lg" enctype="multipart/form-data">
						{{csrf_field()}}
							<input type="hidden" id="brandId">
							<fieldset>
								<div class="form-group mt-lg">
									<label for="brandName" class="col-sm-3 control-label">Brand Name</label>
									<div class="col-sm-9">
										<input type="text" name="brandName" id="brandName" class="form-control" placeholder="Enter brand name...">
									</div>
								</div>
							</fieldset>
						</form>

						{{-- Delete brand Prompt --}}
						<div id="brandPrompt" class="text-center hidden">
							<i class="fa fa-times-circle fa-5x" style="color: #d2322d;"></i>
							<p id="message" style="font-size: 20px">Are you sure you want to delete: <h5 id="brandTitle" style="color: red; font-size: 20px"></h5>?</p>
						</div>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-md-12 text-right">
								<button id="saveBrand" class="btn btn-success" data-dismiss="modal">Add Brand</button>
								<button id="updateBrand" class="btn btn-warning" data-dismiss="modal">Save Changes</button>
								<button id="deleteBrand" class="btn btn-danger" data-dismiss="modal">Confirm</button>
								<button id="cancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- End Brand Modal --}}
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
/*-----------------------------------------------------------------------------------------|
-----------------------------CATEGORY's JEQUERY SNIPPETS-----------------------------------|
-------------------------------------------------------------------------------------------|
/*------------------------------------------------------------------------------------------
													ADD NEW CATEGORY's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/ 
			// Add New Cat
			$(document).on('click', '#addCat', function(event) {
				$('#catModalLabel').text('Add New Category');
				$('#cat-form').show('300');
				$('#updateCat').hide('300');
				$('#deleteCat').hide('300');
				$('#saveCat').show('300');
				$('#prompt').addClass('hidden');
				// disabling read-only on form controls
				$('#cat-form input[type="text"]').prop("disabled", false);
				$('#cat-form').trigger("reset");
			});

			// Save New Cat
			$('#saveCat').click(function(event) {
				var name = $('#name').val();
				
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
				$.post('{{route('categories.store')}}', {
					'name': name,
					'_token': $('input[name=_token]').val()
				},
				function(data) {
					console.log(data);
					$('#cat-form').trigger("reset");
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
						title: 'cheers!',
						text: 'category added successfully',
						type: 'success'
					});
				});
			});

/*------------------------------------------------------------------------------------------
													EDIT CATEGORY's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/ 
			// Edit Cat
			$(document).on('click', '.editCat', function(event) {
				$('#catModalLabel').text('Edit Category');
				$('#prompt').addClass('hidden');
				$('#cat-form').show('300');
				$('#updateCat').show('300');
				$('#deleteCat').hide('300');
				$('#saveCat').hide('300');
				// disabling read-only on form controls
				$('#cat-form input[type="text"]').prop("disabled", false);
				var id = $(this).data('id');
				// var name = $(this).data('name');
				// $('#id').val(id);
				var url = '{{route('categories.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#name').val(data.name);
				});
			});

			// Update Cat
			$('#updateCat').click(function(event) {
				var name = $('#name').val();
				var id = $('#id').val();
				var url = '{{route('categories.update', 'id')}}';
				url = url.replace('id', id);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.post(url, {
					'_token': $('input[name=_token]').val(),
					'name': name,
					'_method': 'put' 
				}, function(data) {
					$('#cat-form').trigger("reset");
					console.log(data);
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
						title: 'cheers!',
						text: 'changes saved successfully',
						type: 'success'
					});
				});
			});

/*------------------------------------------------------------------------------------------
													DELETE CATEGORY's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/  
			// Cat Delete
			$('.catDelete').click(function(event) {
				$('#catModalLabel').text('Delete Category');
				$('#cat-form').hide('300');
				$('#saveCat').hide('300');
				$('#updateCat').hide('300');
				$('#deleteCat').show('300');
				$('#prompt').removeClass('hidden');
				var id = $(this).data('id');
				var name = $(this).data('name');
				$('#catID').val(id);
				$('#catName').text(name);
				console.log(id);
			});

			// Delete Item
			$('#deleteCat').click(function(event) {
				var id = $('#catID').val();
				var url = '{{route('categories.destroy', 'id')}}';
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
					$('#cat-form').trigger("reset");
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
						title: 'Alert!',
						text: 'category deleted successfully...',
						type: 'danger'
					});
				});
			});

/*------------------------------------------------------------------------------------------
													VIEW SINGLE CATEGORY's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/ 
			// View Single Category's Details
			$(document).on('click', '#catDetail', function(event) {
				$('#catModalLabel').text('Category Details');
				$('#prompt').addClass('hidden');
				$('#cat-form').show('300');
				$('#updateCat').hide('300');
				$('#deleteCat').hide('300');
				$('#saveCat').hide('300');
				// disabling read-only on form controls
				$('#cat-form input[type="text"]').prop("disabled", true);
				var id = $(this).data('id');
				// var name = $(this).data('name');
				// $('#id').val(id);
				var url = '{{route('categories.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#name').val(data.name);
				});
			});


/*-----------------------------------------------------------------------------------------|
------------------------------BRAND's JEQUERY SNIPPETS-------------------------------------|
-------------------------------------------------------------------------------------------| 
/*------------------------------------------------------------------------------------------
													ADD NEW BRAND's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/  
			// Add New Brand
			$(document).on('click', '#addBrand', function(event) {
				$('#brandModalLabel').text('Add New Brand');
				$('#brand-form').show('300');
				$('#updateBrand').hide('300');
				$('#deleteBrand').hide('300');
				$('#saveBrand').show('300');
				$('#brandPrompt').addClass('hidden');
				// disabling read-only on form controls
				$('#brand-form input[type="text"]').prop("disabled", false);
			});

			// Save New Brand
			$('#saveBrand').click(function(event) {
				var name = $('#brandName').val();
				
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
				$.post('{{route('brands.store')}}', {
					'name': name,
					'_token': $('input[name=_token]').val()
				},
				function(data) {
					console.log(data);
					$('#datatable-default').load(location.href + ' #datatable-default');
					new PNotify({
											title: 'cheers!',
											text: 'Brand added successfully',
											type: 'success'
					});
				});
			});

/*------------------------------------------------------------------------------------------
													EDIT BRAND's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/ 
			// Edit Brand
			$(document).on('click', '.editBrand', function(event) {
				$('#brandModalLabel').text('Edit Brand');
				$('#brandPrompt').addClass('hidden');
				$('#brand-form').show('300');
				$('#updateBrand').show('300');
				$('#deleteBrand').hide('300');
				$('#saveBrand').hide('300');
				// disabling read-only on form controls
				$('#brand-form input[type="text"]').prop("disabled", false);
				var id = $(this).data('id');
				// var name = $(this).data('name');
				// $('#id').val(id);
				var url = '{{route('brands.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#brandId').val(data.id);
					$('#brandName').val(data.name);
				});
			});

			// Update Brand
			$('#updateBrand').click(function(event) {
				var name = $('#brandName').val();

				var id = $('#brandId').val();
				var url = '{{route('brands.update', 'id')}}';
				url = url.replace('id', id);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.post(url, {
					'_token': $('input[name=_token]').val(),
					'name': name,
					'_method': 'put' 
				}, function(data) {
					$('#brand-form').trigger("reset");
					console.log(data);
					$('#datatable-default').load(location.href + ' #datatable-default');
					new PNotify({
						title: 'cheers!',
						text: 'changes saved successfully',
						type: 'success'
					});
				});
			});

/*------------------------------------------------------------------------------------------
													DELETE CATEGORY's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/ 
			// Brand Delete
			$('.brandDelete').click(function(event) {
				$('#brandModalLabel').text('Delete Brand');
				$('#brand-form').hide('300');
				$('#saveBrand').hide('300');
				$('#updateBrand').hide('300');
				$('#deleteBrand').show('300');
				$('#brandPrompt').removeClass('hidden');
				var id = $(this).data('id');
				var name = $(this).data('name');
				$('#brandID').val(id);
				$('#brandTitle').text(name);
				console.log(name);
			});

			// Delete Brand
			$('#deleteBrand').click(function(event) {
				var id = $('#brandID').val();
				var url = '{{route('brands.destroy', 'id')}}';
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
					$('#datatable-default').load(location.href + ' #datatable-default');
					new PNotify({
						title: 'Alert!',
						text: 'brand deleted successfully...',
						type: 'danger'
					});
				});
			});			

/*------------------------------------------------------------------------------------------
													VIEW BRAND's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/  
			// View Brand Details
			$(document).on('click', '#brandDetail', function(event) {
				$('#brandModalLabel').text('Brand Details');
				$('#brandPrompt').addClass('hidden');
				$('#brand-form').show('300');
				$('#updateBrand').hide('300');
				$('#deleteBrand').hide('300');
				$('#saveBrand').hide('300');
				// disabling read-only on form controls
				$('#brand-form input[type="text"]').prop("disabled", true);
				var id = $(this).data('id');
				// var name = $(this).data('name');
				// $('#id').val(id);
				var url = '{{route('brands.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#brandId').val(data.id);
					$('#brandName').val(data.name);
				});
			});

/*------------------------------------------------------------------------------------------
													xxxxxx
------------------------------------------------------------------------------------------*/ 

		});
	</script>
@endsection
