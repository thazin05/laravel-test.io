<!DOCTYPE html>
<html lang="en" ng-app="getSupplier">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel 5 and Angular CRUD Application</title>

	{!! Html::style('css/bootstrap.min.css') !!}
	{!! Html::style('css/font-awesome.min.css') !!}
</head>
<body>
<div class="container">
	<h2>Simple CRUD Application with AngularJS</h2>
	<div ng-controller="SupplierController">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>SupplierName</th>
					<th>SupplierEmail</th>
					<th>SupplierContact</th>
					<th>SupplierPosition</th>
					<th>
						<button id="btn-add" class="btn btn-success btn-xs" ng-click="toggle('add', 0)">Add New Supplier</button>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="supplier in suppliers">
					<td>@{{ supplier.id }}</td>
					<td>@{{ supplier.supplierName }}</td>
					<td>@{{ supplier.supplierEmail }}</td>
					<td>@{{ supplier.supplierContact }}</td>
					<td>@{{ supplier.supplierPosition }}</td>
					<td>
						<button class="btn btn-warning btn-xs btn-detail" ng-click="toggle('edit', supplier.id)">
							<span class="glyphicon glyphicon-edit"></span>
						</button>
						<button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(supplier.id)">
							<span class="glyphicon glyphicon-trash"></span>
						</button>
					</td>
				</tr>
			</tbody>
		</table>

		<!--show modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">
		        	<span aria-hidden="true">x</span>
		        </button>
		        <h4 class="modal-title" id="myModalLabel">@{{ form_title }}</h4>
		      </div>
		      <div class="modal-body">
		       <form class="form-horizontal" name="frmSupplier" novalidate="">
		       		<div class="form-group">
		       			<label class="col-sm-3 control-label">Supplier Name</label>
		       			<div class="col-sm-9">
		       				<input type="text" class="form-control" name="supplierName" id="supplierName" value="@{{ supplierName }}" ng-model="supplier.supplierName" placeholder="Enter Supplier Name" ng-required="true">
		       				<span ng-show="frmSupplier.supplierName.$invalid && frmSupplier.supplierName.$touched">Supplier Name field is required.</span>
		       			</div>
		       		</div>
		       		<div class="form-group">
		       			<label class="col-sm-3 control-label">Supplier Email</label>
		       			<div class="col-sm-9">
		       				<input type="email" class="form-control" name="supplierEmail" id="supplierEmail" value="@{{ supplierEmail }}" ng-model="supplier.supplierEmail" placeholder="Enter Supplier Email" ng-required="true">
		       				<span ng-show="frmSupplier.supplierEmail.$invalid && frmSupplier.supplierEmail.$touched">Supplier Email field is required.</span>
		       			</div>
		       		</div>
		       		<div class="form-group">
		       			<label class="col-sm-3 control-label">Supplier Contact</label>
		       			<div class="col-sm-9">
		       				<input type="text" class="form-control" name="supplierContact" id="supplierContact" value="@{{ supplierContact }}" ng-model="supplier.supplierContact" placeholder="Enter Supplier Contact" ng-required="true">
		       				<span ng-show="frmSupplier.supplierContact.$invalid && frmSupplier.supplierContact.$touched">Supplier Contact field is required.</span>
		       			</div>
		       		</div>
		       		<div class="form-group">
		       			<label class="col-sm-3 control-label">Supplier Position</label>
		       			<div class="col-sm-9">
		       				<input type="text" class="form-control" name="supplierPosition" id="supplierPosition" value="@{{ supplierPosition }}" ng-model="supplier.supplierPosition" placeholder="Enter Supplier Position" ng-required="true">
		       				<span ng-show="frmSupplier.supplierPosition.$invalid && frmSupplier.supplierPosition.$touched">Supplier Position field is required.</span>
		       			</div>
		       		</div>
		       </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmSupplier.$invalid">Save Changes</button>
		      </div>
		    </div>

		  </div>
		</div>
	</div>
</div>



{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

<!-- Angular Material Load -->
{!! Html::script('js/angular.min.js') !!}
{!! Html::script('js/angular-material.min.js') !!}

<!-- Angular Application Scripts Load -->
{!! Html::script('angular/app.js') !!}
{!! Html::script('angular/controllers/SupplierController.js') !!}
</body>
</html>