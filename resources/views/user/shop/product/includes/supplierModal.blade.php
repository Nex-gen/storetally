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