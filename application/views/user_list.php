<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>CodeIgniter Simple CRUD Tutorial</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<?php
                if (isset($success)) {
                    echo 'User record inserted';
                } else {
                    echo validation_errors();
                }
                ?>

                <?php 
                $attributes = array('name' => 'form', 'id' => 'form');
                echo form_open($this->uri->uri_string(), $attributes);
                ?>
	<h1 class="page-header text-center">CodeIgniter Simple CRUD Tutorial</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>firstname</th>
						<th>lastname</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- <?php
					foreach($users as $user){
						?> -->
						<tr>
							<td><?php echo $user->users_id; ?></td>
							<td><?php echo $user->first_name; ?></td>
							<td><?php echo $user->last_name; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->users_id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->users_id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
					<!-- 	<?php
					}
					?> -->
				</tbody>
			</table>
		</div>
	</div>
	 <?php echo form_close(); ?>
</div>
</body>
</html>