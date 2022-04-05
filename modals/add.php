<div class="modal fade" id="modalAdd" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body p-5">
				<h3>Add new user</h3>
				<form id="formAdd" method="post">
					<div class="form-group">
						<label>Name</label>
						<input class="form-control" type="text" name="name" value="asdf">
					</div>

					<div class="form-group">
						<label>DOB</label>
						<input class="form-control" type="date" name="dob" value="2020-12-02">
					</div>
				</form>

				<button class="btn btn-primary" id="btnSaveAdd">Save</button>
				<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>