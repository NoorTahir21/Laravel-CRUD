<!DOCTYPE html>
<html>
<head>
	<title>
		<h2>Laravel Edit</h2>
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h3 class="text-center text-uppercase">Form update</h3>
			<div class="col-md-6 offset-3">
				<form action="<?php echo e(url('/update',$data->id)); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<input type="text" name="name" placeholder="Enter name" value="<?php echo e($data->name); ?>" class="form-control"><br>
					<input type="email" name="email" placeholder="Enter Email" value="<?php echo e($data->email); ?>" class="form-control"><br>
					<input type="password" name="password" placeholder="Enter password" value="<?php echo e($data->password); ?>" class="form-control"><br>
					<button type="submit" class="btn btn-success">update</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\noor\resources\views/edit.blade.php ENDPATH**/ ?>