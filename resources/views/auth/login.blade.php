@extends('website.layouts.app')


@php
    use App\Models\Utility;
    $logo = \App\Models\Utility::get_file('uploads/logo');
    $settings = Utility::settings();
    $company_logo = $settings['company_logo'] ?? '';

@endphp
@push('custom-scripts')
    @if ($settings['recaptcha_module'] == 'on')
        {!! NoCaptcha::renderJs() !!}
    @endif
@endpush
@section('page-title')
    {{ __('Login') }}
@endsection

{{-- @section('auth-topbar')
    <li class="nav-item">
        <select class="btn btn-primary ms-2 me-2 language_option_bg text-center" style="text-align-last: center;" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" id="language">
            @foreach (Utility::languages() as $code => $language)
                <option class="text-center" @if ($lang == $code) selected @endif value="{{ route('login',$code) }}">{{ucfirst($language)}}</option>
            @endforeach
        </select>
    </li>

@endsection --}}
@php
    $languages = App\Models\Utility::languages();

@endphp


@section('content')
    <div class="login">

        <img class="left" src="assets/image/Frame 4.png" alt="" />
        <div class="box">
            {{ Form::open(['route' => 'login', 'method' => 'post', 'id' => 'loginForm', 'class' => 'login-form']) }}
            @if (session('status'))
                <div class="mb-4 font-medium text-lg text-green-600 text-danger">
                    {{ session('status') }}
                </div>
            @endif
            <h4 class="text-center  mb-4">تسجيل الدخول</h4>
            <div class="row">
                <div class="col-md-12">
                    <span class="">البريد الالكتروني</span>
                    <div class="form-floating mb-4 mt-2">
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('Enter Your Email')]) }}
                        @error('email')
                            <span class="error invalid-email text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <span class="">كلمة المرور </span>
                    <div class="form-floating mb-4 mt-2">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => __('Enter Your Password'), 'id' => 'input-password']) }}
                    @error('password')
                        <span class="error invalid-password text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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



{{-- 
    <div class="card-body">
        <div>
            <h2 class="mb-3 f-w-600">{{ __('Login') }}</h2>
        </div>
        {{ Form::open(['route' => 'login', 'method' => 'post', 'id' => 'loginForm', 'class' => 'login-form']) }}
        @if (session('status'))
            <div class="mb-4 font-medium text-lg text-green-600 text-danger">
                {{ session('status') }}
            </div>
        @endif
        <div class="custom-login-form">
            <div class="form-group mb-3">
                <label class="form-label">{{ __('Email') }}</label>
                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('Enter Your Email')]) }}
                @error('email')
                    <span class="error invalid-email text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">{{ __('Password') }}</label>
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => __('Enter Your Password'), 'id' => 'input-password']) }}
                @error('password')
                    <span class="error invalid-password text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">

                    @if (Route::has('password.request'))
                        <span><a href="{{ route('password.request', $lang) }}"
                                tabindex="0">{{ __('Forgot your password?') }}</a></span>
                    @endif
                </div>
            </div>


            <div class="d-grid">
                {{ Form::submit(__('Login'), ['class' => 'btn btn-primary mt-2', 'id' => 'saveBtn']) }}
            </div>


        </div>
        {{ Form::close() }}
    </div> --}}
@endsection
