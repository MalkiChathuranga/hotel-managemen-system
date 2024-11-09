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
			<form method="POST" action="eventadd.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EventName:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ename" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Decoration:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="decoration" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Planner'sName:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ContactNo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EventPrice:</label>
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