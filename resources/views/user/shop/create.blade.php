@extends('user.layouts.master')

@section('title', 'Create Shop')

@section('css')
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />

	<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/dropzone/css/basic.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/dropzone/css/dropzone.css')}}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

	<!-- Head Libs -->
	<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>
@endsection

@section('content')
	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Basic Forms</h2>
		
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Forms</span></li>
					<li><span>Basic</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->
			<div class="row">
				<div class="col-lg-12">
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
			
							<h2 class="panel-title">Create Store</h2>
						</header>
						<div class="panel-body">
							<form class="form-horizontal form-bordered" method="get">
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Shop Name</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputDefault" placeholder="Shop Name">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="inputHelpText">Description</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputDefault" placeholder="Description">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="inputHelpText">Address</label>
									<div class="col-md-6">
										<textarea class="form-control" rows="3" placeholder="Enter Shop Address"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">City</label>
									<div class="col-md-6">
										<select data-plugin-selectTwo class="form-control populate">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV">Nevada</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NM">New Mexico</option>
												<option value="ND">North Dakota</option>
												<option value="UT">Utah</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="IL">Illinois</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="OK">Oklahoma</option>
												<option value="SD">South Dakota</option>
												<option value="TX">Texas</option>
												<option value="TN">Tennessee</option>
												<option value="WI">Wisconsin</option>
											</optgroup>
											<optgroup label="Eastern Time Zone">
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="IN">Indiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="OH">Ohio</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WV">West Virginia</option>
											</optgroup>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">State</label>
									<div class="col-md-6">
										<select data-plugin-selectTwo class="form-control populate">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV">Nevada</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NM">New Mexico</option>
												<option value="ND">North Dakota</option>
												<option value="UT">Utah</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="IL">Illinois</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="OK">Oklahoma</option>
												<option value="SD">South Dakota</option>
												<option value="TX">Texas</option>
												<option value="TN">Tennessee</option>
												<option value="WI">Wisconsin</option>
											</optgroup>
											<optgroup label="Eastern Time Zone">
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="IN">Indiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="OH">Ohio</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WV">West Virginia</option>
											</optgroup>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Country</label>
									<div class="col-md-6">
										<select data-plugin-selectTwo class="form-control populate">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV">Nevada</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NM">New Mexico</option>
												<option value="ND">North Dakota</option>
												<option value="UT">Utah</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="IL">Illinois</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="OK">Oklahoma</option>
												<option value="SD">South Dakota</option>
												<option value="TX">Texas</option>
												<option value="TN">Tennessee</option>
												<option value="WI">Wisconsin</option>
											</optgroup>
											<optgroup label="Eastern Time Zone">
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="IN">Indiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="OH">Ohio</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WV">West Virginia</option>
											</optgroup>
										</select>
									</div>
								</div>
			
								<div class="form-group">
									<div class="col-md-6 col-md-offset-3">
										<button class="btn btn-md btn-success">Create</button>
										&nbsp;
										<a href="" class="btn btn-md btn-warning">Cancel</a>
									</div>
								</div>

							</form>
						</div>
					</section>
			
				</div>
			</div>
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
	<script src="{{asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('assets/vendor/select2/select2.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
	<script src="{{asset('assets/vendor/fuelux/js/spinner.js')}}"></script>
	<script src="{{asset('assets/vendor/dropzone/dropzone.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-markdown/js/markdown.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-markdown/js/to-markdown.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>
	<script src="{{asset('assets/vendor/codemirror/lib/codemirror.js')}}"></script>
	<script src="{{asset('assets/vendor/codemirror/addon/selection/active-line.js')}}"></script>
	<script src="{{asset('assets/vendor/codemirror/addon/edit/matchbrackets.js')}}"></script>
	<script src="{{asset('assets/vendor/codemirror/mode/javascript/javascript.js')}}"></script>
	<script src="{{asset('assets/vendor/codemirror/mode/xml/xml.js')}}"></script>
	<script src="{{asset('assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
	<script src="{{asset('assets/vendor/codemirror/mode/css/css.js')}}"></script>
	<script src="{{asset('assets/vendor/summernote/summernote.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
	<script src="{{asset('assets/vendor/ios7-switch/ios7-switch.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js')}}"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="{{asset('assets/javascripts/theme.js')}}"></script>
	
	<!-- Theme Custom -->
	<script src="{{asset('assets/javascripts/theme.custom.js')}}"></script>
	
	<!-- Theme Initialization Files -->
	<script src="{{asset('assets/javascripts/theme.init.js')}}"></script>

	<!-- Examples -->
	<script src="{{asset('assets/javascripts/forms/examples.advanced.form.js')}}"></script>
@endsection