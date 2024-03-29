@extends('layouts.auth')

@section('content')
    <div class="container-fluid no-padding h-100">
        <div class="row flex-row h-100 bg-white">
            <!-- Begin Left Content -->
            <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                <div class="elisyam-bg background-03">
                    <div class="elisyam-overlay overlay-08"></div>
                    <div class="authentication-col-content-2 mx-auto text-center">
                        <div class="logo-centered">
                            <a href="{{route('site.index')}}">
                                <img src="{{asset('assets/cms/img/logo-light.svg')}}" alt="logo">
                            </a>
                        </div>
                        <h2>Онлайн-школа<br>иностранных языков</h2>
                        <ul class="login-nav nav nav-tabs mt-5 justify-content-center">
                            <li><a class="@if(Request::route()->getName() == 'login') active @endif"
                                   href="{{route('login')}}">{{ __("Sign In") }}</a></li>
                            <li><a class="@if(Request::route()->getName() == 'register') active @endif"
                                   href="{{route('register')}}">{{ __("Sign Up") }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Begin Right Content -->
            <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                <!-- Begin Form -->
                <div class="authentication-form-2 mx-auto">
                    <div role="tabpanel" class="tab-pane" id="signup" aria-labelledby="signup-tab">
                        <h3>{{ __("Create An Account") }}</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="group material-input">
                                <input type="text" name="name" value="{{ old('name') }}" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>{{__("Name")}}</label>
                                @error('name')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="group material-input">
                                <input type="text" name="surname" value="{{ old('surname') }}" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>{{__("Surname")}}</label>
                                @error('surname')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="group material-input">
                                <input type="text" name="email" value="{{ old('email') }}" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>{{__("Email")}}</label>
                                @error('email')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="group material-input">
                                <input type="password" name="password" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>{{__("Password")}}</label>
                                @error('password')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="group material-input">
                                <input type="password" name="password_confirmation" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>{{__("Confirm Password")}}</label>
                            </div>

                            {{-- Choosing User Role --}}
                            <div class="group">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-left mb-3 mr-5">
                                            <div class="styled-radio">
                                                <input type="radio" name="user_type" id="user_student" value="student" checked>
                                                <label for="user_student">{{ __("Register as Student") }}</label>
                                            </div>
                                        </div>
                                        <div class="text-left mb-3">
                                            <div class="styled-radio">
                                                <input type="radio" name="user_type" id="user_teacher" value="teacher">
                                                <label for="user_teacher">{{ __("Register as Teacher") }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group">
                                <div class="agreement-container student-agreement teacher-agreement">
                                    <div class="styled-checkbox">
                                        <input type="checkbox" name="agreement" id="agree">
                                        <label for="agree">
                                            {{__("I Accept")}} <a href="#" target="_blank">{{__("Terms and Conditions")}}</a>
                                        </label>
                                    </div>
                                    @error('agreement')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="agreement-container teacher-agreement hide">
                                    <div class="styled-checkbox">
                                        <input type="checkbox" name="lease-contract" id="lease_contract">
                                        <label for="lease_contract">
                                            {{__("I Accept")}} <a href="#" target="_blank">{{__("Lease Contract")}}</a>
                                        </label>
                                    </div>
                                    @error('lease-contract')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="sign-btn text-center">
                                <button type="submit" class="btn btn-lg btn-gradient-01">
                                    {{ __("Sign Up") }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script src="{{asset('assets/cms/js/custom.js')}}"></script>
@endsection

