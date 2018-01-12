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

@section('title', 'Store Items')

@section('content')
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Products Record</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Shop</span></li>
					<li><span>Products</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		{{-- Controls Panel --}}
		<section class="panel panel-transparent">
			<div class="panel-body">
				<div class="pull-right">
					<button id="addItem" type="button" class="btn btn-default" data-toggle="modal" data-target="#modalBootstrap">
					<i class="fa fa-plus text-dark"></i>
					Product
				</button>
				<button id="addSupplier" type="button" class="btn btn-default" data-toggle="modal" data-target="#supplierModal">
					<i class="fa fa-plus text-dark"></i>
					Supplier
				</button>
				</div>
			</div>
		</section>
		{{-- End Controls Panel --}}

		<!-- start: page -->
		<section class="panel panel-featured panel-featured-dark">
			<header class="panel-heading">
				<h2 class="panel-title">Products</h2>
				<p class="panel-subtitle">List of all products</p>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Code</th>
							<th>Name</th>
							<th>Category</th>
							<th>Brand</th>
							<th>Quantity</th>
							<th>Prize</th>
							<th>Supplier</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>S.No</th>
							<th>Code</th>
							<th>Name</th>
							<th>Category</th>
							<th>Brand</th>
							<th>Quantity</th>
							<th>Prize</th>
							<th>Supplier</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($products as $product)
						<tr class="">
							<td>{{$loop->index + 1}}</td>
							<td>{{$product->productCode}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->categoryID}}</td>
							<td>{{$product->brandID}}</td>
							<td>{{$product->quantity}}</td>
							<td>{{$product->sellPrice}}</td>
							<td>{{$product->supplierID}}</td>
							<td>
								<button type="button" class="editItem btn btn-xs btn-warning" data-toggle="modal" data-target="#modalBootstrap" data-id="{{$product->id}}" data-name="{{$product->name}}">
									<i class="fa fa-edit"></i>
									{{-- <input type="hidden" name="id" id="productID" value="{{$product->id}}"> --}}
								</button>
								<button type="button" class="itemDelete btn btn-xs btn-danger" data-toggle="modal" data-target="#modalBootstrap" data-id="{{$product->id}}" data-name="{{$product->name}}">
									<i class="fa fa-trash"></i>
									<input type="hidden" name="id" id="productID" value="{{$product->id}}">
								</button>
								<button id="itemDetail" type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalBootstrap" data-id="{{$product->id}}" data-name="{{$product->name}}"s>
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

		{{-- Add Product Modal Dialogue --}}
		<div class="modal fade" id="modalBootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header color-primary">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
					</div>
					<div class="modal-body" style="padding:30px 30px;">
						<form id="demo-form" class="form-horizontal mb-lg" enctype="multipart/form-data">
						{{csrf_field()}}
							<input type="hidden" id="id">
							<fieldset>
								<div class="form-group mt-lg">
									<label for="productCode" class="col-sm-3 control-label">Product Code</label>
									<div class="col-sm-9">
										<input type="text" name="productCode" id="productCode" class="form-control" placeholder="Enter product code..."/>
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-3 control-label">Name</label>
									<div class="col-sm-9">
										<input type="text" name="name" id="name" class="form-control" placeholder="Enter product/item name..."/>
									</div>
								</div>
							</fieldset>
							<hr class="dotted tall">
							<fieldset>
								<div class="form-group">
									<label for="brandID" class="col-sm-3 control-label">Brand</label>
									<div class="col-sm-9">
										<select data-plugin-selectTwo name="brandID" id="brandID" class="form-control populate">
											{{-- @foreach($brands as $brand) --}}
												<option value=""></option>
												{{-- @endforeach --}}
										</select>
										
										{{-- Add New Brand --}}
										<div class="col-sm-12">
											<h6>
												quickly add brand
												<a href="#addBrandSection" id="addNewBrandLink" class="text-primary" data-toggle="collapse">
													<i class="fa fa-plus-square-o"></i>
												</a>
											</h6>
										</div>
										<div id="addBrandSection" class="collapse brandNew col-sm-7 col-sm-offset-1">
											&nbsp;
											<input type="text" id="newBrand" class="form-control input-sm" placeholder="Enter new brand name..." name="newBrand">
											<button type="button" class="btn btn-success btn-default btn-xs" id="btnAddBrand">Save</button>
										</div>
										{{-- End Add Brand --}}

									</div>
								</div>
								<div class="form-group">
									<label for="categoryID" class="col-sm-3 control-label">Category</label>
									<div class="col-sm-9">
										<select data-plugin-selectTwo name="categoryID" id="categoryID" class="form-control populate">
											@foreach($categories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
										</select>
										{{-- Add New category --}}
										<div class="col-sm-12">
											<h6>
												quickly add category
												<a href="#addCatSection" id="addNewCatLink" class="text-primary" data-toggle="collapse" >
													<i class="fa fa-plus-square-o"></i>
												</a>
											</h6>
										</div>
										<div id="addCatSection" class="collapse col-sm-7 col-sm-offset-1">
											&nbsp;
											<input type="text" id="newCat" class="form-control input-sm" placeholder="Enter new category name..." name="newCat">
											<button type="button" class="btn btn-success btn-default btn-xs" id="btnAddCat">Save</button>
										</div>
										{{-- End Add New category --}}
									</div>
								</div>
								<div class="form-group">
									<label for="supplierID" class="col-sm-3 control-label">Supplier</label>
									<div class="col-sm-9">
										<select data-plugin-selectTwo name="supplierID" id="suppleirID" class="form-control populate" data>
											@foreach($suppliers as $supplier)
												<option value="{{$supplier->id}}">{{$supplier->companyName}}</option>
												@endforeach
										</select>
										{{-- Add Supplier Modal Trigger --}}
										<div class="col-sm-12">
											<h6>
												quickly add supplier
												<a href="#supplierModal" id="addSupplier" type="button" class="text-primary" data-toggle="modal">
													<i class="fa fa-plus-square-o"></i>
												</a>
											</h6>
										</div>
										{{-- End Add Supplier Modal Trigger --}}
									</div>
								</div>
							</fieldset>
							<hr class="dotted tall">
							<fieldset>
								<div class="form-group">
									<label for="quantity" class="col-sm-3 control-label">Quantity</label>
									<div class="col-sm-9">
										<input type="number" name="quantity" id="quantity" class="form-control" placeholder="Add quantity..."/>
									</div>
								</div>
								<div class="form-group">
									<label for="costPrice" class="col-sm-3 control-label">Cost</label>
									<div class="col-sm-9">
										<input type="number" name="costPrice" id="costPrice" class="form-control" placeholder="Enter product/item cost price..."/>
									</div>
								</div>
								<div class="form-group">
									<label for="sellPrice" class="col-sm-3 control-label">Price</label>
									<div class="col-sm-9">
										<input type="number" name="sellPrice" id="sellPrice" class="form-control" placeholder="Enter product/item selling price..."/>
									</div>
								</div>
								<div class="form-group mt-lg">
									<label for="reorderLevel" class="col-sm-3 control-label">Re-order Level</label>
									<div class="col-sm-9">
										<input type="number" name="reorderLevel" id="reorderLevel" class="form-control" placeholder="Enter re-order level number..."/>
									</div>
								</div>
							</fieldset>
							<hr class="dotted tall">
							<fieldset>
								<div class="form-group">
									<label for="description" class="col-sm-3 control-label">Description</label>
									<div class="col-sm-9">
										<textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter product/item descritopn"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="status" class="col-sm-3 control-label">Availability</label>
									<div class="col-sm-9">
										<select data-plugin-selectTwo name="status" id="status" class="form-control populate">
											<optgroup label="Product/Item Status">
												<option value="0">Available</option>
												<option value="1">Unavailable</option>
											</optgroup>
										</select>
									</div>
								</div>
							</fieldset>

							{{-- Add More Info Button --}}
							&nbsp;
							<div class="form-group">
								{{-- <label for="status" class="col-sm-3 control-label"></label> --}}
								<div class="col-sm-9 col-sm-offset-3">
									<button type="button" class="btn btn-xs btn-success" data-toggle="collapse" data-target="#addInfo">
										<i class="fa fa-plus"></i>
									</button>
									<h5>Additional Details</h5>
								</div>
							</div>

							{{-- Additional Info Form Controls --}}
							<div id="addInfo" class="collapse">
								<fieldset>
									{{-- <div class="form-group">
										<label for="image" class="col-sm-3 control-label">Photo</label>
										<div class="col-sm-9">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="fa fa-file fileupload-exists"></i>
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-default btn-file">
														<span class="fileupload-exists">Change</span>
														<span class="fileupload-new">Select file</span>
														<input type="file" name="image" id="image">
													</span>
													<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
									</div> --}}
								</fieldset>
								<hr class="dotted tall">
								<fieldset>
									<div class="form-group">
										<label for="sizeUnitMeasure" class="col-sm-3 control-label">Size Unit Measure</label>
										<div class="col-sm-9">
											<input type="text" name="sizeUnitMeasure" id="sizeUnitMeasure" class="form-control" placeholder="Enter size unit measure..."/>
										</div>
									</div>
									<div class="form-group">
										<label for="size" class="col-sm-3 control-label">Size</label>
										<div class="col-sm-9">
											<input type="text" name="size" id="size" class="form-control" placeholder="Enter product/item size..."/>
										</div>
									</div>
									<div class="form-group">
										<label for="weightUnitMeasure" class="col-sm-3 control-label">Weight Unit Measure</label>
										<div class="col-sm-9">
											<input type="text" name="weightUnitMeasure" id="weightUnitMeasure" class="form-control" placeholder="Enter weight unit measure..."/>
										</div>
									</div>
									<div class="form-group">
										<label for="weight" class="col-sm-3 control-label">Weight</label>
										<div class="col-sm-9">
											<input type="text" name="weight" id="weight" class="form-control" placeholder="Enter product/item weight..."/>
										</div>
									</div>
								</fieldset>
								<hr class="dotted tall">
								<div class="form-group">
									<label for="color" class="col-sm-3 control-label">Color</label>
									<div class="col-sm-9">
										<select data-plugin-selectTwo name="color" id="color" class="form-control populate">
											<optgroup label="Product/Item Colors">
												<option value="black">Black</option>
												<option value="white">White</option>
												<option value="green">Green</option>
												<option value="red">Red</option>
												<option value="blue">Blue</option>
												<option value="yellow">Yellow</option>
												<option value="brown">Brown</option>
												<option value="gray">Gray</option>
												<option value="purple">Purple</option>
											</optgroup>
										</select>
									</div>
								</div>
							</div>
						</form>

						{{-- Delete Prompt --}}
						<div id="prompt" class="text-center hidden">
							<i class="fa fa-times-circle fa-5x" style="color: #d2322d;"></i>
							<p id="message" style="font-size: 20px">Are you sure you want to delete: <h5 id="productName" style="color: red; font-size: 20px"></h5>?</p>
						</div>
					</div>
					<div class="modal-footer">
						<div class="row">
							<div class="col-md-12 text-right">
								<button id="saveItem" class="btn btn-success" data-dismiss="modal">Add Item</button>
								<button id="updateItem" class="btn btn-warning" data-dismiss="modal">Save Changes</button>
								<button id="deleteItem" class="btn btn-danger" data-dismiss="modal">Confirm</button>
								<button id="cancel" class="btn btn-default modal-dismiss" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- End Add Product Modal Dialogue --}}

		{{-- Quick Add Supplier Modal. Location: (product/includes/supplierModal.blade.php) --}}
		@include('user.shop.product.includes.supplierModal')
		{{-- End Quick Add Supplier Modal --}}

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
/*------------------------------------------------------------------------------------------
														ADD NEW ITEM's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/
			$(document).on('click', '#addItem', function(event) {
				$('#myModalLabel').text('Add New Product/Item');
				$('#demo-form').show('300');
				$('#updateItem').hide('300');
				$('#deleteItem').hide('300');
				$('#saveItem').show('300');
				// disabling read-only on form controls
				$('#demo-form input[type="number"],input[type="text"], #demo-form textarea, #demo-form select').prop("disabled", false);
				$('#prompt').addClass('hidden');
				$('#demo-form').trigger("reset");
			});

			// Save New Item
			$('#saveItem').click(function(event) {
				var productCode = $('#productCode').val();
				var name = $('#name').val();
				var description = $('#description').val();
				var categoryID = $('#categoryID').val();
				var supplierID = $('#supplierID').val();
				var brandID = $('#brandID').val();
				// var image = $('#image').val();
				var sizeUnitMeasure = $('#sizeUnitMeasure').val();
				var size = $('#size').val();
				var weightUnitMeasure = $('#weightUnitMeasure').val();
				var weight = $('#weight').val();
				var color = $('#color').val();
				var quantity = $('#quantity').val();
				var reorderLevel = $('#reorderLevel').val();
				var costPrice = $('#costPrice').val();
				var sellPrice = $('#sellPrice').val();
				var status = $('#status').val();

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
				$.post('{{route('items.store')}}', {
					'_token': $('input[name=_token]').val(),
					'productCode': productCode,
					'name': name,
					'description': description,
					'categoryID': categoryID,
					'supplierID': supplierID,
					'brandID': brandID,
					// 'image': image,
					'sizeUnitMeasure': sizeUnitMeasure,
					'size': size,
					'weightUnitMeasure': weightUnitMeasure,
					'Weight': weight,
					'color': color,
					'quantity': quantity,
					'reorderLevel': reorderLevel,
					'costPrice': costPrice,
					'sellPrice': sellPrice,
					'status': status
				},
				function(data) {
					console.log(data);
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
						title: 'Alert!',
						text: 'new product added successfully...',
						type: 'success'
					});
				});
			});

/*------------------------------------------------------------------------------------------
														EDIT ITEM's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/ 
			// Edit Item
			$(document).on('click', '.editItem', function(event) {
				$('#myModalLabel').text('Edit Product/Item');
				$('#propmt').addClass('hidden');
				$('#demo-form').show('300');
				$('#updateItem').show('300');
				$('#deleteItem').hide('300');
				$('#saveItem').hide('300');
				// disabling read-only on form controls
				$('#demo-form input[type="number"],input[type="text"], #demo-form textarea, #demo-form select').prop("disabled", false);
				var id = $(this).data('id');
				// var name = $(this).data('name');
				// $('#id').val(id);
				var url = '{{route('items.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#productCode').val(data.productCode);
					$('#name').val(data.name);
					$('#description').val(data.description);
					$('#categoryID').val(data.categoryID);
					$('#supplierID').val(data.supplierID);
					$('#brandID').val(data.brandID);
					$('#sizeUnitMeasure').val(data.sizeUnitMeasure);
					$('#size').val(data.size);
					$('#weightUnitMeasure').val(data.weightUnitMeasure);
					$('#weight').val(data.weight);
					$('#color').val(data.color);
					$('#quantity').val(data.quantity);
					$('#reorderLevel').val(data.reorderLevel);
					$('#costPrice').val(data.costPrice);
					$('#sellPrice').val(data.sellPrice);
					$('#status').val(data.status);
				});
			});

			// Update Item
			$('#updateItem').click(function(event) {
				var productCode = $('#productCode').val();
				var name = $('#name').val();
				var description = $('#description').val();
				var categoryID = $('#categoryID').val();
				var supplierID = $('#supplierID').val();
				var brandID = $('#brandID').val();
				// var image = $('#image').val();
				var sizeUnitMeasure = $('#sizeUnitMeasure').val();
				var size = $('#size').val();
				var weightUnitMeasure = $('#weightUnitMeasure').val();
				var weight = $('#weight').val();
				var color = $('#color').val();
				var quantity = $('#quantity').val();
				var reorderLevel = $('#reorderLevel').val();
				var costPrice = $('#costPrice').val();
				var sellPrice = $('#sellPrice').val();
				var status = $('#status').val();

				var id = $('#id').val();
				var url = '{{route('items.update', 'id')}}';
				url = url.replace('id', id);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.post(url, {
					'_token': $('input[name=_token]').val(),
					'productCode': productCode,
					'name': name,
					'description': description,
					'categoryID': categoryID,
					'supplierID': supplierID,
					'brandID': brandID,
					// 'image': image,
					'sizeUnitMeasure': sizeUnitMeasure,
					'size': size,
					'weightUnitMeasure': weightUnitMeasure,
					'Weight': weight,
					'color': color,
					'quantity': quantity,
					'reorderLevel': reorderLevel,
					'costPrice': costPrice,
					'sellPrice': sellPrice,
					'status': status,
					'_method': 'put' 
				}, function(data) {
					$('#demo-form').trigger("reset");
					console.log(data);
					$('#datatable-tabletools').load(location.href + ' #datatable-tabletools');
					new PNotify({
											title: 'cheers!',
											text: 'changes saved successfully',
											type: 'info'
					});
				});
			});

/*------------------------------------------------------------------------------------------
														DELETE ITEM's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/
			// Item Delete
			$('.itemDelete').click(function(event) {
				$('#myModalLabel').text('Delete Item');
				$('#demo-form').hide('300');
				$('#saveItem').hide('300');
				$('#updateItem').hide('300');
				$('#deleteItem').show('300');
				$('#prompt').removeClass('hidden');
				var id = $(this).data('id');
				var name = $(this).data('name');
				$('#productID').val(id);
				$('#productName').text(name);
				console.log(name);
			});

			// Delete Item
			$('#deleteItem').click(function(event) {
				var id = $('#productID').val();
				var url = '{{route('items.destroy', 'id')}}';
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
						text: 'item deleted successfully...',
						type: 'danger'
					});
				});
			});

/*------------------------------------------------------------------------------------------
														DISPLAY SINGLE ITEM's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/
			// Display Full Item Details
			$(document).on('click', '#itemDetail', function(event) {
				var name = $(this).data('name');
				$('#myModalLabel').text('Product/Item '+name+ ' details');
				$('#prompt').addClass('hidden');
				$('#demo-form').show('300');
				$('#updateItem').hide('300');
				$('#deleteItem').hide('300');
				$('#saveItem').hide('300');
				// enabling read-only on form controls
				$('#demo-form input[type="number"],input[type="text"], #demo-form textarea, #demo-form select').prop("disabled", true);

				var id = $(this).data('id');
				var url = '{{route('items.show', 'id')}}';
				url = url.replace('id', id);

				$.get(url, function(data) {
					console.log(data);
					$('#id').val(data.id);
					$('#productCode').val(data.productCode);
					$('#name').val(data.name);
					$('#description').val(data.description);
					$('#categoryID').val(data.categoryID);
					$('#supplierID').val(data.supplierID);
					$('#brandID').val(data.brandID);
					$('#sizeUnitMeasure').val(data.sizeUnitMeasure);
					$('#size').val(data.size);
					$('#weightUnitMeasure').val(data.weightUnitMeasure);
					$('#weight').val(data.weight);
					$('#color').val(data.color);
					$('#quantity').val(data.quantity);
					$('#reorderLevel').val(data.reorderLevel);
					$('#costPrice').val(data.costPrice);
					$('#sellPrice').val(data.sellPrice);
					$('#status').val(data.status);
				});
			});

/*------------------------------------------------------------------------------------------
														QUICK ADD BRAND's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/
			// Quick Add Brand
			$('#btnAddBrand').click(function(event) {
				var name = $('#newBrand').val();
				// $('addNewBrandLink').text('click to close the add new brand input box');
				console.log(name);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.post('{{route('brands.store')}}', {
					'_token': $('input[name=_token]').val(),
					'name': name
				},
				function(data) {
					console.log(data);
					$('#newBrand').val('');
					new PNotify({
						title: 'Alert!',
						text: 'new brand added successfully...',
						type: 'success'
					});
				});
			});

			// Populate brands

/*------------------------------------------------------------------------------------------
														QUICK ADD CATEGORY's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/
			// Quick Add Category
			$('#btnAddCat').click(function(event) {
				var name = $('#newCat').val();
				console.log(name);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$.post('{{route('categories.store')}}', {
					'_token': $('input[name=_token]').val(),
					'name': name
				},
				function(data) {
					console.log(data);
					$('#newCat').val('');
					new PNotify({
						title: 'Alert!',
						text: 'new category added successfully...',
						type: 'success'
					});
				});
			});

/*------------------------------------------------------------------------------------------
														QUICK ADD SUPPLIER's JQEURY AND AJAX
------------------------------------------------------------------------------------------*/
			// Quick Add Supplier
			$(document).on('click', '#addSupplier', function(event) {
				$('#supplierModalLabel').text('Add New Supplier');
				$('#supplier-form').show('300');
				$('#updateSupplier').hide('300');
				$('#deleteSupplier').hide('300');
				$('#saveSupplier').show('300');
				$('#supplier-form').trigger("reset");
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
					new PNotify({
						title: 'cheers!',
						text: 'supplier added successfully',
						type: 'success'
					});
				});
			});

		});
	</script>
@endsection
