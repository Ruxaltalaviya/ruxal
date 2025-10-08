<header id="masthead" class="site-header clearfix" itemscope itemtype="http://schema.org/WPHeader">
    <p class="site-name" itemprop="headline">Soundkraft</p>
    <p class="site-description" itemprop="description"></p>
    <div id="header-content">

        <div id="desktop-navigation" class="clearfix site--nav">
            <div id="nav-bar" class="nav-bar" data-menu-layout="top-justify-left">
                <div class="flex-wrap">
                    <div class="logo-container"> <a href="{{ route('home') }}"></a>
                        <div class="logo loading-anim-logo">S</div>
                        <div class="secondary-logo">oundkraft</div>
                    </div>
                    <nav class="menu-container" itemscope="itemscope"
                        itemtype="http://schema.org/SiteNavigationElement">
                        <div class="menu-primary-menu-container">
                            <ul id="site-navigation-primary-desktop" class="nav-menu nav-menu-desktop">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-parent-item menu-item-16 menu-item-16 menu-item-icon-before mega-menu-4-cols">
                                    <a href="{{ route('home') }}" class="menu-link" itemprop="url"><span
                                            class="menu-item-inner"><span
                                                class="menu-item-text-container"
                                                itemprop="name">Home</span></span></a>
                                   
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-18 menu-item-18 menu-item-icon-before mega-menu-4-cols">
                                    <a href="{{ route('about')}}" class="menu-link" itemprop="url"><span
                                            class="menu-item-inner"><span
                                                class="menu-item-text-container"
                                                itemprop="name">About</span></span></a>
                                 
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-19 menu-item-19 mega-menu menu-item-icon-before mega-menu-3-cols">
                                    <a href="{{route('contact')}}" class="menu-link" itemprop="url"><span
                                            class="menu-item-inner"><span
                                                class="menu-item-text-container"
                                                itemprop="name">Contact us</span></span></a>
                                   
                                </li>
                                <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-19 menu-item-19 mega-menu menu-item-icon-before mega-menu-3-cols">
                                <a href="{{route('event')}}" class="menu-link" itemprop="url"><span
                                        class="menu-item-inner"><span
                                            class="menu-item-text-container"
                                            itemprop="name">event</span></span></a>
                               
                            </li>
                            <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-19 menu-item-19 mega-menu menu-item-icon-before mega-menu-3-cols">
                            <a href="{{route('store')}}" class="menu-link" itemprop="url"><span
                                    class="menu-item-inner"><span
                                        class="menu-item-text-container"
                                        itemprop="name">Store</span></span></a>
                           
                        </li>
                            </ul>
                        </div>
                    </nav>
                   
                </div>
            </div>
        </div>
        

        <div id="mobile-navigation" class="site--nav">
            <div id="mobile-bar" class="nav-bar">
                <div class="flex-mobile-wrap">
                    <div class="logo-container"> <a href="{{route('home')}}"></a>
                        <div class="logo loading-anim-logo">S</div>
                        <div class="secondary-logo">oundkraft</div>
                    </div>
                    <div class="cta-container"></div>
                    <div class="hamburger-container"> <button
                            class="hamburger-link toggle-mobile-menu unbutton side-panel-hamburger">
                            <span class="hamburger-btn__hamburger"> <span
                                    class="hamburger-btn__span hbgl--1"></span> <span
                                    class="hamburger-btn__span hbgl--3"></span> </span> </button></div>
                </div>
            </div>
        </div>
    </div>
</header>