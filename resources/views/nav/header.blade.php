
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>Change Language</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    
                                    <li><a href="en">English</a></li>
                                    <li><a href="sw">Kiswahili</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="login"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">{{__('message.home')}}</</a></li>
                            {{-- <li><a href="./shop-grid.html">Shop</a></li> --}}
                            <li><a href="#">{{__('message.product.name')}}</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">{{__('message.product.animals')}}</a></li>
                                   
                                    <li><a href="./shoping-cart.html">{{__('message.product.cash_crops')}}</a></li>
                                    <li><a href="./checkout.html">{{__('message.product.food_crops')}}</a></li>
                                    <li><a href="./blog-details.html">{{__('message.product.birds')}}</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">{{__('TRAININGS')}}</</a></li>
                            <li><a href="#">{{__('message.company.name')}}</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">About Us</a></li>
                                    <li><a href="./shoping-cart.html">Our Vision</a></li>
                                    <li><a href="./checkout.html">Our Values</a></li>
                                    {{-- <li><a href="./blog-details.html">Blog Details</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li><a href="./blog.html">Blog</a></li> --}}
                            <li><a href="./contact.html">{{__('message.contacts')}}</</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-1">
                    
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            {{-- <li><a href="#"><i class="fa fa-hea"></i> <span></span></a></li> --}}
                           
                        </ul>
                        {{-- <div class="header__cart__pric"><span></span></div> --}}
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span><small>{{__('message.category.name')}}</small></span>
                        </div>
                        <ul>
                            <li><a href="#">{{__('message.category.maize')}}</a></li>
                            <li><a href="#">{{__('message.category.beans')}}</a></li>
                            <li><a href="#">{{__('message.category.rice')}}</a></li>
                            <li><a href="#">{{__('message.category.tomato')}}</a></li>
                            {{-- <li><a href="#">{{__('message.category.maize')}}</a></li>
                            <li><a href="#">{{__('message.category.maize')}}</a></li>
                            <li><a href="#">{{__('message.category.maize')}}</a></li>
                            <li><a href="#">{{__('message.category.maize')}}</a></li>
                            <li><a href="#">{{__('message.category.maize')}}</a></li>
                            <li><a href="#">{{__('message.category.maize')}}</a></li>
                            <li><a href="#">{{__('message.category.maize')}}</a></li> --}}
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                {{-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> --}}
                                <input type="text" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+255 782 776 467</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available At Dar es salam</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
