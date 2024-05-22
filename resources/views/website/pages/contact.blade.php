@extends('website.layouts.app')
@section('content')
<section class="banner banner--style1 pb-5 home">
    <img
        src="{{ asset('public/asset/image/Rectangle 9546.png') }}"
        style="top: 0px"
        class="elipse__right__center"
        alt=""
    /><img
        src="{{ asset('public/asset/image/Group 1261152719.png') }}"
        class="elipse__right"
        style="right: 20px; top: 50%"
        alt=""
    />
    <img
        src="{{ asset('public/asset/image/Group 48095480 (1).png') }}"
        class="elipse__left"
        style="left: 0px; top: -10%"
        alt=""
    />
        <div class="section pt-2">
            <img src="{{ asset('public/asset/Group (5).png') }}" class="bg__join__img" alt="" />
            <div class="container about__me t">
                <h2 class="text-green text-center">
                   تواصل معنا الان
                </h2>
           
                <div
                    class="banner__btn-group btn-group m-auto w-100 d-flex align-items-center justify-content-center pb-5"
                >
                    <a
                        href="#"
                        class="trk-btn trk-btn--primary trk-btn--arrow btn__tekpart"
                    >احصل على النظام
                    </a>

                    <a href="" class="button__tp outline"> تجربة المنصة </a>
                </div>
                <img src="{{ asset('public/asset/Group 876.png') }}" class="img" alt="" />

                <div class="container py-5">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput">الإسم الأول</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput">الإسم الثاني</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                    />
                                    <label for="floatingInput">رقم الهاتف</label>
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
                            class="btn__tekpart w-50 my-5 m-auto text-center m-auto text-center d-flex align-items-center justify-content-center"
                            style="width: fit-content; width: 200px"
                        >
                            إرسال
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
@endsection



