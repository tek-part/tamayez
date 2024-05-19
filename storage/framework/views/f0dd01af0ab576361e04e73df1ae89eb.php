<?php $__env->startSection('content'); ?>
    <section class="banner banner--style1 pb-5 home">
        <img
            src="assets/image/Rectangle 9546.png"
            style="top: 0px"
            class="elipse__right__center"
            alt=""
        /><img
            src="assets/image/Group 1261152719.png"
            class="elipse__right"
            style="right: 20px; top: 50%"
            alt=""
        />
        <img
            src="assets/image/Group 48095480 (1).png"
            class="elipse__left"
            style="left: 0px; top: -10%"
            alt=""
        />
        <div class="section pt-5">
            <img src="../assets/Group (5).png" class="bg__join__img" alt="" />
            <div class="container about__me t">
                <h2 class="text-green text-center">طلب استشارة مجانية اونلاين</h2>
                <p class="text-center mb-5">
                    مهمتنا هي تحويل أفكارك إلى واقع ملموس, سواء في شكل موقع الكتروني او
                    تطبيق جوال
                </p>
                <div class="banner__btn-group btn-group m-auto w-100 d-flex align-items-center justify-content-center pb-5">
                    <a href="https://wa.me/966562005408" class="trk-btn trk-btn--primary trk-btn--arrow btn__tekpart">احصل على النظام</a>

                    <a href="https://erp.tek-part.com/login" class="button__tp outline"> تجربة المنصة </a>
                </div>
                <img src="../assets/Group 876.png" class="img" alt="" />

                <img src="../assets/Ellipse 71.png" class="elipse__left" alt="" />

                <div class="container py-2">
                    <form action="<?php echo e(route('book')); ?>" method="POST" class="box__form" id="book_form">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <!-- Name input -->
                            <div class="col-md-6">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="text"
                                        required
                                        class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="floatingInput"
                                        placeholder="الاسم"
                                        name="name"
                                    />
                                    <label for="floatingInput">الاسم</label>
                                    <!-- Error message -->
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!-- Phone input -->
                            <div class="col-md-6">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="number"
                                        required
                                        class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="floatingInput"
                                        placeholder="رقم الهاتف"
                                        name="phone"
                                    />
                                    <label for="floatingInput"رقم الهاتف</label>
                                    <!-- Error message -->
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!-- Email input -->
                            <div class="col-md-12">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="email"
                                        required
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                        name="email"
                                    />
                                    <label for="floatingInput">الاميل</label>
                                    <!-- Error message -->
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!-- Service input -->
                            <div class="col-md-12">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <select
                                        name="pipeline_id"
                                        required
                                        class="form-select <?php $__errorArgs = ['pipeline_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="floatingSelect"
                                        aria-label="Floating label select example"
                                    >
                                        <option selected>الرجاء تحديد الخدمة المطلوبة</option>
                                        <?php $__currentLoopData = $pipelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pipeline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($pipeline['id']); ?>"><?php echo e($pipeline['name']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <!-- Error message -->
                                    <?php $__errorArgs = ['pipeline_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!-- Message input -->
                            <div class="col-md-12">
                                <!-- Validation and disable class added -->
                                <div class="form-floating">
                                    <textarea
                                        class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        placeholder="Leave a comment here"
                                        id="floatingTextarea2"
                                        style="height: 100px"
                                        name="subject"
                                        required
                                    ></textarea>
                                    <label for="floatingTextarea2">اترك لنا رسالة</label>
                                    <!-- Error message -->
                                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <button
                            type="submit"
                            class="btn__tekpart my-5 m-auto text-center m-auto text-center d-flex align-items-center justify-content-center"
                            style="width: fit-content; width: 240px"
                        >
                        احجز مقابلتك
                        </button>
                    </form>
        
                </div>
            </div>
        </div>


        <div class="container">
            <div class="footer_2">
                <div class="d-flex justify-content-between">
                    <p>جميع الحقوق محفوظة لدى شركة تك بارت</p>
                    <p>سياسات الخصوصية</p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Systems\تميز ERP\tamayez\resources\views/website/pages/book.blade.php ENDPATH**/ ?>