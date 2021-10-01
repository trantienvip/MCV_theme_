
<?php $__env->startSection('content'); ?>
<style>
    table, td, th {
        border-collapse: collapse;
        border: 1px solid #333;
        padding: 15px;
    }
    table{
        margin: 20px 0;
        width: 100%;
    }
</style>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Avatar</th>
        <th>Giới tính</th>
        <th>birth_date</th>
        <th>address</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($u->id); ?></td>
                <td><?php echo e($u->name); ?></td>
                <td><?php echo e($u->email); ?></td>
                <td><?php echo e($u->avatar); ?></td>
                <td>
                    <?php if($u->gender == 1): ?>
                    Nam
                    <?php else: ?>
                    Nữ
                    <?php endif; ?>
                </td>
                <td><?php echo e($u->birth_date); ?></td>
                <td><?php echo e($u->address); ?></td>
                <td><a href="./delete?id=<?php echo e($u->id); ?>">Xóa</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\MVCC\app\views/home/about.blade.php ENDPATH**/ ?>