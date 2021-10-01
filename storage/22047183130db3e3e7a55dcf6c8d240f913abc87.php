
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
    .btn{
        margin: 1rem 0;
    }
</style>
<a class="btn btn-info" style="margin-bottom: 0"href="./add">Thêm</a>
<h2 style="text-align: center">Danh sách thành viên</h2>
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
                <td><img width="80px" src="<?php echo e($u->avatar); ?>" alt=""></td>
                <td>
                    <?php if($u->gender == 1): ?>
                    Nam
                    <?php else: ?>
                    Nữ
                    <?php endif; ?>
                </td>
                <td><?php echo e($u->birth_date); ?></td>
                <td><?php echo e($u->address); ?></td>
                <td><a class="btn btn-secondary" href="./edit?id=<?php echo e($u->id); ?>">edit</a></td>
                <td><a class="btn btn-danger" href="./del?id=<?php echo e($u->id); ?>">Xóa</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\MVCC\app\views/home/user.blade.php ENDPATH**/ ?>