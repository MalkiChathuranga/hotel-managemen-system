<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Hall</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="halladd.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">HallNo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="hno" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">HallType:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="htype" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">No.ofTables:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="table" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">No.ofChairs:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="chair" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">HallPrice:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="price" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>