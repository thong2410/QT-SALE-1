@extends('layout')
@section('content')

<section class="checkout spad ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Do you have an account yet?</a> </h6>
                </div>
            </div>
            <form action="#" class="checkout__form ">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h5>Login</h5>
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>User Name<span>*</span></p>
                                    <input type="text" placeholder="User Name">
                                </div> 
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__checkbox">
                                    <div class="checkout__form__input">
                                        <p>Account Password <span>*</span></p>
                                        <input type="password"placeholder="Account Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="site-btn">Login</button>
                    </div>
                    <div class="col-lg-2"></div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->
        @endsection