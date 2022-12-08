<?php $__env->startSection('title-block'); ?>
    Добавление нового авто

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    Добавить новый автомобиль
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST"
    <?php if(isset($avto)): ?>
        action="<?php echo e(route('avtos.update',$avto , $avto)); ?>" >
        <?php echo csrf_field(); ?>
    <?php else: ?>
        action="<?php echo e(route('avtos.store', $user)); ?>" >
        <?php echo csrf_field(); ?>
    <?php endif; ?>



    <?php if(isset($avto)): ?>
        <?php echo method_field('put'); ?>
    <?php endif; ?>




        <div class="container">
            <div class="row">
                

                <div class="col-sm">

                    <div class="form-group ">
                        <label for="formGroupExampleInput">Марка Авто</label>
                        <input type="text" name="marka"
                               value="<?php echo e(old('marka',isset($avto) ? $avto->marka : null)); ?>"
                               class="form-control " id="formGroupExampleInput" placeholder="Введите Марку Авто">
                        <?php $__errorArgs = ['marka'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Модель</label>
                        <input type="text" name="model"
                               value="<?php echo e(old('model',isset($avto) ? $avto->model : null)); ?>"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Модель авто">
                        <?php $__errorArgs = ['model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Цвет автомобиля</label>
                        <input type="text" name="color"
                               value="<?php echo e(old('color',isset($avto) ? $avto->color : null)); ?>"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Цвет автомобиля">
                        <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Гос. номер машины</label>
                        <input type="text" name="gos_num"
                               value="<?php echo e(old('gos_num',isset($avto) ? $avto->gos_num : null)); ?>"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Гос. номер машины">
                        <?php $__errorArgs = ['gos_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                </div>
            </div>
        </div>

        <div class="form-group m-2">
            <button class="btn btn-lg btn-secondary fw-bold border-white bg-dark" type="submit"><?php echo e(isset($avto) ? 'Сохранить'  : 'Добавить'); ?></button>
            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">назад</a>
            </p>
        </div>



    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('yaled.pattern', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Project\example-app\resources\views/avto_new.blade.php ENDPATH**/ ?>