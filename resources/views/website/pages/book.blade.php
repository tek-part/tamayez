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
        <div class="section pt-5">
            <img src="{{ asset('public/asset/Group (5).png') }}" class="bg__join__img" alt="" />
            <div class="container about__me t">
                <h2 class="text-green text-center">طلب استشارة مجانية اونلاين</h2>
                <p class="text-center mb-5">
                    مهمتنا هي تحويل أفكارك إلى واقع ملموس, سواء في شكل موقع الكتروني او
                    تطبيق جوال
                </p>
                <div class="banner__btn-group btn-group m-auto w-100 d-flex align-items-center justify-content-center pb-5">
                    <a href="https://wa.me/966562005408" class="trk-btn trk-btn--primary trk-btn--arrow btn__tekpart">احصل على النظام</a>

                    <a href="{{route('login')}}" class="button__tp outline"> تجربة المنصة </a>
                </div>
                <img src="{{ asset('public/asset/Group 876.png') }}" class="img" alt="" />

                <img src="{{ asset('public/asset/Ellipse 71.png') }}" class="elipse__left" alt="" />

                <div class="container py-2">
                    <form action="{{ route('book') }}" method="POST" class="box__form" id="book_form">
                        @csrf
                        <div class="row">
                            <!-- Name input -->
                            <div class="col-md-6">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="text"
                                        required
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="floatingInput"
                                        placeholder="الاسم"
                                        name="name"
                                    />
                                    <label for="floatingInput">الاسم</label>
                                    <!-- Error message -->
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Phone input -->
                            <div class="col-md-6">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="number"
                                        required
                                        class="form-control @error('phone') is-invalid @enderror"
                                        id="floatingInput"
                                        placeholder="رقم الهاتف"
                                        name="phone"
                                    />
                                    <label for="floatingInput"رقم الهاتف</label>
                                    <!-- Error message -->
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Email input -->
                            <div class="col-md-12">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <input
                                        type="email"
                                        required
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="floatingInput"
                                        placeholder="name@example.com"
                                        name="email"
                                    />
                                    <label for="floatingInput">الاميل</label>
                                    <!-- Error message -->
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Service input -->
                            <div class="col-md-12">
                                <!-- Validation and disable class added -->
                                <div class="form-floating mb-4 mt-2">
                                    <select
                                        name="pipeline_id"
                                        required
                                        class="form-select @error('pipeline_id') is-invalid @enderror"
                                        id="floatingSelect"
                                        aria-label="Floating label select example"
                                    >
                                        <option selected>الرجاء تحديد الخدمة المطلوبة</option>
                                        @foreach ($pipelines as $pipeline)
                                            <option value="{{ $pipeline['id'] }}">{{ $pipeline['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <!-- Error message -->
                                    @error('pipeline_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Message input -->
                            <div class="col-md-12">
                                <!-- Validation and disable class added -->
                                <div class="form-floating">
                                    <textarea
                                        class="form-control @error('subject') is-invalid @enderror"
                                        placeholder="Leave a comment here"
                                        id="floatingTextarea2"
                                        style="height: 100px"
                                        name="subject"
                                        required
                                    ></textarea>
                                    <label for="floatingTextarea2">اترك لنا رسالة</label>
                                    <!-- Error message -->
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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


    </section>
@endsection



