


<?php $__env->startSection('title-block'); ?>
    Наши клиенты
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <h1>Список клиентов</h1>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <div class="row">
        <ul class="list-group">

            <li class="list-group-item"><?php echo e($value->family); ?> <?php echo e($value->name); ?> <?php echo e($value->name_father); ?> <?php echo e($value->telephone); ?>

                <form method="POST" action="<?php echo e(route('users.destroy' , $value->id )); ?>">
                    <a href="<?php echo e(route('users.edit' , $value->id )); ?>" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>
                    <a href="<?php echo e(route('users.show' , $value->id)); ?>" class="btn  btn-secondary fw-bold border-white bg-dark">Мои машины</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn  btn-secondary fw-bold border-white bg-dark">Удалить</button>

                </form>
            </li>
        </ul>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('yaled.pattern', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Project\example-app\resources\views/all_clients_page.blade.php ENDPATH**/ ?>