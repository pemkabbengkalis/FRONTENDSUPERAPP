<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Riho {{ asset('theme') }}" name="q" title=""
                            autofocus="autofocus" />
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading{{ asset('theme') }}. </span></div><i class="close-search"
                            data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"> </div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"> <a href="{{ asset('theme') }}/template/index.html"><img
                        class="img-fluid for-light" src="{{ asset('theme') }}/assets/images/logo/logo_dark.png"
                        alt="" /><img class="img-fluid for-dark"
                        src="{{ asset('theme') }}/assets/images/logo/logo.png" alt="" /></a></div>
            <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div> <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
                <div class="d-flex align-items-center gap-2 ">
                    <h4 class="f-w-600">Welcome Alex</h4><img class="mt-0"
                        src="{{ asset('theme') }}/assets/images/hand.gif" alt="hand-gif" />
                </div>
            </div>
            <div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12">Here’s what’s
                    happening with your store today. </span></div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                <li class="d-md-block d-none">
                    <div class="form search-form mb-0">
                        <div class="input-group"> <span class="input-icon">
                                <svg>
                                    <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#search-header"></use>
                                </svg>
                                <input class="w-100" type="search" placeholder="Search" /></span></div>
                    </div>
                </li>
                <li class="d-md-none d-block">
                    <div class="form search-form mb-0">
                        <div class="input-group"> <span class="input-show">
                                <svg id="searchIcon">
                                    <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#search-header"></use>
                                </svg>
                                <div id="searchInput">
                                    <input type="search" placeholder="Search" />
                                </div>
                            </span></div>
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <svg>
                        <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#star"></use>
                    </svg>
                    <div class="onhover-show-div bookmark-flip">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="front">
                                    <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                    <ul class="bookmark-dropdown">
                                        <li>
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="file-text"></i>
                                                        </div><span>Forms</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="user"></i></div>
                                                        <span>Profile</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i data-feather="server"></i>
                                                        </div><span>Tables</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn"
                                                href="javascript:void(0)">Add New Bookmark</a></li>
                                    </ul>
                                </div>
                                <div class="back">
                                    <ul>
                                        <li>
                                            <div class="bookmark-dropdown flip-back-content">
                                                <input type="text" placeholder="search{{ asset('theme') }}." />
                                            </div>
                                        </li>
                                        <li><a class="f-w-700 d-block flip-back" id="flip-back"
                                                href="javascript:void(0)">Back</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mode"><i class="moon" data-feather="moon"> </i></div>
                </li>
                <li class="onhover-dropdown notification-down">
                    <div class="notification-box">
                        <svg>
                            <use href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#notification-header"></use>
                        </svg><span class="badge rounded-pill badge-secondary">4 </span>
                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="common-space">
                                    <h4 class="text-start f-w-600">Notitications</h4>
                                    <div><span>4 New</span></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="notitications-bar">
                                    <ul class="nav nav-pills nav-primary p-0" id="pills-tab" role="tablist">
                                        <li class="nav-item p-0"> <a class="nav-link active" id="pills-aboutus-tab"
                                                data-bs-toggle="pill" href="#pills-aboutus" role="tab"
                                                aria-controls="pills-aboutus" aria-selected="true">All(3)</a></li>
                                        <li class="nav-item p-0"> <a class="nav-link" id="pills-blog-tab"
                                                data-bs-toggle="pill" href="#pills-blog" role="tab"
                                                aria-controls="pills-blog" aria-selected="false">
                                                Messages</a></li>
                                        <li class="nav-item p-0"> <a class="nav-link" id="pills-contactus-tab"
                                                data-bs-toggle="pill" href="#pills-contactus" role="tab"
                                                aria-controls="pills-contactus" aria-selected="false">
                                                Cart </a></li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-aboutus" role="tabpanel"
                                            aria-labelledby="pills-aboutus-tab">
                                            <div class="user-message">
                                                <div class="cart-dropdown notification-all">
                                                    <ul>
                                                        <li class="pr-0 pl-0 pb-3 pt-3">
                                                            <div class="media"><img
                                                                    class="img-fluid b-r-5 me-3 img-60"
                                                                    src="{{ asset('theme') }}/assets/images/other-images/receiver-img.jpg"
                                                                    alt="" />
                                                                <div class="media-body"><a class="f-light f-w-500"
                                                                        href="{{ asset('theme') }}/template/product.html">Men
                                                                        Blue
                                                                        T-Shirt</a>
                                                                    <div class="qty-box">
                                                                        <div class="input-group"> <span
                                                                                class="input-group-prepend">
                                                                                <button class="btn quantity-left-minus"
                                                                                    type="button" data-type="minus"
                                                                                    data-field="">-
                                                                                </button></span>
                                                                            <input class="form-control input-number"
                                                                                type="text" name="quantity"
                                                                                value="1" /><span
                                                                                class="input-group-prepend">
                                                                                <button class="btn quantity-right-plus"
                                                                                    type="button" data-type="plus"
                                                                                    data-field="">+</button></span>
                                                                        </div>
                                                                    </div>
                                                                    <h6 class="font-primary">$695.00</h6>
                                                                </div>
                                                                <div class="close-circle"><a class="bg-danger"
                                                                        href="#"><i data-feather="x"></i></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="user-alerts"><img
                                                                class="user-image rounded-circle img-fluid me-2"
                                                                src="{{ asset('theme') }}/assets/images/dashboard/user/5.jpg"
                                                                alt="user" />
                                                            <div class="user-name">
                                                                <div>
                                                                    <h6><a class="f-w-500 f-14"
                                                                            href="{{ asset('theme') }}/template/user-profile.html">Floyd
                                                                            Miles</a></h6><span
                                                                        class="f-light f-w-500 f-12">Sir, Can i
                                                                        remove part in
                                                                        des{{ asset('theme') }}.</span>
                                                                </div>
                                                                <div>
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#more-vertical">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="user-alerts"><img
                                                                class="user-image rounded-circle img-fluid me-2"
                                                                src="{{ asset('theme') }}/assets/images/dashboard/user/6.jpg"
                                                                alt="user" />
                                                            <div class="user-name">
                                                                <div>
                                                                    <h6><a class="f-w-500 f-14"
                                                                            href="{{ asset('theme') }}/template/user-profile.html">Dianne
                                                                            Russell</a></h6><span
                                                                        class="f-light f-w-500 f-12">So, what is my
                                                                        next work ?</span>
                                                                </div>
                                                                <div>
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('theme') }}/assets/svg/icon-sprite.svg#more-vertical">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-blog" role="tabpanel"
                                            aria-labelledby="pills-blog-tab">
                                            <div class="notification-card">
                                                <ul>
                                                    <li
                                                        class="notification d-flex w-100 justify-content-between align-items-center">
                                                        <div
                                                            class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                            <div class="user-alerts flex-shrink-0"><img
                                                                    class="rounded-circle img-fluid img-40"
                                                                    src="{{ asset('theme') }}/assets/images/dashboard/user/3.jpg"
                                                                    alt="user" /></div>
                                                            <div class="flex-grow-1">
                                                                <div class="common-space user-id w-100">
                                                                    <div class="common-space w-100"> <a
                                                                            class="f-w-500 f-12"
                                                                            href="{{ asset('theme') }}/template/private-chat.html">Robert
                                                                            D. Hambly</a></div>
                                                                </div>
                                                                <div><span class="f-w-500 f-light f-12">Hello
                                                                        Miss{{ asset('theme') }}.😊</span></div>
                                                            </div><span class="f-light f-w-500 f-12">44 sec</span>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="notification d-flex w-100 justify-content-between align-items-center">
                                                        <div
                                                            class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                            <div class="user-alerts flex-shrink-0"><img
                                                                    class="rounded-circle img-fluid img-40"
                                                                    src="{{ asset('theme') }}/assets/images/dashboard/user/7.jpg"
                                                                    alt="user" /></div>
                                                            <div class="flex-grow-1">
                                                                <div class="common-space user-id w-100">
                                                                    <div class="common-space w-100"> <a
                                                                            class="f-w-500 f-12"
                                                                            href="{{ asset('theme') }}/template/private-chat.html">Courtney
                                                                            C. Strang</a></div>
                                                                </div>
                                                                <div><span class="f-w-500 f-light f-12">Wishing You
                                                                        a Happy Birthday Dear{{ asset('theme') }}
                                                                        🥳🎊</span></div>
                                                            </div><span class="f-light f-w-500 f-12">52 min</span>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="notification d-flex w-100 justify-content-between align-items-center">
                                                        <div
                                                            class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                            <div class="user-alerts flex-shrink-0"><img
                                                                    class="rounded-circle img-fluid img-40"
                                                                    src="{{ asset('theme') }}/assets/images/dashboard/user/5.jpg"
                                                                    alt="user" /></div>
                                                            <div class="flex-grow-1">
                                                                <div class="common-space user-id w-100">
                                                                    <div class="common-space w-100"> <a
                                                                            class="f-w-500 f-12"
                                                                            href="{{ asset('theme') }}/template/private-chat.html">Raye
                                                                            T. Sipes</a></div>
                                                                </div>
                                                                <div><span class="f-w-500 f-light f-12">Hello
                                                                        Dear!! This Theme Is Very beautiful</span>
                                                                </div>
                                                            </div><span class="f-light f-w-500 f-12">48 min</span>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="notification d-flex w-100 justify-content-between align-items-center">
                                                        <div
                                                            class="d-flex w-100 notification-data justify-content-center align-items-center gap-2">
                                                            <div class="user-alerts flex-shrink-0"><img
                                                                    class="rounded-circle img-fluid img-40"
                                                                    src="{{ asset('theme') }}/assets/images/dashboard/user/6.jpg"
                                                                    alt="user" /></div>
                                                            <div class="flex-grow-1">
                                                                <div class="common-space user-id w-100">
                                                                    <div class="common-space w-100"> <a
                                                                            class="f-w-500 f-12"
                                                                            href="{{ asset('theme') }}/template/private-chat.html">Henry
                                                                            S. Miller</a></div>
                                                                </div>
                                                                <div><span class="f-w-500 f-light f-12">You’re
                                                                        older today than yesterday, happy
                                                                        birthday!</span></div>
                                                            </div><span class="f-light f-w-500 f-12">3 min</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contactus" role="tabpanel"
                                            aria-labelledby="pills-contactus-tab">
                                            <div class="cart-dropdown mt-4">
                                                <ul>
                                                    <li class="pr-0 pl-0 pb-3">
                                                        <div class="media"><img class="img-fluid b-r-5 me-3 img-60"
                                                                src="{{ asset('theme') }}/assets/images/other-images/cart-img.jpg"
                                                                alt="" />
                                                            <div class="media-body"><a class="f-light f-w-500"
                                                                    href="{{ asset('theme') }}/template/product.html">Furniture
                                                                    Chair
                                                                    for Home</a>
                                                                <div class="qty-box">
                                                                    <div class="input-group"> <span
                                                                            class="input-group-prepend">
                                                                            <button class="btn quantity-left-minus"
                                                                                type="button" data-type="minus"
                                                                                data-field="">-</button></span>
                                                                        <input class="form-control input-number"
                                                                            type="text" name="quantity"
                                                                            value="1" /><span
                                                                            class="input-group-prepend">
                                                                            <button class="btn quantity-right-plus"
                                                                                type="button" data-type="plus"
                                                                                data-field="">+</button></span>
                                                                    </div>
                                                                </div>
                                                                <h6 class="font-primary">$500</h6>
                                                            </div>
                                                            <div class="close-circle"><a class="bg-danger"
                                                                    href="#"><i data-feather="x"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pr-0 pl-0 pb-3 pt-3">
                                                        <div class="media"><img class="img-fluid b-r-5 me-3 img-60"
                                                                src="{{ asset('theme') }}/assets/images/other-images/receiver-img.jpg"
                                                                alt="" />
                                                            <div class="media-body"><a class="f-light f-w-500"
                                                                    href="{{ asset('theme') }}/template/product.html">Men
                                                                    Cotton
                                                                    Blend Blue T-Shirt</a>
                                                                <div class="qty-box">
                                                                    <div class="input-group"> <span
                                                                            class="input-group-prepend">
                                                                            <button class="btn quantity-left-minus"
                                                                                type="button" data-type="minus"
                                                                                data-field="">- </button></span>
                                                                        <input class="form-control input-number"
                                                                            type="text" name="quantity"
                                                                            value="1" /><span
                                                                            class="input-group-prepend">
                                                                            <button class="btn quantity-right-plus"
                                                                                type="button" data-type="plus"
                                                                                data-field="">+</button></span>
                                                                    </div>
                                                                </div>
                                                                <h6 class="font-primary">$695.00</h6>
                                                            </div>
                                                            <div class="close-circle"><a class="bg-danger"
                                                                    href="#"><i data-feather="x"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3 total"><a
                                                            href="{{ asset('theme') }}/template/checkout.html">
                                                            <h6 class="mb-0">
                                                                Order Total :<span class="f-right">$1195.00 </span>
                                                            </h6>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer pb-0 pr-0 pl-0">
                                            <div class="text-center"> <a class="f-w-700"
                                                    href="{{ asset('theme') }}/template/private-chat.html">
                                                    <button class="btn btn-primary" type="button"
                                                        title="btn btn-primary">Check all</button></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown">
                    <div class="media profile-media"><img class="b-r-10"
                            src="{{ asset('theme') }}/assets/images/dashboard/profile.png" alt="" />
                        <div class="media-body d-xxl-block d-none box-col-none">
                            <div class="d-flex align-items-center gap-2"> <span>Alex Mora </span><i
                                    class="middle fa fa-angle-down"> </i></div>
                            <p class="mb-0 font-roboto">Admin</p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="{{ asset('theme') }}/template/user-profile.html"><i
                                    data-feather="user"></i><span>My
                                    Profile</span></a></li>
                        <li><a href="{{ asset('theme') }}/template/letter-box.html"><i
                                    data-feather="mail"></i><span>Inbox</span></a></li>
                        <li> <a href="{{ asset('theme') }}/template/edit-profile.html"> <i
                                    data-feather="settings"></i><span>Settings</span></a></li>
                        <li><a class="btn btn-pill btn-outline-primary btn-sm"
                                href="{{ asset('theme') }}/template/login.html">Log
                                Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">                        
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      <div class="ProfileCard-realName">Nama User</div>
      </div>
      </div>
    </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>
