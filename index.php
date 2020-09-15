<!DOCTYPE html>
<html>
	<head>
		<title>Tree App</title>
		<script src="js/jquery.min.js"></script>    
		<script src="js/script.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" charset="utf8" src="js/bootstrap-treeview.js"></script>
		<link rel="stylesheet" href="css/bootstrap-treeview.min.css" />
	</head>
	<body>
		<div class="container" style="width:700px;">
			<br/><br/>
				<div class="row">
					<div class="col-md-6">
						<form method="post" id="treeview_form">
							<div class="form-group">
								<label>Enter Parent root</label>
									<select name="item_id" id="parent_item" class="form-control" required="">
									</select>
							</div>
							<div class="form-group">
								<label>Enter Name root</label>
								<input type="text" name="item_name" value="" id="item_name" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="submit" name="action" id="action" value="Create root" class="btn btn-info" />
								<button id="rmv-btn" class="rmv-btn btn btn-danger">Delete root</button>
							</div>
						</form>
					</div> <br>
					<div class="col-md-6">
					<div id="treeview"></div>
				</div>
			</div>
		</div>
	</body>
</html>