<header class="header-section header-section--style2">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo d-flex align-items-center gap-1">
                    <a href="#-2.html">
                        <img
                            class="dark"
                            style="width: 50px;height: 60px"
                            src="./asset/image/rm281batch2-adj-011 1.svg"
                            alt="logo"
                        />
                    </a>
                    <h4>تميز</h4>
                </div>
                <div class="menu-area">
                    <ul class="menu menu--style1 align-items-center">
                        <li>
                            <a href="<?php echo e(route('website.home')); ?>" class="active">الرئيسية </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('website.price')); ?>">الأسعار</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('website.contact')); ?>">تواصل معنا</a>
                        </li>

                        <li class="nav-item dropdown my-0">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                المظهر الخارجي
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a
                                        class="dropdown-item text-start"
                                        style="text-align: start"
                                        href="#"
                                        onclick="setTheme('blue')"
                                    >الازرق</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item text-start"
                                        style="text-align: start"
                                        href="#"
                                        onclick="setTheme('dark')"
                                    >اسود</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="menu-area">
                                <div class="header-btn d-block d-md-none">
                                    <a href="login.tml" class="text-white"> الدخول </a>
                                    <a href="online" class="text-white">  ابدأ مشروع </a>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-action">
                    <div class="menu-area">
                        <div class="header-btn d-none d-md-block ">
                            <a href="<?php echo e(route('login')); ?>" class="text-white mx-2"> الدخول </a>
                            <a href="<?php echo e(route('website.book')); ?>" class="btn__white outline trk-btn--border trk-btn--primary"><span>ابدأ مشروع</span></a>
                        </div>

                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none header-bar--style1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php /**PATH J:\Systems\تميز ERP\ERP\resources\views/website/layouts/header.blade.php ENDPATH**/ ?>