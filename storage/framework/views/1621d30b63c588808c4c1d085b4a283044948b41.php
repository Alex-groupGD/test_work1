<?php $__env->startSection('title-block'); ?>
    <?php echo e(isset($user) ? 'Изменение данных'.$user->name : 'Регистрация'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(isset($user) ? 'Изменение данных' ." ".$user->name : 'Регистрация'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST"
          <?php if(isset($user)): ?>
            action="<?php echo e(route('users.update', $user)); ?>" >
        <?php echo csrf_field(); ?>
          <?php else: ?>
            action="<?php echo e(route('users.store')); ?>" >
            <?php echo csrf_field(); ?>
        <?php endif; ?>



             <?php if(isset($user)): ?>
                 <?php echo method_field('put'); ?>
              <?php endif; ?>




            <div class="container">
                <div class="row">
                    <div class="col-sm">



            <div class="form-group ">
                <label for="formGroupExampleInput">Фамилия</label>
                <input type="text" name="family"
                       value="<?php echo e(old('family',isset($user) ? $user->family : null)); ?>"
                       class="form-control " id="formGroupExampleInput" placeholder="Введите фамилию">
                        <?php $__errorArgs = ['family'];
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
                <label for="formGroupExampleInput2">Имя</label>
                <input type="text" name="name"
                       value="<?php echo e(old('name',isset($user) ? $user->name : null)); ?>"
                       class="form-control" id="formGroupExampleInput2" placeholder="Введите Имя">
                        <?php $__errorArgs = ['name'];
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
                <label for="formGroupExampleInput2">Отчество</label>
                <input type="text" name="name_father"
                       value="<?php echo e(old('name_father',isset($user) ? $user->name_father : null)); ?>"
                       class="form-control" id="formGroupExampleInput2" placeholder="Введите Отчество">
                        <?php $__errorArgs = ['name_father'];
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
                <label for="formGroupExampleInput2">Телефон</label>
                <input type="text" name="telephone"
                       value="<?php echo e(isset($user) ? $user->telephone : null); ?>"
                       class="form-control" id="formGroupExampleInput2" placeholder="Введите Телефон 79999999999">
                <?php $__errorArgs = ['telephone'];
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
                <label for="formGroupExampleInput2">Ваш пол:</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio" name="gender"
                           value="<?php echo e(isset($user) ? $user->gender : 1); ?>"
                           class="custom-control-input">
                    <label class="custom-control-label" for="customRadio">Мужской</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio" name="gender"
                           value="<?php echo e(isset($user) ? $user->gender : 0); ?>"
                           class="custom-control-input">
                    <label class="custom-control-label" for="customRadio">Женский</label>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Адресс</label>
                <input type="text" name="adress"
                       value="<?php echo e(isset($user) ? $user->adress : null); ?>"
                       class="form-control" id="formGroupExampleInput2" placeholder="Введите Адресс">
                    </div>
                    </div>
            

                <?php if(!isset($user)): ?>
                    <div class="col-sm">

                        <div class="form-group ">
                            <label for="formGroupExampleInput">Марка Авто</label>
                            <input type="text" name="marka"
                                   value="<?php echo e(old('marka',isset($avto) ? $avto->marka : null)); ?>"
                                   class="form-control " id="formGroupExampleInput" placeholder="Введите Марку Авто">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Модель</label>
                            <input type="text" name="model"
                                   value="<?php echo e(old('model',isset($avto) ? $avto->model : null)); ?>"
                                   class="form-control" id="formGroupExampleInput2" placeholder="Введите Модель авто">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Цвет автомобиля</label>
                            <input type="text" name="color"
                                   value="<?php echo e(old('color',isset($avto) ? $avto->color : null)); ?>"
                                   class="form-control" id="formGroupExampleInput2" placeholder="Введите Цвет автомобиля">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Гос. номер машины</label>
                            <input type="text" name="gos_num"
                                   value="<?php echo e(isset($avto) ? $avto->gos_num : null); ?>"
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
                <?php else: ?>
              <?php endif; ?>


            <div class="form-group m-2">
                <button class="btn btn-lg btn-secondary fw-bold border-white bg-dark" type="submit"><?php echo e(isset($user) ? 'Сохранить'  : 'создать'); ?></button>
                <a href="<?php echo e(route('users.index')); ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">назад</a>
                </p>
            </div>



    </form>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('yaled.pattern', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Project\example-app\resources\views/sign.blade.php ENDPATH**/ ?>