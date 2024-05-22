@extends('website.layouts.app')
@section('content')

    <section class="banner banner--style1 pb-5 home">


        <img
            src="{{ asset('public/assets/image/Rectangle 9546.png') }}"
            style="top: 0px;"
            class="elipse__right__center"
            alt=""
        /><img
            src="{{ asset('public/assets/image/Group 1261152719.png') }}"
            class="elipse__right"
            style="right: 20px; top: 50%"
            alt=""
        /> <img
            src="{{ asset('public/asset/image/Group 48095480 (1).png') }}"
            class="elipse__left"
            style="left: 0px; top: -10%"
            alt=""
        />
        <div class="section pt-5">
            <img src="{{ asset('public/asset/Group (5).png') }}" class="bg__join__img" alt="" />
            <div class="container about__me t">
                <h2 class="text-green text-center">
                   اسعار باقات الاشتراك في تميز
                </h2>
                <p class="text-center mb-5">
                    الأسعار تزيد وفقًا للمُميزات الإضافية  
                </p>
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
                <div
                    class="d-flex  flex-wrap justify-content-center gap-5 flex-wrap pt-5">
                    @foreach($plans as $plan)
                        <div class="col-md-3 col-12" >
                            <div class="box__pricing h-100 d-flex justify-content-between flex-column" data-aos="flip-up" data-aos-duration="1000" style="min-height: 53vh">
                                <div>
                                    <h2>{{$plan->name}}</h2>
                                    <h3 style="text-align: center; color:#1ad550">سنوي</h3>
                                    <ul>
                                        @if($plan->max_users ==-1)
                                            <li class="text-white fs-6">✔ عدد غير محدود من المستخدمين </li>
                                        @else
                                            <li class="text-white fs-6">✔ عدد {{$plan->max_users}} مستخدمًا </li>
                                        @endif
                                        @if($plan->max_customers ==-1)
                                            <li class="text-white fs-6">✔ عدد غير محدود من العملاء </li>
                                        @else
                                            <li class="text-white fs-6">✔ عدد {{$plan->max_users}} عميل </li>
                                        @endif
                                        @if($plan->crm ==1)
                                            <li class="text-white fs-6">✔ نظام CRM </li>
                                        @endif
                                        @if($plan->hrm ==1)
                                            <li class="text-white fs-6">✔ نظام HRM </li>
                                        @endif
                                        @if($plan->pos ==1)
                                            <li class="text-white fs-6">✔ نظام POS للمبيعات  </li>
                                        @endif
                                        @if($plan->account ==1)
                                            <li class="text-white fs-6">✔ نظام ادارة المععاملات المالية </li>
                                        @endif
                                        @if($plan->project ==1)
                                            <li class="text-white fs-6">✔ نظام ادارة المشاريع </li>
                                        @endif
                                        @if($plan->chatgpt ==1)
                                            <li class="text-white fs-6">✔ مدعوم بالذكاء الاصطناعي</li>
                                        @endif
                                        @if($plan->storage_limit )
                                            <li class="text-white fs-6">✔المساحة التخزينية المتاحه {{$plan->storage_limit}} ميجا بايت </li>
                                        @endif
                                    </ul>
                                </div>
                               <div>
                                <span class="mt-4 d-block price">${{ number_format($plan->price, 2, '.', ',') }}</span>
                                <button class="button__blue mt-2">اشترك الان</button>
                               </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>




    </section>
@endsection



