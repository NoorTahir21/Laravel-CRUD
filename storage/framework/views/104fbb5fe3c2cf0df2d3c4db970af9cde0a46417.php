<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row offset-3">
			<div class="col-md-6">
				<h3 class="text-center">FORM</h3><br>
				<form action="/submit" method="post">
					<?php echo csrf_field(); ?>
					<input type="text" name="name" placeholder="Enter name" class="form-control"><br>
					<input type="email" name="email" placeholder="Enter email" class="form-control"><br>
					<input type="password" name="password" placeholder="Enter password" class="form-control"><br>
					<center><button type="submit" class="btn btn-danger">Submit</button></center>
				</form>
			</div>
		</div>
				<br>
				<table class="table">
					<h3 class="text-center">FORM EDIT</h3>
					<tr>
                        <th>name</th>
                        <th>Email</th>
                        <th>pssword</th>
                        <th>Action</th>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    	<td><?php echo e($stud->name); ?></td>
                    	<td><?php echo e($stud->email); ?></td>
                    	<td><?php echo e($stud->password); ?></td>
                    	<td><a href="<?php echo e(url('/edit', $stud->id)); ?>"><button class="btn btn-info">Edit</button></a></td>
                    	<td><a href="<?php echo e(url('/del', $stud->id)); ?>"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
		
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\noor\resources\views/welcome.blade.php ENDPATH**/ ?>