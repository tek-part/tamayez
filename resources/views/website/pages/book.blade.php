@extends('website.layouts.app')
@section('content')
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

                <div class="container py-5">
                    <form action="" class="box__form">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="">الاسم</span>
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput">الاسم</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="">رقم الجوال</span>

                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput">رقم الجوال...</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span>البريد الالكتروني</span>
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput">البريد الالكتروني</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span>الدولة</span>
                                <div class="form-floating mb-4 mt-2">
                                    <select
                                        class="form-select form-select arrow-left"
                                        id="floatingSelect"
                                        aria-label="Floating label select example"
                                    >
                                        <option selected>الرجاء اختيار الدولة...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span>الخدمة المطلوبة</span>
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput"
                                    >الرجاء اختيار الخدمة المطلوبة...</label
                                    >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span>المسمى الوظيفي</span>
                                <div class="form-floating mb-4 mt-2">
                                    <select
                                        class="form-select"
                                        id="floatingSelect"
                                        aria-label="Floating label select example"
                                    >
                                        <option selected>الرجاء اختيار المسمى الوظيفي...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                    <textarea
                        class="form-control"
                        placeholder="Leave a comment here"
                        id="floatingTextarea2"
                        style="height: 100px"
                    ></textarea>
                                    <label for="floatingTextarea2">اترك لنا رسالة </label>
                                </div>
                            </div>
                        </div>
                        <button
                            class="btn__tekpart my-5 m-auto text-center m-auto text-center d-flex align-items-center justify-content-center"
                            style="width: fit-content; width: 240px"
                        >
                            احجز مقابلتك
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="section">
            <img
                src="assets/image/Cube6 - Transparent (1).png"
                class="elipse__left"
                style="width: 200px; top: 0px; transform: translate(-50)"
                alt=""
            />
            <img
                src="assets/image/Rectangle 9545.png"
                class="elipse__left"
                style="left: 0px; bottom: -132%"
                alt=""
            />
            <div class="section-header text-center mb-3">
                <h2 class="mt-minus-5">عملائنا وشركاء النجاج</h2>
            </div>

            <div class="container">
                <img src="../assets/Group 876.png" class="img" alt="" />
                <div class="about__wrapper px-5">
                    <div class="row gx-5 px-5 gy-4 gy-sm-0 align-items-center"></div>
                    <div class="contact">
                        <h5>لا تدع شيئا يفوتك</h5>
                        <span>ادخل بريدك الالكتروني وسوف تستمتع بنشرتنا الاخبارية</span>
                        <div class="d-flex align-items-center gap-2 pt-5 w-75 m-auto">
                            <input type="text" placeholder="البريد الالكتروني" />
                            <button class=" ">اشترك</button>
                        </div>
                    </div>
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
@endsection



