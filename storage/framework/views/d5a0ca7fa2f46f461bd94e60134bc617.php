<?php
    use App\Models\Utility;
    $logo = \App\Models\Utility::get_file('uploads/logo');
    $settings = Utility::settings();
    $company_logo = $settings['company_logo'] ?? '';

?>
<?php $__env->startPush('custom-scripts'); ?>
    <?php if($settings['recaptcha_module'] == 'on'): ?>
        <?php echo NoCaptcha::renderJs(); ?>

    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>


<?php
    $languages = App\Models\Utility::languages();

?>


<?php $__env->startSection('content'); ?>
    <div class="login">

        <img class="left" src="assets/image/Frame 4.png" alt="" />
        <div class="box">
            <?php echo e(Form::open(['route' => 'login', 'method' => 'post', 'id' => 'loginForm', 'class' => 'login-form'])); ?>

            <?php if(session('status')): ?>
                <div class="mb-4 font-medium text-lg text-green-600 text-danger">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <h4 class="text-center  mb-4">تسجيل الدخول</h4>
            <div class="row">
                <div class="col-md-12">
                    <span class="">البريد الالكتروني</span>
                    <div class="form-floating mb-4 mt-2">
                        <?php echo e(Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('Enter Your Email')])); ?>

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error invalid-email text-danger" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <span class="">كلمة المرور </span>
                    <div class="form-floating mb-4 mt-2">
                    <?php echo e(Form::password('password', ['class' => 'form-control', 'placeholder' => __('Enter Your Password'), 'id' => 'input-password'])); ?>

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error invalid-password text-danger" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            </div>
            <button
                class="btn__tekpart w-50 m-auto text-center m-auto text-center d-flex align-items-center justify-content-center"
                style="width: fit-content; width: 200px" type="submit">
                دخول
            </button>
            </form>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Systems\تميز ERP\tamayez\resources\views/auth/login.blade.php ENDPATH**/ ?>