<?php $__env->startSection('title-block'); ?>
    Главная страница
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <main class="px-3">
        <h1>Стань участником парковки.</h1>
        <p class="lead">Позволь нам выполнять отчет по нахождению автомобиля. Мы предлагаем,неограниченное количесвто мест, а также безопасность.</p>
        <p class="lead">
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">Стать участником</a>
        </p>
    </main>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('yaled.pattern', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Project\example-app\resources\views/main.blade.php ENDPATH**/ ?>