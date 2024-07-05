<!DOCTYPE html>
<html>
<head>
    <title>Submitted Queries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Submitted Queries</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Response</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($query->id); ?></td>
                        <td><?php echo e($query->name); ?></td>
                        <td><?php echo e($query->email); ?></td>
                        <td><?php echo e($query->message); ?></td>
                        <td><?php echo e($query->response); ?></td>
                        <td><?php echo e($query->created_at); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Users\Vinicious\Desktop\darasa\resources\views/admin/queries.blade.php ENDPATH**/ ?>