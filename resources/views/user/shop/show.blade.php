@extends('admin.layouts.master')

@section('css')
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />

	<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

	<!-- Head Libs -->
	<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>
@endsection

@section('title', 'Store Tally Shop')

@section('content')
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Available Shops</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Tables</span></li>
					<li><span>Advanced</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-title pull-right">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="btn btn-sm btn-success">Add</a>
				</div>
		
				<h2 class="panel-title">Available Products</h2>
			</header>
			<div class="panel-body">
				<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
					<thead>
						<tr>
							<th>Rendering engine</th>
							<th>Browser</th>
							<th>Platform(s)</th>
							<th class="hidden-phone">Engine version</th>
							<th class="hidden-phone">CSS grade</th>
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX">
							<td>Trident</td>
							<td>Internet
								Explorer 4.0
							</td>
							<td>Win 95+</td>
							<td class="center hidden-phone">4</td>
							<td class="center hidden-phone">X</td>
						</tr>
						<tr class="gradeC">
							<td>Trident</td>
							<td>Internet
								Explorer 5.0
							</td>
							<td>Win 95+</td>
							<td class="center hidden-phone">5</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeA">
							<td>Trident</td>
							<td>Internet
								Explorer 5.5
							</td>
							<td>Win 95+</td>
							<td class="center hidden-phone">5.5</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Trident</td>
							<td>Internet
								Explorer 6
							</td>
							<td>Win 98+</td>
							<td class="center hidden-phone">6</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Trident</td>
							<td>Internet Explorer 7</td>
							<td>Win XP SP2+</td>
							<td class="center hidden-phone">7</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Trident</td>
							<td>AOL browser (AOL desktop)</td>
							<td>Win XP</td>
							<td class="center hidden-phone">6</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Firefox 1.0</td>
							<td>Win 98+ / OSX.2+</td>
							<td class="center hidden-phone">1.7</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Firefox 1.5</td>
							<td>Win 98+ / OSX.2+</td>
							<td class="center hidden-phone">1.8</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Gecko</td>
							<td>Firefox 2.0</td>
							<td>Win 98+ / OSX.2+</td>
							<td class="center hidden-phone">1.8</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Webkit</td>
							<td>Safari 1.3</td>
							<td>OSX.3</td>
							<td class="center hidden-phone">312.8</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Webkit</td>
							<td>Safari 2.0</td>
							<td>OSX.4+</td>
							<td class="center hidden-phone">419.3</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Webkit</td>
							<td>Safari 3.0</td>
							<td>OSX.4+</td>
							<td class="center hidden-phone">522.1</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Webkit</td>
							<td>OmniWeb 5.5</td>
							<td>OSX.4+</td>
							<td class="center hidden-phone">420</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Webkit</td>
							<td>iPod Touch / iPhone</td>
							<td>iPod</td>
							<td class="center hidden-phone">420.1</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Webkit</td>
							<td>S60</td>
							<td>S60</td>
							<td class="center hidden-phone">413</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera 7.0</td>
							<td>Win 95+ / OSX.1+</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera 7.5</td>
							<td>Win 95+ / OSX.2+</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera 8.0</td>
							<td>Win 95+ / OSX.2+</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera 8.5</td>
							<td>Win 95+ / OSX.2+</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera 9.0</td>
							<td>Win 95+ / OSX.3+</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera 9.2</td>
							<td>Win 88+ / OSX.3+</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera 9.5</td>
							<td>Win 88+ / OSX.3+</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Opera for Wii</td>
							<td>Wii</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Nokia N800</td>
							<td>N800</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>Presto</td>
							<td>Nintendo DS browser</td>
							<td>Nintendo DS</td>
							<td class="center hidden-phone">8.5</td>
							<td class="center hidden-phone">C/A<sup>1</sup></td>
						</tr>
						<tr class="gradeC">
							<td>KHTML</td>
							<td>Konqureror 3.1</td>
							<td>KDE 3.1</td>
							<td class="center hidden-phone">3.1</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeA">
							<td>KHTML</td>
							<td>Konqureror 3.3</td>
							<td>KDE 3.3</td>
							<td class="center hidden-phone">3.3</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeA">
							<td>KHTML</td>
							<td>Konqureror 3.5</td>
							<td>KDE 3.5</td>
							<td class="center hidden-phone">3.5</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeX">
							<td>Tasman</td>
							<td>Internet Explorer 4.5</td>
							<td>Mac OS 8-9</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">X</td>
						</tr>
						<tr class="gradeC">
							<td>Tasman</td>
							<td>Internet Explorer 5.1</td>
							<td>Mac OS 7.6-9</td>
							<td class="center hidden-phone">1</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeC">
							<td>Tasman</td>
							<td>Internet Explorer 5.2</td>
							<td>Mac OS 8-X</td>
							<td class="center hidden-phone">1</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeA">
							<td>Misc</td>
							<td>NetFront 3.1</td>
							<td>Embedded devices</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeA">
							<td>Misc</td>
							<td>NetFront 3.4</td>
							<td>Embedded devices</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">A</td>
						</tr>
						<tr class="gradeX">
							<td>Misc</td>
							<td>Dillo 0.8</td>
							<td>Embedded devices</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">X</td>
						</tr>
						<tr class="gradeX">
							<td>Misc</td>
							<td>Links</td>
							<td>Text only</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">X</td>
						</tr>
						<tr class="gradeX">
							<td>Misc</td>
							<td>Lynx</td>
							<td>Text only</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">X</td>
						</tr>
						<tr class="gradeC">
							<td>Misc</td>
							<td>IE Mobile</td>
							<td>Windows Mobile 6</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeC">
							<td>Misc</td>
							<td>PSP browser</td>
							<td>PSP</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">C</td>
						</tr>
						<tr class="gradeU">
							<td>Other browsers</td>
							<td>All others</td>
							<td>-</td>
							<td class="center hidden-phone">-</td>
							<td class="center hidden-phone">U</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		<!-- end: page -->
	</section>
@endsection

@section('js')
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
		<script src="{{asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('assets/javascripts/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('assets/javascripts/theme.custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('assets/javascripts/theme.init.js')}}"></script>


		<!-- Examples -->
		<script src="{{asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
		<script src="{{asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
		<script src="{{asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>

@endsection
