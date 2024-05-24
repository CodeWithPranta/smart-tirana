@extends('layouts.main')
@section('content')

        <div class="v9_ready homepage header">
        <div class="site-header" id="site-header-app-bind" style="background: #f9f9f9;">

            <div class="main-block">
                <div class="page-column ">

                    <div class="logo-block">
                        <a id="hamburger-menu-icon" class="open-main-menu">
                            <div class="header--hamburger header--hamburger-dims"></div>
                        </a>

                        <a href="/" class="logo">
                            <img src="{{asset('static/smattirana-logo.png')}}" alt="SmartShanghai logo">
                        </a>
                    </div>


                    <div class="search-block" id="site-search">
                        <form method="get" >
                            <input type="text" id="site-search-input" placeholder="Search Places & Services, Events, Articles ..." name="query" autocomplete="off">
                            <input type="submit" value="">
                        </form>

                        <div class="search-results ">
                            <ul class="search-tabs" id="search-select-tabs">
                                <li class="active" data-pane-id="search-looking-for">
                                    I’m Looking For …
                                </li>
                                <li data-pane-id="search-how-to">
                                    How To …
                                </li>
                            </ul>

                            <ul class="search-open-tabs" data-tab-group-id="search-select-tabs">
                                <li class="loaded active" id="search-looking-for">

                                                                            <div class="tab-pane">
                                            <b>F&B</b>:
                                                                                            <a href="/listings/dining/">Restaurants</a>,                                                                                            <a href="/nightlife/">Bars</a>,                                                                                            <a href="/listings/nightlife/clubs/">Clubs</a>,                                                                                            <a href="/listings/nightlife/jazz/">Jazz</a>,                                                                                            <a href="/listings/nightlife/livemusic/">Live Music</a>,                                                                                            <a href="/listings/nightlife/dive/">Dives</a>,                                                                                            <a href="/listings/nightlife/winebar/">Wine Bars</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Business</b>:
                                                                                            <a href="/listings/business/lawyers/">Lawyers</a>,                                                                                            <a href="/listings/business/financial-advisory/">Financial Advisory</a>,                                                                                            <a href="/listings/business/business-consultancy/">Business Consultancy</a>,                                                                                            <a href="/business/">...</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Living</b>:
                                                                                            <a href="/housing/">Apartments</a>,                                                                                            <a href="/housing/service-apartments/">Serviced Apartments</a>,                                                                                            <a href="/housing/shared-apartments/">Shared Apartments</a>,                                                                                            <a href="/listings/services/nanny/">Ayis</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Services</b>:
                                                                                            <a href="/listings/services/computer_support/">Tech Support</a>,                                                                                            <a href="/listings/services/laundry_service/">Laundry</a>,                                                                                            <a href="/listings/services/moving_relocation/">Movers</a>,                                                                                            <a href="/listings/services/storage/">Storage</a>,                                                                                            <a href="/listings/services/tailors/">Tailors</a>,                                                                                            <a href="/listings/services/tailors/">...</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Education</b>:
                                                                                            <a href="/listings/education/early-childhood-education/">Kindergartens</a>,                                                                                            <a href="/listings/education/primary-schools/">Primary Schools</a>,                                                                                            <a href="/listings/education/secondary-schools/">Secondary Schools</a>,                                                                                            <a href="/listings/education/language-schools/">Mandarin Schools</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Health</b>:
                                                                                            <a href="/listings/health-wellbeing/emergency/">Emergency Rooms</a>,                                                                                            <a href="/listings/health-wellbeing/hospitals/">Hospitals & Clinics</a>,                                                                                            <a href="/listings/health-wellbeing/dental_care/">Dentists</a>,                                                                                            <a href="/listings/health-wellbeing/mental_health/">Mental Wellbeing</a>,                                                                                            <a href="/health-wellbeing/">...</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Beauty</b>:
                                                                                            <a href="/listings/beauty/hair_salon/">Hair Salons</a>,                                                                                            <a href="/listings/beauty/barbers/">Barbers</a>,                                                                                            <a href="/listings/spa_and_massage/">Massage</a>,                                                                                            <a href="/listings/beauty/waxing/">Waxing</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Kids & Family</b>:
                                                                                            <a href="/listings/kids-and-family/kids-indoor-activities/">Indoor Activities</a>,                                                                                            <a href="/listings/kids-and-family/collection-kids-summer-activities/">Outdoor Activities</a>,                                                                                            <a href="/listings/education/after-school/">After School</a>,                                                                                            <a href="/listings/kids-and-family/kids-sports-activities/">Kid's Sports</a>,                                                                                            <a href="/kids-and-family/">...</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Pets</b>:
                                                                                            <a href="/listings/shopping/pet-supplies-food/">Suppliers and Food</a>,                                                                                            <a href="/listings/services/pet-hotel/">Hotels</a>,                                                                                            <a href="/listings/services/veterinary/">Vets</a>,                                                                                            <a href="/listings/services/pet-sitting/">Pet Sitting</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Sports</b>:
                                                                                            <a href="/listings/sportrecreation/dance_studios/">Dance Studios</a>,                                                                                            <a href="/listings/services/pet-hotel/">Fitness Centers</a>,                                                                                            <a href="/listings/sportrecreation/martial_arts/">Martial Arts</a>                                                                                    </div>

                                </li>

                                <li class="loaded" id="search-how-to">
                                                                            <div class="tab-pane">
                                            <b>General</b>:
                                                                                            <a href="/articles/community/shanghai-beginners-guide-how-to-survive-and-prosper-in-the-city">Shanghai Essential Guide</a>,                                                                                            <a href="/articles/travel-and-sightseeing/all-the-qr-codes-you-need-to-arrive-and-register-in-shanghai">Arrival Tools</a>,                                                                                            <a href="/articles/shanghai-life/how-to-deal-with-emergency-situations">Emergencies</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Finance</b>:
                                                                                            <a href="/articles/smsh/yes-foreigners-can-use-alipay-this-is-how">Setup Alipay</a>,                                                                                            <a href="/articles/tech/how-to-use-wechat-pay-wallet-and-link-a-bank-card">Setup WeChat Pay</a>,                                                                                            <a href="/articles/activities/how-to-send-money-overseas">Send Money Abroad</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Work</b>:
                                                                                            <a href="/jobs/">Find a Job</a>,                                                                                            <a href="/articles/activities/how-to-change-jobs-without-visa-trouble">Change Jobs</a>,                                                                                            <a href="/articles/jobs/the-explainer-all-you-need-to-know-about-severance">Get Severance</a>,                                                                                            <a href="/articles/business/the-big-and-lovable-china-income-tax-faq">Pay Income Tax</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Visa</b>:
                                                                                            <a href="/articles/shanghai-life/the-faq-china-visa-on-arrivals-need-to-know">Travel Visa Free</a>,                                                                                            <a href="/articles/shanghai-life/how-to-get-a-work-visa">Get A Work Visa</a>,                                                                                            <a href="/articles/jobs/how-to-get-a-chinese-green-card">Get a Green Card</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Logistics</b>:
                                                                                            <a href="/articles/tech/tested-how-to-use-didi-now-that-its-in-english">Use Didi</a>,                                                                                            <a href="/articles/tech/how-to-courier-something-in-shanghai">Courier Something</a>,                                                                                            <a href="/articles/community/how-to-get-a-chinese-drivers-license-in-shanghai">Get a Driving Licence</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Home</b>:
                                                                                            <a href="/articles/community/how-to-find-a-cheap-and-fairly-priced-apartment-in-shanghai">Find an Apartment</a>,                                                                                            <a href="/articles/shanghai-life/how-to-find-an-ayi-household-helper-in-shanghai">Find a Nanny/Ayi</a>,                                                                                            <a href="/articles/shopping/how-to-fix-everything-wrong-with-your-apartment">Fix Your Apartment</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Shopping</b>:
                                                                                            <a href="/articles/shopping/how-to-taobao-the-simple-way">Buy Stuff on Taobao</a>,                                                                                            <a href="/articles/shopping/how-to-make-a-return-on-taobao">Return Stuff on Taobao</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Life</b>:
                                                                                            <a href="/articles/smsh/avoiding-scams-in-shanghai">Avoid Scams</a>,                                                                                            <a href="/articles/community/how-to-get-married-in-china">Get Married</a>,                                                                                            <a href="/articles/wellbeing/how-to-get-a-divorce-in-shanghai">Get Divorced</a>,                                                                                            <a href="/articles/community/how-to-be-happy-in-shanghai">Be Happy</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Pets</b>:
                                                                                            <a href="/articles/community/how-to-get-a-dog-license-in-china">Get a Dog Licence</a>,                                                                                            <a href="/articles/community/how-to-take-your-pet-out-of-china">Take Pets Out of China</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Good Citizen</b>:
                                                                                            <a href="/articles/community/the-charities-where-and-what-to-donate-this-holiday">Donate Stuff</a>,                                                                                            <a href="/wire/community/donating-blood-during-the-special-period">Donate Blood</a>,                                                                                            <a href="/articles/activities/how-to-recycle-in-shanghai">Recycle</a>,                                                                                            <a href="/articles/community/the-listicle-volunteering-in-shanghai">Volunteer</a>                                                                                    </div>
                                                                            <div class="tab-pane">
                                            <b>Health</b>:
                                                                                            <a href="/articles/health-wellbeing/how-to-book-public-hospitals">Book a Hospital</a>,                                                                                            <a href="/articles/health-and-wellbeing/the-big-guide-to-health-check-ups-in-shanghai-where-how-much-and-what-to-expect">Get a Checkup</a>,                                                                                            <a href="/articles/health-wellbeing/how-to-book-public-hospitals">Get Health Insurance</a>                                                                                    </div>
                                                                    </li>
                            </ul>
                        </div>

                    </div>


                    <div class="user-block">
                        <a href="/userarea/favorites" class="tooltip favorite" data-tooltip="Favorites">
                            <div>
                                <div class="header--favorite header--favorite-dims"></div>
                            </div>
                        </a>
                        <a class="tooltip add" data-tooltip="List" id="list-with-us-button">
                            <div>
                                <div class="header--add header--add-dims"></div>
                            </div>
                        </a>

                            <a href="{{route('register')}}" class="avatar-container tooltip" data-tooltip="Account">
                                <div class="avatar">
                                    <img class="avatar" src="https://static.smartshanghai.com/img/icons/svg/icon-profile.svg" alt="User avatar image" style="margin: auto;">
                                </div>
                            </a>

                    </div>

                    <div class="smsh-mobile-menu">
                        <div class="bg-shadow"></div>
                        <ul class="mobile-menu">

                                                                                                <li>

                                        <a href="/dining/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Dining</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/nightlife/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Nightlife</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/services/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Services</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/events/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Events</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/deals/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Deals</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/housing/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Housing</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/jobs/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Jobs</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/essentials/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>SH 101</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/buyandsell/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Buy&Sell</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/education/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Education</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/kids-and-family/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Kids</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/health-wellbeing/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Health</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/listings/beauty/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Beauty</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/sports/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Sports</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/listings/shopping/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Shopping</span>
                                        </a>
                                    </li>
                                                                                                                                <li>

                                        <a href="/properties/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Offices</span>
                                        </a>
                                    </li>
                                                                                                                                                                                            <li>

                                        <a href="/smash/">

                                            <div class="tag-icon">
                                                                                                <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/repository/2024/03/18/59d37354-d71c-4b6a-a1f9-ff355da7741d.gif.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/repository/2024/03/18/59d37354-d71c-4b6a-a1f9-ff355da7741d.gif.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/03/18/59d37354-d71c-4b6a-a1f9-ff355da7741d.gif.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>

                                            </div>

                                            <span>Gift Shop</span>
                                        </a>
                                    </li>



                            <li class="sub-menu-title">
                                APP & SOCIAL
                            </li>
                            <li>
                                <a href="/apps/"><span class="icon icon-nav-download-app"></span> <span>Download our App</span></a>
                            </li>
                            <li>
                                <a href="/social/wechat-groups"><span class="icon icon-nav-download-app"></span> <span>Join a WeChat Group</span></a>
                            </li>
                            <li class="sub-menu-title">
                                SMARTSHANGHAI
                            </li>

                            <li>
                                <a href="/contact/"><span class="icon icon-nav-contact-us"></span> <span>Contact Us</span></a>
                            </li>
                            <li>
                                <a href="/service/about"><span class="icon icon-nav-about-us"></span> <span>About Us</span></a>
                            </li>
                            <li>
                                <a href="/service/advertise"><span class="icon icon-nav-advertise"></span> <span>Advertise With Us</span></a>
                            </li>
                        </ul>
                    </div>




                    <div class="smsh-mobile-userarea-menu">
                        <div class="bg-shadow"></div>
                        <ul class="mobile-menu">
                            <li>
                                <a class="open-main-menu">
                                    <b><span>Back To Main Menu</span></b>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/messaging/">
                                    <span class="icon userarea--messaging"></span> <span>Inbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/favorites/">
                                    <span class="icon userarea--favorites"></span> <span>Favorites</span>
                                </a>
                            </li>

                            <li class="sub-menu-title">
                                GENERAL
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/account/">
                                    <span class="icon userarea--account"></span> <span>Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/alerts/">
                                    <span class="icon userarea--alerts"></span> <span>Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/subscriptions/">
                                    <span class="icon userarea--subscriptions"></span> <span>Subscriptions</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/billing/">
                                    <span class="icon userarea--billing"></span> <span>Billing</span>
                                </a>
                            </li>

                            <li class="sub-menu-title">
                                My Listings
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/venues/">
                                    <span class="icon userarea--venues"></span> <span>Venues</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/events/">
                                    <span class="icon userarea--events"></span> <span>Events</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/jobs/">
                                    <span class="icon userarea--jobs"></span> <span>Jobs</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/housing/">
                                    <span class="icon userarea--housing"></span> <span>Housing</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/buyandsell/">
                                    <span class="icon userarea--buy-and-sell"></span> <span>Buy & Sell</span>
                                </a>
                            </li>

                            <li class="sub-menu-title">
                                Jobs
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/jobs/myapplications/">
                                    <span class="icon userarea--job-app"></span> <span>My Applications</span>
                                </a>
                            </li>

                            <li class="sub-menu-title">
                                Advertisement
                            </li>
                            <li>
                                <a href="https://www.smartshanghai.com/userarea/campaigns/">
                                    <span class="icon userarea--campaigns"></span> <span>Campaigns</span>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <div class="smsh-user-block-menu listings-submission-menu is-dropdown">
                        <ul>
                            <li>
                                <a href="/events/add">
                                    <div class="icon">
                                        <span class="icon-blue-calendar"></span>
                                    </div>
                                    <div class="txt">
                                        <h3>
                                            List an Event
                                        </h3>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="/events/add">
                                    <div class="icon">
                                        <span class="icon-blue-deal"></span>
                                    </div>
                                    <div class="txt">
                                        <h3>
                                            List a Deal
                                        </h3>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="/service/venues">
                                    <div class="icon">
                                        <span class="icon-blue-venue"></span>
                                    </div>
                                    <div class="txt">
                                        <h3>
                                            List Your Venue
                                        </h3>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="/jobs/add">
                                    <div class="icon">
                                        <span class="icon-blue-jobs"></span>
                                    </div>
                                    <div class="txt">
                                        <h3>
                                            List A Job
                                        </h3>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="/buyandsell/add">
                                    <div class="icon">
                                        <span class="icon-blue-buyandsell"></span>
                                    </div>
                                    <div class="txt">
                                        <h3>
                                            Sell Something
                                        </h3>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="/housing/add">
                                    <div class="icon">
                                        <span class="icon-blue-housing"></span>
                                    </div>
                                    <div class="txt">
                                        <h3>
                                            List an Apartment
                                        </h3>
                                    </div>
                                </a>
                            </li>


                        </ul>
                    </div>




                </div>
            </div>




            <div>
                <div class="menu-block">
                    <div class="navigation" id="site-navigation">
                        <ul id="main-navigation" class="main-navigation main-nav-bind homepage">
                                                            <li><a href="/dining/">Dining</a></li>
                                                            <li><a href="/nightlife/">Nightlife</a></li>
                                                            <li><a href="/services/">Services</a></li>
                                                            <li><a href="/events/">Events</a></li>
                                                            <li><a href="/deals/">Deals</a></li>
                                                            <li><a href="/housing/">Housing</a></li>
                                                            <li><a href="/jobs/">Jobs</a></li>
                                                            <li><a href="/essentials/">SH 101</a></li>
                                                            <li><a href="/buyandsell/">Buy&Sell</a></li>
                                                            <li><a href="/education/">Education</a></li>
                                                            <li><a href="/kids-and-family/">Kids</a></li>
                                                            <li><a href="/health-wellbeing/">Health</a></li>
                                                            <li><a href="/listings/beauty/">Beauty</a></li>
                                                            <li><a href="/sports/">Sports</a></li>
                                                            <li><a href="/listings/shopping/">Shopping</a></li>
                                                            <li><a href="/properties/">Offices</a></li>
                                                            <li><a href="/articles/health-and-wellbeing/emergency-rooms-in-the-city">HELP</a></li>
                                                            <li><a href="/smash/">Gift Shop</a></li>
                                                        <li class="open-sidenav open-main-menu"><a>...</a></li>
                        </ul>
                    </div>

                </div>
            </div>

                        <div class="page-column">
                <ul class="header-menu-2022 show">
                                                                    <li>
                            <div>
                                <div class="li">
                                    <a href="/dining/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Dining</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/nightlife/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Nightlife</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/services/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Services</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/events/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Events</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/deals/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Deals</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/housing/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Housing</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/jobs/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Jobs</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/essentials/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">SH 101</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/buyandsell/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Buy&Sell</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                    <li>
                                <div>
                                    <div class="li">
                                        <a class="header-menu-more">
                                            <div class="tag-icon smsh-blue">
                                                <div class="filter--dots filter--dots-dims"></div>
                                            </div>
                                            <div class="tag-name">More</div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/education/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Education</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/kids-and-family/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Kids</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/health-wellbeing/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Health</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/listings/beauty/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Beauty</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/sports/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Sports</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/listings/shopping/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Shopping</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/properties/">
                                        <div class="tag-icon">

                                                                                            <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>
                                                                                    </div>
                                        <div class="tag-name">Offices</div>
                                    </a>
                                </div>
                            </div>
                        </li>


                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/smash/">
                                        <div class="tag-icon">

                                                                                            <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/03/18/59d37354-d71c-4b6a-a1f9-ff355da7741d.gif" loading="lazy" class="tag-icon with-loader">
                                                                                    </div>
                                        <div class="tag-name">Gift Shop</div>
                                    </a>
                                </div>
                            </div>
                        </li>

                                                            </ul>

                <ul class="header-menu-2022-mobile">
                                                                    <li>
                            <div>
                                <div class="li">
                                    <a href="/dining/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/a6a5ea6e-f18e-4118-9ffa-e87e7b67725d.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Dining</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/nightlife/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b9ba18aa-5d16-4985-a612-b1f96728c7f9.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Nightlife</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/services/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/f7353d2d-f84a-4509-9b58-8abcc80de2a2.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Services</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/events/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/52506711-11b3-411e-af68-596dac10ad7e.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Events</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/deals/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/357dbee0-a99c-485e-b3a4-a87b5845e751.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Deals</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/housing/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/0793f5c3-5b7b-404a-a25d-693d4b455f44.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Housing</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/jobs/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/aeac1807-b2da-45fa-9d7d-720c4ed94f47.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Jobs</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/essentials/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/02/1392bd31-af80-4e19-a65a-95cfa04f73c3.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">SH 101</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/buyandsell/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/13de4891-cd21-4563-b5c5-8f91ff36cfe9.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Buy&Sell</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/education/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/168ad3ea-3c79-42ac-8d43-2ffe588fb89c.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Education</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/kids-and-family/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/e375aae7-fd47-422e-9d1d-4172d6397a7b.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Kids</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/health-wellbeing/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/6b9e3778-d435-4a86-a7f2-8a612f8a8855.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Health</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/listings/beauty/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/b8182299-3b08-4272-8230-7a2d2d6e7d47.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Beauty</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/sports/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/19/b945ec8b-66ba-44e6-8b58-cc98aefa4f89.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Sports</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/listings/shopping/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/7ef44f09-c477-4ff8-b066-5adc41d955c9.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Shopping</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/properties/">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/12/13/36ea7495-07b7-4831-b7cf-f6f6446ca09a.png.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">Offices</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/articles/health-and-wellbeing/emergency-rooms-in-the-city">
                                        <div class="tag-icon">
                                                                                                                                        <picture>
                                                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/03/9c6a5bc3-8a87-4c11-85fd-1f0a7f2915d2.jpg.600.0.webp.90.90.webP 90w, https://images.smartshanghai.com.cn/uploads/compressed/2023/02/03/9c6a5bc3-8a87-4c11-85fd-1f0a7f2915d2.jpg.600.0.webp.180.180.webP 180w" sizes="90px" type="image/webP">
                                                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/02/03/9c6a5bc3-8a87-4c11-85fd-1f0a7f2915d2.jpg.600.0.webp.90.90.jpg" loading="lazy" class="tag-icon with-loader">
                                                </picture>


                                        </div>
                                        <div class="tag-name">HELP</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                                                            <li>
                            <div>
                                <div class="li">
                                    <a href="/smash/">
                                        <div class="tag-icon">
                                                                                                                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/03/18/59d37354-d71c-4b6a-a1f9-ff355da7741d.gif" loading="lazy" class="tag-icon with-loader">


                                        </div>
                                        <div class="tag-name">Gift Shop</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                                                            </ul>
            </div>








        </div>
    </div>



<div class="v9_ready homepage">

    <div class="list-components">

        <div class="page-column">
            <div class="default-box">
                <!-- Article Hero -->
<div class="homepage-featured-article">
    <div>
        <a href="https://www.smartshanghai.com/articles/sports-and-recreation/introducing-your-new-cycling-nightclub-tango-livehouse">
                            <div class="cover">
                    <picture>
                                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/b60bfac9-9510-40c4-9d45-b97d44869a50.jpg.1020.680.webP 1029w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/b60bfac9-9510-40c4-9d45-b97d44869a50.jpg.2040.1360.webP 2040w" sizes="1020px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/b60bfac9-9510-40c4-9d45-b97d44869a50.jpg.1020.680.jpg" alt="" width="100%" loading="lazy">
                    </picture>
                    <div>
                        <h1>Introducing Your New 'Cycling Nightclub', Tango Livehouse</h1>
                        <p class="teaser">The latest spinning studio using state-of-the-art smartbikes that track your physical stats for an effective cardio workout. </p>
                        <p>Sports & Recreation</p>
                    </div>

                </div>


                    </a>

    </div>


</div>
                <!-- Article Hero -->
<div class="homepage-articles-list list-components">
    <button class="hidden arrow left-arrow" aria-label="Back" type="button"></button>
    <button class="arrow right-arrow" aria-label="Next" type="button"></button>

   <ul class="homepage_featured_articles_slider slick-horizontal-list">
            <li class="with-gradient">
         <a href="https://www.smartshanghai.com/articles/sports-and-recreation/introducing-your-new-cycling-nightclub-tango-livehouse">
                   <picture>
              <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/b60bfac9-9510-40c4-9d45-b97d44869a50.jpg.460.448.webP 460w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/b60bfac9-9510-40c4-9d45-b97d44869a50.jpg.920.896.webP 920w" sizes="460px" type="image/webp">
              <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/b60bfac9-9510-40c4-9d45-b97d44869a50.jpg.480.448.jpg" alt="" width="100%" class="thumb">
          </picture>
         <div class="body">
             <h1>Introducing Your New 'Cycling Nightclub', Tango Livehouse</h1>
             <p>Sports & Recreation</p>
         </div>
         </a>

      </li>
            <li class="with-gradient">
         <a href="https://www.smartshanghai.com/articles/dining/the-list-where-hipsters-eat-and-drink">
                   <picture>
              <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/2d3003c8-fac0-410b-81eb-f9debbc4257d.jpg.460.448.webP 460w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/2d3003c8-fac0-410b-81eb-f9debbc4257d.jpg.920.896.webP 920w" sizes="460px" type="image/webp">
              <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/2d3003c8-fac0-410b-81eb-f9debbc4257d.jpg.480.448.jpg" alt="" width="100%" class="thumb">
          </picture>
         <div class="body">
             <h1>[The List:] Where Hipsters Eat - April '24</h1>
             <p>Dining</p>
         </div>
         </a>

      </li>
            <li class="with-gradient">
         <a href="https://www.smartshanghai.com/articles/arts-and-stage/best-upcoming-english-musicals-in-shanghai">
                   <picture>
              <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/22/6bfdcd61-5cb1-4b5d-8896-10f1e297190a.jpg.460.448.webP 460w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/22/6bfdcd61-5cb1-4b5d-8896-10f1e297190a.jpg.920.896.webP 920w" sizes="460px" type="image/webp">
              <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/22/6bfdcd61-5cb1-4b5d-8896-10f1e297190a.jpg.480.448.jpg" alt="" width="100%" class="thumb">
          </picture>
         <div class="body">
             <h1>Upcoming Musicals: Chicago, Phantom of the Opera, School of Rock, Lady M</h1>
             <p>Arts & Stage</p>
         </div>
         </a>

      </li>
            <li class="with-gradient">
         <a href="https://www.smartshanghai.com/articles/arts-and-stage/upcoming-kids-family-shows-lion-king-samajam">
                   <picture>
              <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/4e05fb8d-0b81-45f7-a5c7-8a10c2112337.jpg.460.448.webP 460w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/4e05fb8d-0b81-45f7-a5c7-8a10c2112337.jpg.920.896.webP 920w" sizes="460px" type="image/webp">
              <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/4e05fb8d-0b81-45f7-a5c7-8a10c2112337.jpg.480.448.jpg" alt="" width="100%" class="thumb">
          </picture>
         <div class="body">
             <h1>8 Upcoming Kids Shows: Lion King, Samajam, BBC's Seven Worlds & More</h1>
             <p>Arts & Stage</p>
         </div>
         </a>

      </li>
            <li class="with-gradient">
         <a href="https://www.smartshanghai.com/slides/api-expo-2024">
                   <picture>
              <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/20/94bc3302-d292-4259-a846-f439a07fd414.jpg.460.448.webP 460w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/20/94bc3302-d292-4259-a846-f439a07fd414.jpg.920.896.webP 920w" sizes="460px" type="image/webp">
              <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/20/94bc3302-d292-4259-a846-f439a07fd414.jpg.480.448.jpg" alt="" width="100%" class="thumb">
          </picture>
         <div class="body">
             <h1>In Focus: The Shanghai API Adult Expo 2024</h1>
             <p>Shopping</p>
         </div>
         </a>

      </li>
            <li class="with-gradient">
         <a href="https://www.smartshanghai.com/articles/arts-and-stage/paradox-museum">
                   <picture>
              <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/01d7b4bf-1d32-497b-b50c-c3580a11f9df.jpg.460.448.webP 460w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/01d7b4bf-1d32-497b-b50c-c3580a11f9df.jpg.920.896.webP 920w" sizes="460px" type="image/webp">
              <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/01d7b4bf-1d32-497b-b50c-c3580a11f9df.jpg.480.448.jpg" alt="" width="100%" class="thumb">
          </picture>
         <div class="body">
             <h1>Things Get Weird At The New Paradox Museum</h1>
             <p>Arts & Stage</p>
         </div>
         </a>

      </li>
             <li class="all-button">
           <a href="/articles/featured/">
               <div class="img">
                   <div class="browse-all">
                       <p>Browse All</p>

                   </div>
               </div>

           </a>


       </li>
   </ul>

</div>
            </div>
        </div>




        <div class="">
            <div class="page-column">
                <div class="default-box">
                    <!-- wire-block -->

<div class="smsh-components-tabs articles-block with-vue-tabs" id="articles-block-80384" data-slidesdesktop="4" data-slidestablet="3" data-slidesmobile="2">

    <div class="header-block no-bottom-padding info">

    <div>
                        <h2>From Our Partners</h2>

            </div>

    <div>
            </div>

</div>


            <ul class="header-block-tab small homepage-tabs">
                            <li class="active" v-on:click="loadVueTab('123','/articles?is_sponsored=true','', '', 4, 3, 2)">Latest</li>
                            <li  v-on:click="loadVueTab('22','/articles?is_sponsored=true&tag_id=22','', '', 4, 3, 2)">Health</li>
                            <li  v-on:click="loadVueTab('18','/articles?is_sponsored=true&tag_id=18','', '', 4, 3, 2)">Education</li>
                            <li  v-on:click="loadVueTab('144851','','', '', 4, 3, 2)">Services</li>
                    </ul>


    <ul class="grid-articles slick-horizontal-list list-block-skin smsh-components-tabs-slider mobile-slider-no-right-margin" v-show="showPreloadedTab">
                    <li style="background-color: #ffffff">
    <a href="https://www.smartshanghai.com/articles/dining/from-barcelona-with-love-jing-an-shangri-la-s-new-brunch-with-natura-bisse">
                    <div class="sponsored"></div>


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/b340a60e-a669-4eac-b187-dadb4984a2c3.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/b340a60e-a669-4eac-b187-dadb4984a2c3.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/23/b340a60e-a669-4eac-b187-dadb4984a2c3.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #ffffff;">
            <h3 >
                From Barcelona With Love: Jing An Shangri-La's New Brunch With Natura Bissé
            </h3>
            <div class="tag">
                Dining
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #ffffff">
    <a href="https://www.smartshanghai.com/articles/health-and-wellbeing/hello-future-doctors-join-sinounited-health-career-experience-program">
                    <div class="sponsored"></div>


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/c0573f09-4734-419a-b3d2-7f515fcc54a9.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/c0573f09-4734-419a-b3d2-7f515fcc54a9.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/c0573f09-4734-419a-b3d2-7f515fcc54a9.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #ffffff;">
            <h3 >
                Hello Future Doctors. Join SinoUnited Health Career Experience Program
            </h3>
            <div class="tag">
                Health & Wellbeing
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #ffffff">
    <a href="https://www.smartshanghai.com/articles/travel-and-sightseeing/explore-bali-s-lifestyle-high-end-real-estate-market">
                    <div class="sponsored"></div>


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/29/c79fafd7-0ee8-45ef-ba97-59ad09be239c.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/03/29/c79fafd7-0ee8-45ef-ba97-59ad09be239c.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/29/c79fafd7-0ee8-45ef-ba97-59ad09be239c.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #ffffff;">
            <h3 >
                Explore Bali's Lifestyle & High-end Real Estate Market
            </h3>
            <div class="tag">
                Travel & Sightseeing
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #ffffff">
    <a href="https://www.smartshanghai.com/wire/community/shanghai-french-school-s-international-day-celebrating-45-nationalities">
                    <div class="sponsored"></div>


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/21/fdf0096f-4ee6-4ea9-aced-e468337da9a8.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/03/21/fdf0096f-4ee6-4ea9-aced-e468337da9a8.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/21/fdf0096f-4ee6-4ea9-aced-e468337da9a8.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #ffffff;">
            <h3 >
                Shanghai French School Celebrates 45 Nationalities
            </h3>
            <div class="tag">
                Community
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #ffffff">
    <a href="https://www.smartshanghai.com/articles/education/aitech-shanghai-education-dulwich-is-innovating">
                    <div class="sponsored"></div>


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/16/79649e6e-a25e-4e12-a658-f79512a5b74f.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/03/16/79649e6e-a25e-4e12-a658-f79512a5b74f.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/16/79649e6e-a25e-4e12-a658-f79512a5b74f.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #ffffff;">
            <h3 >
                AI is Putting Shanghai Schools on the Map with Big Awards
            </h3>
            <div class="tag">
                Education
            </div>
        </div>
    </a>
</li>


    </ul>


        <div class="preloader" id="wires-preloader" v-show="showLoader">
        <img src="https://images.smartshanghai.com/img/general/loading.svg" alt="">
    </div>


    <div v-if="noResults" class="noResults">
        <p>Oh, there's nothing here right now. <a href="/events/add" target="_blank">Add your event here</a></p>
    </div>

    <div v-if="ajaxResults">

        <ul class="grid-articles smsh-components-tabs-vue-slider slick-horizontal-list">
            <li v-for="at in ajaxResults" :key="at.id" style="background-color: #ffffff">

                <a :href="at.article_url">
                    <div class="img">
                        <picture>
                            <source :srcset=getSourceSet(replaceUrlWithCompressedUrl(at.thumbnail_url),330,220) sizes="330px" type="image/webp">
                            <img :src="getImageSource(replaceUrlWithCompressedUrl(at.thumbnail_url),330,220)"  alt="" width="330" height="220">
                        </picture>
                    </div>

                    <div class="body">


                        {{-- <h3>
                            {{ at.headline }}
                        </h3>
                        <p class="tag">
                            {{ at.category_tag_name | truncate(100, '...') }}
                        </p> --}}
                    </div>
                </a>
            </li>

            <li>
                <a :href="url">
                    <div class="img">
                        {{-- <div class="browse-all">{{ buttonLabel }} </div> --}}
                    </div>
                </a>
            </li>

        </ul>
    </div>


</div>


                </div>
            </div>
        </div>


        <div class="background-white">
            <div class="page-column">
                <div class="default-box">
                <div class="smsh-components-tabs venues-block with-vue-tabs" id="venues-block-84673" data-slidesdesktop="3" data-slidestablet="3" data-slidesmobile="1">

    <div class="header-block no-bottom-padding info">

    <div>
                        <h2>Discover Shanghai</h2>

            </div>

    <div>
            </div>

</div>

            <ul class="header-block-tab small homepage-tabs">
                            <li class="active" v-on:click="loadVueTab('','tags?parent_tag_id=145032&limit=6&include_routing=true&order_by_ranking=true','', '', 3, 3, 1)">Featured</li>
                            <li  v-on:click="loadVueTab('','tags?parent_tag_id=145036&include_routing=true&order_by_ranking=true','', '', 3, 3, 1)">Dining</li>
                            <li  v-on:click="loadVueTab('','tags?parent_tag_id=145183&include_routing=true&order_by_ranking=true','', '', 3, 3, 1)">Nightlife</li>
                            <li  v-on:click="loadVueTab('','tags?parent_tag_id=145059&include_routing=true&order_by_ranking=true','', '', 3, 3, 1)">Sightseeing</li>
                            <li  v-on:click="loadVueTab('','tags?parent_tag_id=145185&include_routing=true&order_by_ranking=true','', '', 3, 3, 1)">Shopping</li>
                            <li  v-on:click="loadVueTab('','tags?parent_tag_id=145066&include_routing=true','', '', 3, 3, 1)">Kids & Family</li>
                    </ul>

    <ul class="grid-discover smsh-components-tabs-slider slick-horizontal-list list-block-skin mobile-slider-no-right-margin show-second-slide-more" v-show="showPreloadedTab">
                    <li style="background-color: #F5F5F5">
    <a href="/listings/dining/hipster">
        <div class="img square-image-on-mobile">

                                        <picture>
                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/15/9e5b269f-8494-49f4-a1c3-18264ebf8a16.jpg.600.0.webp.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/03/15/9e5b269f-8494-49f4-a1c3-18264ebf8a16.jpg.600.0.webp.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/15/9e5b269f-8494-49f4-a1c3-18264ebf8a16.jpg.600.0.webp.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                </picture>



        </div>
        <div class="body" style="background-color: #F5F5F5;">
            <h3>
                Hipster Hangouts
            </h3>
            <p class="wenzi">The guide to Shanghai's coolest hipster restaurants and bars</p>
        </div>
    </a>
</li>
                    <li style="background-color: #F5F5F5">
    <a href="/listings/kids-and-family/parks-with-playgrounds/">
        <div class="img square-image-on-mobile">

                                        <picture>
                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/09/9dd7e8cf-953f-41e0-8667-587605da87ef.jpg.600.0.webp.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/09/9dd7e8cf-953f-41e0-8667-587605da87ef.jpg.600.0.webp.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/09/9dd7e8cf-953f-41e0-8667-587605da87ef.jpg.600.0.webp.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                </picture>



        </div>
        <div class="body" style="background-color: #F5F5F5;">
            <h3>
                Parks With Playgrounds
            </h3>
            <p class="wenzi">Yes, there are a few parks out there that have kids playgrounds. </p>
        </div>
    </a>
</li>
                    <li style="background-color: #F5F5F5">
    <a href="/listings/recently_opened/">
        <div class="img square-image-on-mobile">

                                        <picture>
                    <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/15/afedd157-2376-4869-a37d-6d635b46358e.jpg.600.0.webp.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2023/11/15/afedd157-2376-4869-a37d-6d635b46358e.jpg.600.0.webp.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/15/afedd157-2376-4869-a37d-6d635b46358e.jpg.600.0.webp.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                </picture>



        </div>
        <div class="body" style="background-color: #F5F5F5;">
            <h3>
                Recently Opened Restaurants
            </h3>
            <p class="wenzi">Is Everyone Opening a Restaurant Now? We can barely keep up with all this...</p>
        </div>
    </a>
</li>
            </ul>


        <div class="preloader" id="wires-preloader" v-show="showLoader">
            <img src="https://images.smartshanghai.com/img/general/loading.svg" alt="">
        </div>


        <div v-if="noResults" class="noResults">
            <p>Oh, there's nothing here right now. </p>
        </div>

        <div v-if="ajaxResults">
            <ul class="grid-discover slick-horizontal-list smsh-components-tabs-vue-slider list-block-skin mobile-slider-no-right-margin">
                <li v-for="ev in ajaxResults" :key="ev.id">

                    <a :href="ev.related_site_path">
                        <div class="img square-image-on-mobile">
                            <picture>
                                <source :srcset=getSourceSet(replaceUrlWithCompressedUrl(ev.compressed_cover_url),190,190) sizes="190px" type="image/webp">
                                <img :src="getImageSource(replaceUrlWithCompressedUrl(ev.compressed_cover_url),190,190)"  alt="" width="330" height="auto">
                            </picture>
                        </div>

                        <div class="body" style="background-color: #F5F5F5">
                            <h3>
                                {{-- {{ ev.description }} --}}
                            </h3>
                            {{-- <p class="wenzi">{{ ev.web_teaser }}</p> --}}
                        </div>
                    </a>

                </li>

                <li>
                    <a :href="url">
                        <div class="img">
                            <div class="browse-all square-image">
                                {{-- <p>{{ buttonLabel }}</p> --}}
                            </div>
                        </div>
                    </a>
                </li>

            </ul>
        </div>




</div>


            </div>
        </div>


                    <div class="background-gray white-line-header">
                <div class="ad-block">
    <div class="main-column">
        <p class="ad-notice">Advertisement</p>
        <div class="img">
            <a href="https://adsrvr.smartshanghai.com/ads/adclick/17501?url=https://www.jiahui.com/en " target="_blank">
                <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/04/17/ab9ea554-2159-4caa-ae8e-9a62ae90ba77.jpg" class="topBanner">
            </a>
        </div>
    </div>
</div>
            </div>


        <!-- Events Block -->
        <div class="background-black" style="padding: 20px 0;">
            <div class="page-column">
                <div class="default-box no-right-padding-mobile list-block-skin">
                    <div class="event-header-block">
                        <div class="title">THINGS TO DO IN SHANGHAI</div>
                        <div class="keyword">The Curated Guide to the Best Events in Shanghai</div>
                        <div class="date-tab">
                            <a href="/events/?day=2024-04-30" class="link">
                                <p>
                                    <span class="week">TODAY</span>
                                    <span class="date">Tue 30</span>
                                </p>
                                <img class="arrow" src="/img/v8/homepage/event_arrow.svg" alt="">
                            </a>
                            <a  href="/events/?day=2024-05-01" class="link">
                                <p>
                                    <span class="week">TOMORROW</span>
                                    <span class="date">Wed 1</span>
                                </p>
                                <img class="arrow" src="/img/v8/homepage/event_arrow.svg" alt="">
                            </a>
                            <a href="/events/?fromDate=2024-05-03&untilDate=2024-05-05" class="link">
                                <p>
                                    <span class="week">THIS WEEKEND</span>
                                    <span class="date">03 - 05</span>
                                </p>
                                <img class="arrow" src="/img/v8/homepage/event_arrow.svg" alt="">
                            </a>
                            <a href="/events/?fromDate=2024-05-10&untilDate=2024-05-12" class="link">
                                <p>
                                    <span class="week">NEXT WEEKEND</span>
                                    <span class="date">10-12</span>
                                </p>
                                <img class="arrow" src="/img/v8/homepage/event_arrow.svg" alt="">
                            </a>
                        </div>
                    </div>

                                                                                                                <div class="box-row-gap">
                            <!-- events-block -->

<div class="smsh-components-tabs events-block " id="events-block-42600" data-slidesdesktop="5" data-slidestablet="4" data-slidesmobile="2">

    <div class="header-block info">

    <div>
                        <h2><a href="/events/concerts/">Concerts</a></h2>

            </div>

    <div>
                    <a href="/events/concerts/">Browse All</a>
            </div>

</div>


    <ul class="grid-events slick-horizontal-list smsh-components-tabs-slider mobile-slider-no-right-margin" v-show="showPreloadedTab">
                    <li >
    <a href="https://www.smartshanghai.com/event/73977">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/15/0842ec81-b594-480d-ba7f-b7f871a0236a.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/15/0842ec81-b594-480d-ba7f-b7f871a0236a.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/15/0842ec81-b594-480d-ba7f-b7f871a0236a.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Seven Worlds One Planet: Live in Concert
            </h3>
            <div class="date">
                May 1 and May 2
            </div>
            <div class="venue">
                @ SHCAT
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/70424">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/c6b27da2-559c-419d-a14a-b75e7a7a49b4.png.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/c6b27da2-559c-419d-a14a-b75e7a7a49b4.png.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/c6b27da2-559c-419d-a14a-b75e7a7a49b4.png.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Simona De Rosa Quartet
            </h3>
            <div class="date">
                May 1 and May 2
            </div>
            <div class="venue">
                @ Jazz at Lincoln Center
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/68662">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/bb8eb363-edf2-4eb2-b64c-26a74a473f8b.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/bb8eb363-edf2-4eb2-b64c-26a74a473f8b.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/bb8eb363-edf2-4eb2-b64c-26a74a473f8b.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Jazzical Night - Huang Ye Octet
            </h3>
            <div class="date">
                Fri, May 3
            </div>
            <div class="venue">
                @ Jazz at Lincoln Center
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/67167">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/18/cc3408e6-9df2-4a0f-b478-4d23b31feaf5.png.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/18/cc3408e6-9df2-4a0f-b478-4d23b31feaf5.png.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/18/cc3408e6-9df2-4a0f-b478-4d23b31feaf5.png.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Jazmine Big Band
            </h3>
            <div class="date">
                Sat, May 4
            </div>
            <div class="venue">
                @ Jazz at Lincoln Center
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/75799">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/25/f715db88-6118-4b4e-b669-43533b1067b3.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/03/25/f715db88-6118-4b4e-b669-43533b1067b3.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/25/f715db88-6118-4b4e-b669-43533b1067b3.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Tenor Juan Diego Florez in Recital
            </h3>
            <div class="date">
                Mon, May 20
            </div>
            <div class="venue">
                @ Grand Theatre
            </div>
        </div>
    </a>


</li>


                    <li style="background-color: #212121;">
                <a href="/events/concerts/">
                    <div class="img">
                        <div class="browse-all square-image" style="color: ">
                            <p>All Concerts</p>
                        </div>
                    </div>
                </a>
            </li>

    </ul>


</div>

                        </div>
                                                                                            <div class="box-row-gap">
                            <!-- events-block -->

<div class="smsh-components-tabs events-block " id="events-block-25892" data-slidesdesktop="5" data-slidestablet="4" data-slidesmobile="2">

    <div class="header-block info">

    <div>
                        <h2><a href="/events/stage/">Stage & Dance</a></h2>

            </div>

    <div>
                    <a href="/events/stage/">Browse All</a>
            </div>

</div>


    <ul class="grid-events slick-horizontal-list smsh-components-tabs-slider mobile-slider-no-right-margin" v-show="showPreloadedTab">
                    <li >
    <a href="https://www.smartshanghai.com/event/73424">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/06/19/83c968e0-7c67-4390-946b-61948e2cf35f.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2023/06/19/83c968e0-7c67-4390-946b-61948e2cf35f.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/06/19/83c968e0-7c67-4390-946b-61948e2cf35f.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                SpicyComedy English Stand-Up Showcase
            </h3>
            <div class="date">
                Every Thu, Fri, Sat
            </div>
            <div class="venue">
                @ SpicyComedy
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/75364">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/18/24c29dc9-7528-4109-bf70-187de8372679.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/02/18/24c29dc9-7528-4109-bf70-187de8372679.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/18/24c29dc9-7528-4109-bf70-187de8372679.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Ballet de l'Opera National de Bordeaux
            </h3>
            <div class="date">
                From May 10
            </div>
            <div class="venue">
                @ SHOAC
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/75959">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/76f72753-f1e3-49a6-9b00-ee4d7dbbf116.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/76f72753-f1e3-49a6-9b00-ee4d7dbbf116.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/76f72753-f1e3-49a6-9b00-ee4d7dbbf116.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Modanse by Svetlana Zakharova
            </h3>
            <div class="date">
                May 15 and May 16
            </div>
            <div class="venue">
                @ Grand Theatre
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/65727">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/21/e015514c-9b6f-4112-ab08-0046935e0d6e.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/03/21/e015514c-9b6f-4112-ab08-0046935e0d6e.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/21/e015514c-9b6f-4112-ab08-0046935e0d6e.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Moulin Spectacular
            </h3>
            <div class="date">
                May 17 and May 18
            </div>
            <div class="venue">
                @ The Pearl
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/75961">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/703605a5-eaba-4aa5-9091-003360b95e66.png.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/703605a5-eaba-4aa5-9091-003360b95e66.png.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/703605a5-eaba-4aa5-9091-003360b95e66.png.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Ballet: Pas-de-deux for Toes and Fingers
            </h3>
            <div class="date">
                May 18 and May 19
            </div>
            <div class="venue">
                @ Grand Theatre
            </div>
        </div>
    </a>


</li>


                    <li style="background-color: #212121;">
                <a href="/events/stage/">
                    <div class="img">
                        <div class="browse-all square-image" style="color: ">
                            <p>All Stage & Dance</p>
                        </div>
                    </div>
                </a>
            </li>

    </ul>


</div>

                        </div>
                                                                                            <div class="box-row-gap">
                            <!-- events-block -->

<div class="smsh-components-tabs events-block " id="events-block-19075" data-slidesdesktop="5" data-slidestablet="4" data-slidesmobile="2">

    <div class="header-block info">

    <div>
                        <h2><a href="/events/community/">Community, Kids & Family</a></h2>

            </div>

    <div>
                    <a href="/events/community/">Browse All</a>
            </div>

</div>


    <ul class="grid-events slick-horizontal-list smsh-components-tabs-slider mobile-slider-no-right-margin" v-show="showPreloadedTab">
                    <li >
    <a href="https://www.smartshanghai.com/event/76145">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/a673cbfe-53bf-4c23-982d-20fe1057ab81.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/a673cbfe-53bf-4c23-982d-20fe1057ab81.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/a673cbfe-53bf-4c23-982d-20fe1057ab81.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Slow & Early: Art Before Work
            </h3>
            <div class="date">
                Mondays
            </div>
            <div class="venue">
                @ Jing'an Sculpture Park
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/76192">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/25/f3844e9b-1c59-4b2a-a0ce-07985395d5c9.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/25/f3844e9b-1c59-4b2a-a0ce-07985395d5c9.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/25/f3844e9b-1c59-4b2a-a0ce-07985395d5c9.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Zeitgeist 7-year Anniversary Beergarden
            </h3>
            <div class="date">
                From May 3
            </div>
            <div class="venue">
                @ Zeitgeist
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/35349">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/f626bf27-0edd-48e5-a257-4b38bb409477.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/f626bf27-0edd-48e5-a257-4b38bb409477.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/26/f626bf27-0edd-48e5-a257-4b38bb409477.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                BISS Puxi Open Day
            </h3>
            <div class="date">
                Thu, May 16
            </div>
            <div class="venue">
                @ BISS
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/73156">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/25d5dd9d-85ee-4af5-a8c3-8727c736af28.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/25d5dd9d-85ee-4af5-a8c3-8727c736af28.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/17/25d5dd9d-85ee-4af5-a8c3-8727c736af28.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Family Circus and Cabaret Show - Down the Rabbit Hole
            </h3>
            <div class="date">
                Sun, May 26
            </div>
            <div class="venue">
                @ The Pearl
            </div>
        </div>
    </a>


</li>


                    <li style="background-color: #212121;">
                <a href="/events/community/">
                    <div class="img">
                        <div class="browse-all square-image" style="color: ">
                            <p>All Community Events</p>
                        </div>
                    </div>
                </a>
            </li>

    </ul>


</div>

                        </div>
                                                                                            <div class="">
                            <!-- events-block -->

<div class="smsh-components-tabs events-block " id="events-block-84764" data-slidesdesktop="5" data-slidestablet="4" data-slidesmobile="2">

    <div class="header-block info">

    <div>
                        <h2><a href="/events/exhibitions/">Art Exhibitions</a></h2>

            </div>

    <div>
                    <a href="/events/exhibitions/">Browse All</a>
            </div>

</div>


    <ul class="grid-events slick-horizontal-list smsh-components-tabs-slider mobile-slider-no-right-margin" v-show="showPreloadedTab">
                    <li >
    <a href="https://www.smartshanghai.com/event/75898">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/01/f76dbb58-d494-4fe8-9061-7facd2378711.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/01/f76dbb58-d494-4fe8-9061-7facd2378711.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/01/f76dbb58-d494-4fe8-9061-7facd2378711.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                LOEWE: Crafted World
            </h3>
            <div class="date">
                Daily
            </div>
            <div class="venue">
                @ SH Exhibition Centre
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/76118">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/95acf056-c521-4f6d-b0f2-f18304f897cc.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/95acf056-c521-4f6d-b0f2-f18304f897cc.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/16/95acf056-c521-4f6d-b0f2-f18304f897cc.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Cooper & Gorfer: Sirens
            </h3>
            <div class="date">
                Daily except Mon
            </div>
            <div class="venue">
                @ Fotografiska
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/76106">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/15/603a577a-ad6a-4a8f-a507-26b0cc80c36c.png.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/15/603a577a-ad6a-4a8f-a507-26b0cc80c36c.png.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/15/603a577a-ad6a-4a8f-a507-26b0cc80c36c.png.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Studio Ghibli Story
            </h3>
            <div class="date">
                Daily
            </div>
            <div class="venue">
                @ International Media Port Art Center
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/75724">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/baa321bb-3de0-4a11-84aa-1c5f1b14ffb8.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/baa321bb-3de0-4a11-84aa-1c5f1b14ffb8.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/baa321bb-3de0-4a11-84aa-1c5f1b14ffb8.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                Titian's Flora: Venetian Painting from the Uffizi...
            </h3>
            <div class="date">
                Daily
            </div>
            <div class="venue">
                @ Bund One Art Museum
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/71157">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/397f523c-95a9-4c4a-968c-3699a3070bea.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/397f523c-95a9-4c4a-968c-3699a3070bea.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/397f523c-95a9-4c4a-968c-3699a3070bea.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #212121; ">

            <h3>
                 Museum of Art Pudong Ticket
            </h3>
            <div class="date">
                Daily except Mon
            </div>
            <div class="venue">
                @ MAP
            </div>
        </div>
    </a>


</li>


                    <li style="background-color: #212121;">
                <a href="/events/exhibitions/">
                    <div class="img">
                        <div class="browse-all square-image" style="color: ">
                            <p>All Art Exhibitions</p>
                        </div>
                    </div>
                </a>
            </li>

    </ul>


</div>

                        </div>
                                                            </div>
            </div>
        </div>


        <!-- Deals Block -->
        <div class="background-black">
            <div class="page-column">
                <div class="default-box no-right-padding-mobile list-block-skin">
                    <!-- events-block -->

<div class="smsh-components-tabs events-block with-vue-tabs" id="events-block-45372" data-slidesdesktop="5" data-slidestablet="4" data-slidesmobile="2">

    <div class="header-block no-bottom-padding info">

    <div>
                        <h2><a href="/deals/">Deals</a></h2>

            </div>

    <div>
                    <a href="/deals/">Browse All</a>
            </div>

</div>

            <ul class="header-block-tab small dark homepage-tabs">
                            <li class="active" v-on:click="loadVueTab('','events/homepageDeals/997','More Deals', '/deals/', 5, 4, 2)">Featured Deals</li>
                            <li  v-on:click="loadVueTab('','events/homepageDeals/860','All Brunch Deals', '/deals/brunch/', 5, 4, 2)">Brunch Deals</li>
                            <li  v-on:click="loadVueTab('','events/homepageDeals/144844','All Health & Wellness Deals', '/deals/health-wellness-deals/', 5, 4, 2)">Health & Wellness</li>
                    </ul>

    <ul class="grid-events slick-horizontal-list smsh-components-tabs-slider mobile-slider-no-right-margin" v-show="showPreloadedTab">
                    <li >
    <a href="https://www.smartshanghai.com/event/64660">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/c37313e9-7d3d-46d3-84ff-c243ab2a9f6a.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/c37313e9-7d3d-46d3-84ff-c243ab2a9f6a.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/c37313e9-7d3d-46d3-84ff-c243ab2a9f6a.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #ED474C; color: #ffffff;">

            <h3>
                Hot Tuesday Wings - All flavor Wings 6 for 30 rmb
            </h3>
            <div class="date">
                Tuesdays
            </div>
            <div class="venue">
                @ Cages (Jiangning Lu)
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/74086">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/21/3ad63966-7c4a-4185-80d4-5c3de76a02d8.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/02/21/3ad63966-7c4a-4185-80d4-5c3de76a02d8.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/21/3ad63966-7c4a-4185-80d4-5c3de76a02d8.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #ED474C; color: #ffffff;">

            <h3>
                Early Bird Tomahawk Special - 50% Off Steak
            </h3>
            <div class="date">
                Daily except Fri & Sat
            </div>
            <div class="venue">
                @ Cuivre
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/65940">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/01/30/ca3a1c8c-f933-4344-ad13-76157de9f8cb.png.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/01/30/ca3a1c8c-f933-4344-ad13-76157de9f8cb.png.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/01/30/ca3a1c8c-f933-4344-ad13-76157de9f8cb.png.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #ED474C; color: #ffffff;">

            <h3>
                Schnitzel Tuesday - 98rmb All You Can Eat
            </h3>
            <div class="date">
                Tuesdays
            </div>
            <div class="venue">
                @ Zeitgeist
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/75197">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/01/19/93b94ea0-8ec8-4256-928d-19283360c57d.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/01/19/93b94ea0-8ec8-4256-928d-19283360c57d.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/01/19/93b94ea0-8ec8-4256-928d-19283360c57d.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #ED474C; color: #ffffff;">

            <h3>
                Signature Tasting for Two - Only 685rmb
            </h3>
            <div class="date">
                Daily
            </div>
            <div class="venue">
                @ ATELIER NO.3
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/73871">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/11/37d45b3d-cf64-4cc3-a2c3-d82cee375778.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/03/11/37d45b3d-cf64-4cc3-a2c3-d82cee375778.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/03/11/37d45b3d-cf64-4cc3-a2c3-d82cee375778.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #ED474C; color: #ffffff;">

            <h3>
                New Buffet at Conrad Shanghai Lane 11 - For only...
            </h3>
            <div class="date">
                Daily except Mon
            </div>
            <div class="venue">
                @ Lane 11
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/74623">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/272da954-a23b-494e-9517-62ad43d706e2.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/272da954-a23b-494e-9517-62ad43d706e2.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/272da954-a23b-494e-9517-62ad43d706e2.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #ED474C; color: #ffffff;">

            <h3>
                Rösti Night - One Rösti + Drink for 88rmb
            </h3>
            <div class="date">
                Tuesdays
            </div>
            <div class="venue">
                @ Abbey Road
            </div>
        </div>
    </a>


</li>
                    <li >
    <a href="https://www.smartshanghai.com/event/74819">
        <div class="img square-image">
            <picture>
                                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/01/30/a68baabb-d98f-46f6-99e0-e19c1e19eeb4.jpg.190.190.webp 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/01/30/a68baabb-d98f-46f6-99e0-e19c1e19eeb4.jpg.380.380.webp 380w" sizes="190px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/01/30/a68baabb-d98f-46f6-99e0-e19c1e19eeb4.jpg.190.190.jpg" alt="" width="190" height="auto">
            </picture>
        </div>
        <div class="body" style="background-color: #ED474C; color: #ffffff;">

            <h3>
                So Burgers - Free Beer w/ Burgers
            </h3>
            <div class="date">
                Tuesdays
            </div>
            <div class="venue">
                @ So Mezze
            </div>
        </div>
    </a>


</li>


                    <li style="background-color: #ED474C;">
                <a href="/deals/">
                    <div class="img">
                        <div class="browse-all square-image">
                            <p>Browse All</p>
                        </div>
                    </div>
                </a>
            </li>

    </ul>


    <div class="preloader" id="wires-preloader" v-show="showLoader">
        <img src="https://images.smartshanghai.com/img/general/loading.svg" alt="">
    </div>


    <div v-if="noResults" class="noResults">
        <p>Oh, there's nothing here right now. <a href="/events/add" target="_blank">Add your event here</a></p>
    </div>

    <div v-if="ajaxResults">
        <ul class="grid-events slick-horizontal-list smsh-components-tabs-vue-slider mobile-slider-no-right-margin">
            <li v-for="ev in ajaxResults" :key="ev.id">

                <a :href="ev.listing_url">
                    <div class="img square-image">
                        <picture>
                            <source :srcset=getSourceSet(replaceUrlWithCompressedUrl(ev.thumbnail_url),190,190) sizes="190px" type="image/webp">
                            <img :src="getImageSource(replaceUrlWithCompressedUrl(ev.thumbnail_url),190,190)"  alt="" width="190" height="190">
                        </picture>
                    </div>

                    <div class="body">
                        <div class="date">
                            {{-- {{ ev.human_readable_date }} --}}
                        </div>
                        <h3>
                            {{-- {{ ev.title }} --}}
                        </h3>
                        <p class="venue">
                            {{-- {{ ev.venue_name_en }} --}}
                        </p>
                    </div>
                </a>
            </li>

            <li>
                <a :href="url">
                    <div class="img">
                        <div class="browse-all square-image">
                            {{-- <p>{{ buttonLabel }}</p> --}}
                        </div>
                    </div>
                </a>
            </li>

        </ul>
    </div>

</div>

                </div>
            </div>
        </div>


        <!-- Smash Block -->
        <div class="background-yellow" style="padding: 0 0 30px 0;">
            <div class="page-column">
                <div class="default-box no-right-padding-mobile list-block-skin">
                    <!-- events-block -->

<div class="smsh-components-tabs smash-block" data-slidesdesktop="3" data-slidestablet="3" data-slidesmobile="1">


    <div class="header-block info">
        <div>
            <h2><a href="/smash/">Smash</a></h2>
            <p class="teaser">Cool Gifts made in Shanghai </p>
        </div>
        <div>
            <a href="/smash/">Browse All</a>
        </div>
    </div>

    <ul class="grid-smash slick-horizontal-list smsh-components-tabs-slider mobile-slider-no-right-margin" >

                    <li class="list-featured-smash">
    <a href="https://www.smartshanghai.com/smash/fashion-accessories/shanghai-necklace">
        <div class="img square-image">

                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/bc68070c-8a68-4648-92b6-0efc57ab81d1.jpg.332.332.webP 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/bc68070c-8a68-4648-92b6-0efc57ab81d1.jpg.664.664.webP 664w" sizes="332px" type="image/webP">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/02/bc68070c-8a68-4648-92b6-0efc57ab81d1.jpg.332.332.jpg" loading="lazy" width="332" height="332">
            </picture>

        </div>
        <div class="body" style="background-color: black; color: white;">
            <div>
                <h3>
                    Shanghai Necklace
                </h3>
                <div class="price">
                                        <div class="price">¥450rmb</div>
                </div>
                <div class="text">
                    <div class="venue">
                        By: <span>Fernanda Sung Jewelry</span>
                    </div>
                    <div class="buy">
                        Buy Now
                    </div>
                </div>
            </div>
        </div>
    </a>
</li>
                    <li class="list-featured-smash">
    <a href="https://www.smartshanghai.com/smash/books-and-magazines/my-shanghai-holiday-gift-box-set">
        <div class="img square-image">

                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/20/9ad8aa08-020b-41a6-978b-d5df38233325.jpg.332.332.webP 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/02/20/9ad8aa08-020b-41a6-978b-d5df38233325.jpg.664.664.webP 664w" sizes="332px" type="image/webP">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/20/9ad8aa08-020b-41a6-978b-d5df38233325.jpg.332.332.jpg" loading="lazy" width="332" height="332">
            </picture>

        </div>
        <div class="body" style="background-color: black; color: white;">
            <div>
                <h3>
                    My Shanghai  Surprise Gift Box Set
                </h3>
                <div class="price">
                                        <div class="price">¥158rmb</div>
                </div>
                <div class="text">
                    <div class="venue">
                        By: <span>My Shanghai</span>
                    </div>
                    <div class="buy">
                        Buy Now
                    </div>
                </div>
            </div>
        </div>
    </a>
</li>
                    <li class="list-featured-smash">
    <a href="https://www.smartshanghai.com/smash/fashion-accessories/smash-tote">
        <div class="img square-image">

                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/28/024854c6-1c4f-41cc-895e-389e0bd33e87.jpg.332.332.webP 190w, https://images.smartshanghai.com.cn/uploads/compressed/2024/02/28/024854c6-1c4f-41cc-895e-389e0bd33e87.jpg.664.664.webP 664w" sizes="332px" type="image/webP">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/02/28/024854c6-1c4f-41cc-895e-389e0bd33e87.jpg.332.332.jpg" loading="lazy" width="332" height="332">
            </picture>

        </div>
        <div class="body" style="background-color: black; color: white;">
            <div>
                <h3>
                    The Shanghai Tote Bag
                </h3>
                <div class="price">
                                        <div class="price">¥90</div>
                </div>
                <div class="text">
                    <div class="venue">
                        By: <span>Hao Me Zi</span>
                    </div>
                    <div class="buy">
                        Buy Now
                    </div>
                </div>
            </div>
        </div>
    </a>
</li>
                    <li class="list-featured-smash">
    <a href="https://www.smartshanghai.com/smash/homegoods/waldo-poster">
        <div class="img square-image">

                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/c2190c92-6358-4d02-8ece-3d6bd8b1fd01.jpg.332.332.webP 190w, https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/c2190c92-6358-4d02-8ece-3d6bd8b1fd01.jpg.664.664.webP 664w" sizes="332px" type="image/webP">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/c2190c92-6358-4d02-8ece-3d6bd8b1fd01.jpg.332.332.jpg" loading="lazy" width="332" height="332">
            </picture>

        </div>
        <div class="body" style="background-color: black; color: white;">
            <div>
                <h3>
                    Waldo - Poster
                </h3>
                <div class="price">
                                        <div class="price">¥1200-1800rmb</div>
                </div>
                <div class="text">
                    <div class="venue">
                        By: <span>PLUSMINUS</span>
                    </div>
                    <div class="buy">
                        Buy Now
                    </div>
                </div>
            </div>
        </div>
    </a>
</li>
                    <li class="list-featured-smash">
    <a href="https://www.smartshanghai.com/smash/books-and-magazines/my-shanghai-hardcover-childrens-book">
        <div class="img square-image">

                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/9dda4042-7d69-4e62-90ad-899ff53d6d02.jpg.332.332.webP 190w, https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/9dda4042-7d69-4e62-90ad-899ff53d6d02.jpg.664.664.webP 664w" sizes="332px" type="image/webP">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/21/9dda4042-7d69-4e62-90ad-899ff53d6d02.jpg.332.332.jpg" loading="lazy" width="332" height="332">
            </picture>

        </div>
        <div class="body" style="background-color: black; color: white;">
            <div>
                <h3>
                    My Shanghai Hardcover Childrens Book
                </h3>
                <div class="price">
                                        <div class="price">¥98</div>
                </div>
                <div class="text">
                    <div class="venue">
                        By: <span>My Shanghai</span>
                    </div>
                    <div class="buy">
                        Buy Now
                    </div>
                </div>
            </div>
        </div>
    </a>
</li>
                    <li class="list-featured-smash">
    <a href="https://www.smartshanghai.com/smash/homegoods/maotai-poster">
        <div class="img square-image">

                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/293628ec-99e0-4b34-9dbe-a0890b43874d.jpg.332.332.webP 190w, https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/293628ec-99e0-4b34-9dbe-a0890b43874d.jpg.664.664.webP 664w" sizes="332px" type="image/webP">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/293628ec-99e0-4b34-9dbe-a0890b43874d.jpg.332.332.jpg" loading="lazy" width="332" height="332">
            </picture>

        </div>
        <div class="body" style="background-color: black; color: white;">
            <div>
                <h3>
                    Maotai - Poster
                </h3>
                <div class="price">
                                        <div class="price">¥1200-1800rmb</div>
                </div>
                <div class="text">
                    <div class="venue">
                        By: <span>PLUSMINUS</span>
                    </div>
                    <div class="buy">
                        Buy Now
                    </div>
                </div>
            </div>
        </div>
    </a>
</li>

    </ul>


</div>

                </div>
            </div>
        </div>


        <div class="background-gray">
                            <div class="background-white white-line-header">
                    <div class="ad-block">
    <div class="main-column">
        <p class="ad-notice">Advertisement</p>
        <div class="img">
            <a href="https://adsrvr.smartshanghai.com/ads/adclick/17501?url=https://www.jiahui.com/en " target="_blank">
                <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/04/17/ab9ea554-2159-4caa-ae8e-9a62ae90ba77.jpg" class="topBanner">
            </a>
        </div>
    </div>
</div>
                </div>
                    </div>

        <!-- web housing -->
<div class="background-gray">
    <div class="page-column hidden-in-mobile housing-component">
        <div id="housing-component" class="housing-block default-box">

            <div class="header-block info">
                <div>
                    <h2><a href="/housing/">Housing</a></h2>
                    <p>Shanghai's Longest Running English Housing Classifieds</p>
                </div>
                <div>
                    <a href="/housing/">Browse All</a>
                </div>

            </div>

            <ul class="header-block-tab small homepage-tabs">
                <li class="active"><a class="open-feed-popup" href="/housing/">Recent Activity</a></li>
                                    <li class="housingCategory" data-name="Apartments for Rent" data-url="/housing/apartments-rent/">
                        <a href="/housing/apartments-rent/">
                            Apartments for Rent
                        </a>
                    </li>
                                    <li class="housingCategory" data-name="Apartments for Sale" data-url="/housing/apartments-sale/">
                        <a href="/housing/apartments-sale/">
                            Apartments for Sale
                        </a>
                    </li>
                                    <li class="housingCategory" data-name="Shared Apartments" data-url="/housing/shared-apartments/">
                        <a href="/housing/shared-apartments/">
                            Shared Apartments
                        </a>
                    </li>
                                    <li class="housingCategory" data-name="Serviced Apartments" data-url="/housing/service-apartments/">
                        <a href="/housing/service-apartments/">
                            Serviced Apartments
                        </a>
                    </li>
                                    <li class="housingCategory" data-name="Co-Living" data-url="/housing/co-living/">
                        <a href="/housing/co-living/">
                            Co-Living
                        </a>
                    </li>
                            </ul>

            <div class="hero">
                <div class="box-row-gap">

                    <ul class="grid-housing">

                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/housing/apartments-rent/1590642">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/b798b3b0-3433-44e6-a556-f33375e9c272.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/b798b3b0-3433-44e6-a556-f33375e9c272.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/b798b3b0-3433-44e6-a556-f33375e9c272.jpg.330.220.jpg" alt="Ideal price same size 2 br nice decoration good to share M2/7 Jing'an  Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥9,800</span> / Month
            </div>

            <h3>
                Ideal price same size 2 br nice decoration good to share M2/7 Jing'an
            </h3>

            <div class="district">
                Jing'an
            </div>

            <div class="essentials">
                110 sqm, 2 Bedrooms & 1 Bathrooms
            </div>





        </div>



    </a>
</li>

                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/housing/apartments-rent/1590641">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/7a063665-1fe9-45f4-90b4-74d8c616adfa.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/7a063665-1fe9-45f4-90b4-74d8c616adfa.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/7a063665-1fe9-45f4-90b4-74d8c616adfa.jpg.330.220.jpg" alt="Valuable Huaihai Rd 1BR with Balcony/Wallheating/Oven 10K Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥10,000</span> / Month
            </div>

            <h3>
                Valuable Huaihai Rd 1BR with Balcony/Wallheating/Oven 10K
            </h3>

            <div class="district">
                Xuhui
            </div>

            <div class="essentials">
                65 sqm, 1 Bedrooms & 1 Bathrooms
            </div>





        </div>



    </a>
</li>

                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/housing/apartments-rent/1590640">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/28cde057-afe1-4848-8226-1c36e698fc66.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/28cde057-afe1-4848-8226-1c36e698fc66.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/28cde057-afe1-4848-8226-1c36e698fc66.jpg.330.220.jpg" alt="Luxury Compound/Exquisite Deco/Line7/ Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥55,000</span> / Month
            </div>

            <h3>
                Luxury Compound/Exquisite Deco/Line7/
            </h3>

            <div class="district">
                Huangpu
            </div>

            <div class="essentials">
                200 sqm, 4 Bedrooms & 2 Bathrooms
            </div>





        </div>



    </a>
</li>

                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/housing/apartments-rent/1589872">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/25/8fbbb680-9e4b-41ed-9b81-d4f8efe456df.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/25/8fbbb680-9e4b-41ed-9b81-d4f8efe456df.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/25/8fbbb680-9e4b-41ed-9b81-d4f8efe456df.jpg.330.220.jpg" alt="Joffre Garden  with storage room(newly renovated) Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥33,000</span> / Month
            </div>

            <h3>
                Joffre Garden  with storage room(newly renovated)
            </h3>

            <div class="district">
                Xuhui
            </div>

            <div class="essentials">
                155 sqm, 3 Bedrooms & 2 Bathrooms
            </div>





        </div>



    </a>
</li>

                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/housing/apartments-rent/1590639">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/770baf10-dacf-49b1-a0f4-c8a087c981db.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/770baf10-dacf-49b1-a0f4-c8a087c981db.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/770baf10-dacf-49b1-a0f4-c8a087c981db.jpg.330.220.jpg" alt="Historic 4 bedroom lane house for rent at heart of shanghai  Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥60,000</span> / Month
            </div>

            <h3>
                Historic 4 bedroom lane house for rent at heart of shanghai
            </h3>

            <div class="district">
                Huangpu
            </div>

            <div class="essentials">
                177 sqm, 4 Bedrooms & 3 Bathrooms
            </div>





        </div>



    </a>
</li>

                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/housing/apartments-rent/1590638">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/c8f019e8-d47a-40ca-9a1d-b5fcfe1d767e.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/c8f019e8-d47a-40ca-9a1d-b5fcfe1d767e.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/c8f019e8-d47a-40ca-9a1d-b5fcfe1d767e.jpg.330.220.jpg" alt="Character/Spacious Huangpu 3BR+3BA with Terrace,Wallheating,29.8K   Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥29,800</span> / Month
            </div>

            <h3>
                Character/Spacious Huangpu 3BR+3BA with Terrace,Wallheating,29.8K
            </h3>

            <div class="district">
                Huangpu
            </div>

            <div class="essentials">
                200 sqm, 3 Bedrooms & 3 Bathrooms
            </div>





        </div>



    </a>
</li>

                                            </ul>


                </div>
            </div>


            <div class="header-block info">
                <div>
                    <h2><a href="/properties/">Offices</a></h2>
                    <p>Offices, Serviced Offices & Commercial Spaces in Shanghai</p>
                </div>
                <div>
                    <a href="/properties/">Browse All</a>
                </div>

            </div>



            <ul class="header-block-tab small homepage-tabs">
                <li class="active"><a class="open-feed-popup" href="/housing/">Recent Activity</a></li>
                                    <li class="housingCategory" data-name="Offices" data-url="/properties/offices/">
                        <a href="/properties/offices/">
                            Offices
                        </a>
                    </li>
                                    <li class="housingCategory" data-name="Commercial" data-url="/properties/commercial-spaces/">
                        <a href="/properties/commercial-spaces/">
                            Commercial
                        </a>
                    </li>
                                    <li class="housingCategory" data-name="Event Spaces" data-url="/properties/event-spaces/">
                        <a href="/properties/event-spaces/">
                            Event Spaces
                        </a>
                    </li>
                                    <li class="housingCategory" data-name="Meeting Rooms" data-url="/properties/meeting-rooms/">
                        <a href="/properties/meeting-rooms/">
                            Meeting Rooms
                        </a>
                    </li>
                            </ul>


            <div class="hero">
                <div class="box-row-gap">

                    <ul class="grid-housing">

                                                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/properties/offices/1590645">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/0dc76469-a21a-4450-9ca8-468d26e7ce93.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/0dc76469-a21a-4450-9ca8-468d26e7ce93.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/0dc76469-a21a-4450-9ca8-468d26e7ce93.jpg.330.220.jpg" alt="High ceiling & Bright office nr LouShanGuan Rd  Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥32,100</span> / Month
            </div>

            <h3>
                High ceiling & Bright office nr LouShanGuan Rd
            </h3>

            <div class="district">
                Changning
            </div>

            <div class="essentials">
                140 sqm
            </div>





        </div>



    </a>
</li>

                                                                                                                <li class="listing">
    <a href="https://www.smartshanghai.com/properties/commercial-spaces/1590633">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/1b1dcdd6-75ad-437f-abf8-6f5de688a7de.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/1b1dcdd6-75ad-437f-abf8-6f5de688a7de.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/1b1dcdd6-75ad-437f-abf8-6f5de688a7de.jpg.330.220.jpg" alt="Creative Park Retail nr WuDing Road Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥57,142</span> / Month
            </div>

            <h3>
                Creative Park Retail nr WuDing Road
            </h3>

            <div class="district">
                Jing'an
            </div>

            <div class="essentials">
                137 sqm
            </div>





        </div>



    </a>
</li>

                                                                                                                <li class="listing">
    <a href="https://www.smartshanghai.com/properties/commercial-spaces/1590632">
        <div class="img">
                        <picture>
                <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/7640f71d-7a00-4d16-a416-1fbd6b03199f.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/7640f71d-7a00-4d16-a416-1fbd6b03199f.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/30/7640f71d-7a00-4d16-a416-1fbd6b03199f.jpg.330.220.jpg" alt="F&B or Retail Space near ChangPing RD  Listing on SmartShanghai housing">
            </picture>
        </div>

        <div class="body" style=" ">

            <div class="price">
                <span>¥60,351</span> / Month
            </div>

            <h3>
                F&B or Retail Space near ChangPing RD
            </h3>

            <div class="district">
                Jing'an
            </div>

            <div class="essentials">
                177 sqm
            </div>





        </div>



    </a>
</li>

                                                                                                                                                                                </ul>


                </div>
            </div>






            <div class="links">
                + <a href="/housing/add/">Post A Listing</a>
            </div>
        </div>
    </div>
</div>
        <!-- mobile tab -->
<div class="page-column hidden-on-desktop">
    <div class="background-white default-box" id="tabsBlock">

        <div class="page-column ">
            <ul class="tabs-block">
                <li class="header-block no-bottom-padding info active" data-tab-name="housing">
                    <h2>Housing</h2>
                </li>

                <li class="header-block no-bottom-padding info" data-tab-name="buyandsell">
                    <h2>Buy & Sell</h2>
                </li>

                <li class="header-block no-bottom-padding info" data-tab-name="jobs">
                    <h2>Jobs</h2>
                </li>
            </ul>

        </div>

        <ul class="tabs-datas-block">
            <!-- mobile housing -->
            <li class="housing active">
                <div class="page-column hidden-on-desktop">
                    <div id="housing-component" class="housing-block smsh-components-tabs list-block-skin image-hover">

                        <div id="housing-tabs">

                            <ul class="housing listings another" v-show="showPreloadedTab">
                                                                    <li class="listing" style="width: 100%; display: inline-block;">
                                        <a href="https://www.smartshanghai.com/housing/apartments-rent/1590642" tabindex="0">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/30/b798b3b0-3433-44e6-a556-f33375e9c272.jpg" alt="Ideal price same size 2 br nice decoration good to share M2/7 Jing'an ">
                                            </div>
                                            <div class="body">

                                                <h3>
                                                    Ideal price same size 2 br nice decoration good to share M2/7 Jing'an
                                                </h3>
                                                <div class="price">
                                                    9800 / Month
                                                </div>
                                                <div>
                                                    Jing'an
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="listing" style="width: 100%; display: inline-block;">
                                        <a href="https://www.smartshanghai.com/housing/apartments-rent/1590641" tabindex="0">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/30/7a063665-1fe9-45f4-90b4-74d8c616adfa.jpg" alt="Valuable Huaihai Rd 1BR with Balcony/Wallheating/Oven 10K">
                                            </div>
                                            <div class="body">

                                                <h3>
                                                    Valuable Huaihai Rd 1BR with Balcony/Wallheating/Oven 10K
                                                </h3>
                                                <div class="price">
                                                    10000 / Month
                                                </div>
                                                <div>
                                                    Xuhui
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="listing" style="width: 100%; display: inline-block;">
                                        <a href="https://www.smartshanghai.com/housing/apartments-rent/1590640" tabindex="0">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/30/28cde057-afe1-4848-8226-1c36e698fc66.jpg" alt="Luxury Compound/Exquisite Deco/Line7/">
                                            </div>
                                            <div class="body">

                                                <h3>
                                                    Luxury Compound/Exquisite Deco/Line7/
                                                </h3>
                                                <div class="price">
                                                    55000 / Month
                                                </div>
                                                <div>
                                                    Huangpu
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="listing" style="width: 100%; display: inline-block;">
                                        <a href="https://www.smartshanghai.com/housing/apartments-rent/1589872" tabindex="0">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/25/8fbbb680-9e4b-41ed-9b81-d4f8efe456df.jpg" alt="Joffre Garden  with storage room(newly renovated)">
                                            </div>
                                            <div class="body">

                                                <h3>
                                                    Joffre Garden  with storage room(newly renovated)
                                                </h3>
                                                <div class="price">
                                                    33000 / Month
                                                </div>
                                                <div>
                                                    Xuhui
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="listing" style="width: 100%; display: inline-block;">
                                        <a href="https://www.smartshanghai.com/housing/apartments-rent/1590639" tabindex="0">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/30/770baf10-dacf-49b1-a0f4-c8a087c981db.jpg" alt="Historic 4 bedroom lane house for rent at heart of shanghai ">
                                            </div>
                                            <div class="body">

                                                <h3>
                                                    Historic 4 bedroom lane house for rent at heart of shanghai
                                                </h3>
                                                <div class="price">
                                                    60000 / Month
                                                </div>
                                                <div>
                                                    Huangpu
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="listing" style="width: 100%; display: inline-block;">
                                        <a href="https://www.smartshanghai.com/housing/apartments-rent/1590638" tabindex="0">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/30/c8f019e8-d47a-40ca-9a1d-b5fcfe1d767e.jpg" alt="Character/Spacious Huangpu 3BR+3BA with Terrace,Wallheating,29.8K  ">
                                            </div>
                                            <div class="body">

                                                <h3>
                                                    Character/Spacious Huangpu 3BR+3BA with Terrace,Wallheating,29.8K
                                                </h3>
                                                <div class="price">
                                                    29800 / Month
                                                </div>
                                                <div>
                                                    Huangpu
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                            </ul>

                        </div>

                        <div class="category-buttons less-top-padding">

                            <div class="row">

                                <div class="button all-button">
                                    <a href="/housing/">All Apartments</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- mobile B&S -->
            <li class="buyandsell">
                <div class="page-column hidden-on-desktop">
                    <div class="buyandsell-block smsh-components-tabs list-block-skin image-hover">
                        <div id="buyandsell-mobile-tabs">

                            <ul class="buyandsell listings" v-show="showPreloadedTab">
                                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/buyandsell/electronics/105731">
        <div class="img">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/3db6fd34-9164-4670-b25a-9842287f5cee.jpg.300.200.webp 300w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/3db6fd34-9164-4670-b25a-9842287f5cee.jpg.600.400.webp 600w" sizes="300px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/3db6fd34-9164-4670-b25a-9842287f5cee.jpg.300.200.jpg" loading="lazy">
                </picture>

        </div>
        <div class="body">
            <div class="box-tag">
                Electronics & IT
            </div>
            <h3>
                high quality vacuum cleaner for sale
            </h3>
            <div class="price">
                ¥ 140
            </div>
        </div>
    </a>
</li>
                                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/buyandsell/home-furniture/105732">
        <div class="img">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/cfdd8218-776f-473a-83d5-8c02062d182a.jpg.300.200.webp 300w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/cfdd8218-776f-473a-83d5-8c02062d182a.jpg.600.400.webp 600w" sizes="300px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/cfdd8218-776f-473a-83d5-8c02062d182a.jpg.300.200.jpg" loading="lazy">
                </picture>

        </div>
        <div class="body">
            <div class="box-tag">
                Home & Furniture
            </div>
            <h3>
                Herman Miller Aeron 2 for sale
            </h3>
            <div class="price">
                ¥ 5200
            </div>
        </div>
    </a>
</li>
                                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/buyandsell/electronics/105758">
        <div class="img">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/0b9a0c6b-c9a4-4d09-b4b2-75803fdb4806.jpg.300.200.webp 300w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/0b9a0c6b-c9a4-4d09-b4b2-75803fdb4806.jpg.600.400.webp 600w" sizes="300px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/0b9a0c6b-c9a4-4d09-b4b2-75803fdb4806.jpg.300.200.jpg" loading="lazy">
                </picture>

        </div>
        <div class="body">
            <div class="box-tag">
                Electronics & IT
            </div>
            <h3>
                Disney strawberry bear power bank brand new for sale
            </h3>
            <div class="price">
                ¥ 120
            </div>
        </div>
    </a>
</li>
                                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/buyandsell/electronics/105759">
        <div class="img">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/e2af1d50-3d1d-4c2b-abf7-59938e5800d7.jpg.300.200.webp 300w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/e2af1d50-3d1d-4c2b-abf7-59938e5800d7.jpg.600.400.webp 600w" sizes="300px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/11/e2af1d50-3d1d-4c2b-abf7-59938e5800d7.jpg.300.200.jpg" loading="lazy">
                </picture>

        </div>
        <div class="body">
            <div class="box-tag">
                Electronics & IT
            </div>
            <h3>
                2nd hand hard disk for sale
            </h3>
            <div class="price">
                ¥ 1300
            </div>
        </div>
    </a>
</li>
                                                                    <li class="listing">
    <a href="https://www.smartshanghai.com/buyandsell/electronics/105729">
        <div class="img">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/2fdc41e9-a3b4-4165-95c7-e8f183ba5366.jpg.300.200.webp 300w, https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/2fdc41e9-a3b4-4165-95c7-e8f183ba5366.jpg.600.400.webp 600w" sizes="300px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2024/04/03/2fdc41e9-a3b4-4165-95c7-e8f183ba5366.jpg.300.200.jpg" loading="lazy">
                </picture>

        </div>
        <div class="body">
            <div class="box-tag">
                Electronics & IT
            </div>
            <h3>
                hadsan camera belt/bag
            </h3>
            <div class="price">
                ¥ 200
            </div>
        </div>
    </a>
</li>
                                                            </ul>

                            <div class="category-buttons">

                                <div class="row">

                                    <div class="section">
                                        <div class="button all-button">
                                            <a href="/buyandsell/" class="event-button">All Listings</a>
                                        </div>
                                    </div>

                                    <div class="section">
                                        <div class="button">
                                            <a href="/buyandsell/add">+ List your Item</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>

            <!-- mobile Jobs -->
            <li class="jobs">
                <div class="page-column hidden-on-desktop">
                    <div class="job-block smsh-components-tabs">
                        <div id="jobs-mobile-tabs">

                            <ul class="job listings v8-list" v-show="showPreloadedTab">
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/business-mgmt/21727" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/25/dce324de-7f92-4edc-9665-b48cc9c26d80.png" alt="Shanghai American School Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Marketing and Communications Director</h3>
                                                    <span>Shanghai American School</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>5 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/business-mgmt/21726" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/25/52207e7e-d124-40cd-aaaf-4277f08b6981.png" alt="Shanghai American School Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Director of Facilities</h3>
                                                    <span>Shanghai American School</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>5 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/fitness-and-beauty/21615" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2023/09/12/497fa8cf-f999-4289-8e54-5016db5e3a59.jpg" alt="iGrowModel Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Child Models</h3>
                                                    <span>iGrowModel</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>6 days  ago</div>
                                                                                                        <div class="job-city">Freelance
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/writing-editing/20091" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2020/06/18/c2f6e35f-cdb1-4c29-9246-0d332c7ffd20.png" alt="SmartShanghai.com Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Managing Editor</h3>
                                                    <span>SmartShanghai.com</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>7 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/arts-design-music/18982" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/09/16/0327c62d-aef3-4818-8190-b8ace275a4d3.jpg" alt="That's Mandarin Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Web & Graphic Designer</h3>
                                                    <span>That's Mandarin</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>8 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/it-and-web/19370" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/09/16/0327c62d-aef3-4818-8190-b8ace275a4d3.jpg" alt="That's Mandarin Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>SEO Specialist</h3>
                                                    <span>That's Mandarin</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>8 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/arts-design-music/18402" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/09/16/0327c62d-aef3-4818-8190-b8ace275a4d3.jpg" alt="That's Mandarin Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Graphic Designer</h3>
                                                    <span>That's Mandarin</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>8 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/sales-and-marketing/20435" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/05/28/b8dec2df-a6ab-4070-9838-420ebe909320.png" alt="WTO Precision Tools Holders Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Office Administrator</h3>
                                                    <span>WTO Precision Tools Holders</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>11 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/banking-and-finance/21394" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/01/04/9515a13b-7834-4b00-92b2-003bf4188687.png" alt="Hexagone Capital Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Wealth Management Associate</h3>
                                                    <span>Hexagone Capital</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>12 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                                    <li class="jobs-list">
                                        <a href="https://www.smartshanghai.com/jobs/sales-and-marketing/21724" class="flex-container">
                                            <div class="img">
                                                <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/17/653dc26a-7c0c-40fa-8baa-c9af8e6b4286.jpg" alt="AdvaCare Pharma Logo" loading="lazy" width="80" height="52">
                                            </div>

                                            <div class="gongzuo">
                                                <div>
                                                    <h3>Marketing Campaign Specialist</h3>
                                                    <span>AdvaCare Pharma</span>
                                                </div>
                                                <div class="shijian">
                                                                                                            <div>13 days  ago</div>
                                                                                                        <div class="job-city">Fulltime
                                                        in Shanghai</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                                            </ul>

                            <div class="category-buttons">

                                <div class="row">

                                    <div class="section">
                                        <div class="button all-button">
                                            <a href="/jobs/" class="event-button">All Jobs</a>
                                        </div>
                                    </div>

                                    <div class="section">
                                        <div class="button">
                                            <a href="/jobs/add"> + Post a Job</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="job-block-sidebar ad-block">
                        <div class="job-sidebar-adv">
                            <p class="ad-notice">Advertisement</p>
                            <a href="/apps"><img src="https://images.smartshanghai.com/img/apps/smsh-web-banner-skyscraper@2x.jpg"></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

        <div class="background-white job-hero-component">
    <div class="page-column hidden-in-mobile hidden-on-tablets">

        <div class="job-block default-box">
            <div class="header-block no-bottom-padding info">

                <h2><a href="/jobs/">Jobs</a></h2>

            </div>

            <div id="jobs-tabs" class="smsh-components-tabs with-vue-tabs" data-typeslug="jobs" data-apiurl="/jobs?tag_id=" data-limit="6">

                <ul class="header-block-tab small homepage-tabs">
                    <li><a v-on:click="loadVueTab('null','/jobs','Teaching Jobs')">Latest Jobs</a></li>
                    <li><a v-on:click="loadVueTab('18','/jobs?tag_id=18','Teaching Jobs')">Teaching</a></li>
                    <li><a v-on:click="loadVueTab('958','jobs?tag_id=958','Sales & Biz Dev Jobs')">Sales & Biz Dev</a></li>
                                    </ul>

                <ul class="job listings v8-list" v-show="showPreloadedTab">
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/business-mgmt/21727" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/25/dce324de-7f92-4edc-9665-b48cc9c26d80.png" alt="Shanghai American School Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Marketing and Communications Director</h3>
                                        <span>Shanghai American School</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>5 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/business-mgmt/21726" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/25/52207e7e-d124-40cd-aaaf-4277f08b6981.png" alt="Shanghai American School Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Director of Facilities</h3>
                                        <span>Shanghai American School</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>5 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/fitness-and-beauty/21615" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2023/09/12/497fa8cf-f999-4289-8e54-5016db5e3a59.jpg" alt="iGrowModel Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Child Models</h3>
                                        <span>iGrowModel</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>6 days  ago</div>
                                                                                <div class="job-city">Freelance
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/writing-editing/20091" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2020/06/18/c2f6e35f-cdb1-4c29-9246-0d332c7ffd20.png" alt="SmartShanghai.com Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Managing Editor</h3>
                                        <span>SmartShanghai.com</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>7 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/arts-design-music/18982" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/09/16/0327c62d-aef3-4818-8190-b8ace275a4d3.jpg" alt="That's Mandarin Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Web & Graphic Designer</h3>
                                        <span>That's Mandarin</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>8 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/it-and-web/19370" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/09/16/0327c62d-aef3-4818-8190-b8ace275a4d3.jpg" alt="That's Mandarin Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>SEO Specialist</h3>
                                        <span>That's Mandarin</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>8 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/arts-design-music/18402" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/09/16/0327c62d-aef3-4818-8190-b8ace275a4d3.jpg" alt="That's Mandarin Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Graphic Designer</h3>
                                        <span>That's Mandarin</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>8 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/sales-and-marketing/20435" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/05/28/b8dec2df-a6ab-4070-9838-420ebe909320.png" alt="WTO Precision Tools Holders Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Office Administrator</h3>
                                        <span>WTO Precision Tools Holders</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>11 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/banking-and-finance/21394" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2021/01/04/9515a13b-7834-4b00-92b2-003bf4188687.png" alt="Hexagone Capital Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Wealth Management Associate</h3>
                                        <span>Hexagone Capital</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>12 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                            <li class="jobs-list">
                            <a href="https://www.smartshanghai.com/jobs/sales-and-marketing/21724" class="flex-container">
                                <div class="img">
                                    <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/04/17/653dc26a-7c0c-40fa-8baa-c9af8e6b4286.jpg" alt="AdvaCare Pharma Logo" loading="lazy" width="80" height="52">
                                </div>

                                <div class="gongzuo">
                                    <div>
                                        <h3>Marketing Campaign Specialist</h3>
                                        <span>AdvaCare Pharma</span>
                                    </div>
                                    <div class="shijian">
                                                                                    <div>13 days  ago</div>
                                                                                <div class="job-city">Fulltime
                                            in Shanghai</div>
                                    </div>


                                </div>
                            </a>
                        </li>
                                    </ul>

                <div class="preloader" id="wires-preloader" v-show="showLoader">
                    <img src="https://images.smartshanghai.com/img/general/loading.svg" alt="">
                </div>

                <div v-if="ajaxResults">
                    <ul class="job listings v8-list">
                        <li v-for="job in ajaxResults" :key="job.message" class="jobs-list">

                            <a  :href="job.listing_url" class="flex-container">
                                <div class="img">
                                    <picture>
                                        <source :srcset=getSourceSet(replaceUrlWithCompressedUrl(job.company_logo_url),80,52) sizes="100px" type="image/webp">
                                        <img :src="getImageSource(replaceUrlWithCompressedUrl(job.company_logo_url),80,52)"  alt="" width="100%">
                                    </picture>
                                </div>

                                <div class="gongzuo">
                                    {{-- <div>
                                        <h3>{{ job.title }}</h3>
                                        <span>{{ job.company_name }}</span>
                                    </div>
                                    <div class="shijian">
                                        <div v-if="job.is_new" class="new">NEW</div>
                                        <div v-else>{{ job.human_readable_listing_age }}</div>

                                        <div class="job-city">{{ job.human_readable_employment_type }}
                                            in Shanghai</div>
                                    </div> --}}


                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="category-buttons">

                    <div class="row">

                        <div class="section">
                            <div class="button all-button">
                                <a href="/jobs/" class="event-button" v-if="defaultCategoryButton">All Jobs</a>
                                {{-- <a :href="categoryButtonUrl" class="event-button" v-if="vueCategoryButton">All {{ categoryButtonLabel }}</a> --}}
                            </div>
                        </div>

                        <div class="section">
                            <div class="button">
                                <a href="/jobs/add"> + Post a Job</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>







        </div>

        <div class="job-block-sidebar ad-block">
            <div class="job-sidebar-adv">
                <p class="ad-notice">Advertisement</p>
                <a href="/apps"><img src="https://images.smartshanghai.com/img/apps/smsh-web-banner-skyscraper@2x.jpg"></a>
            </div>
        </div>
    </div>
</div>

        <!-- Useful Services -->
        <div class="background-gray">
            <div class="page-column">
                <div class="default-box list-block-skin">
                    <div class="smsh-components-tabs venues-block " id="venues-block-99200" data-slidesdesktop="3" data-slidestablet="3" data-slidesmobile="2">

    <div class="header-block info">

    <div>
                        <h2><a href="/services/">Useful Services</a></h2>

            </div>

    <div>
                    <a href="/services/">Browse All</a>
            </div>

</div>


    <ul class="grid-venues smsh-components-tabs-slider slick-horizontal-list mobile-slider-no-right-margin " v-show="showPreloadedTab">
                    <li>
    <a href="https://www.smartshanghai.com/venue/6642/You_You_Space">
        <div class="img square-image-on-mobile">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/10/18/3a399f16-75e9-4f9b-9f3f-78f859a745ec.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2022/10/18/3a399f16-75e9-4f9b-9f3f-78f859a745ec.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/10/18/3a399f16-75e9-4f9b-9f3f-78f859a745ec.jpg.330.220.jpg" alt="You You Space Relocation" width="330" height="auto">
                </picture>
                    </div>
        <div class="body" style="background-color: #ffffff; padding: 12px;">


            <h3>
                                    You You Space Relocation
                            </h3>

            <div class="wenzi">
                This moving, relocation and self-storage service company has a mom & pop feel with great, personalized service. They've been around for...
            </div>
            <div class="tag">
                Moving & Relocation, Storage, Yangpu
            </div>
        </div>
    </a>
</li>
                    <li>
    <a href="https://www.smartshanghai.com/venue/24585/d_andrea_partners_legal_counsel">
        <div class="img square-image-on-mobile">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2021/12/13/df4e7002-12f8-42d2-bb52-a753a7ad1050.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2021/12/13/df4e7002-12f8-42d2-bb52-a753a7ad1050.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2021/12/13/df4e7002-12f8-42d2-bb52-a753a7ad1050.jpg.330.220.jpg" alt="D'Andrea & Partners Legal Counsel" width="330" height="auto">
                </picture>
                    </div>
        <div class="body" style="background-color: #ffffff; padding: 12px;">


            <h3>
                                    D'Andrea & Partners Legal Counsel
                            </h3>

            <div class="wenzi">
                D'Andrea & Partners is an international law firm founded in 2013. They have a fairly diverse portfolio of clients ranging from large...
            </div>
            <div class="tag">
                Corporate Law, Lawyers, Changning
            </div>
        </div>
    </a>
</li>
                    <li>
    <a href="https://www.smartshanghai.com/venue/26268/ayi_matchmakers">
        <div class="img square-image-on-mobile">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/01/19/338ad632-fa99-4a5d-b45b-378d79788bec.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2023/01/19/338ad632-fa99-4a5d-b45b-378d79788bec.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/01/19/338ad632-fa99-4a5d-b45b-378d79788bec.jpg.330.220.jpg" alt="Ayi Matchmakers" width="330" height="auto">
                </picture>
                    </div>
        <div class="body" style="background-color: #ffffff; padding: 12px;">


            <h3>
                                    Ayi Matchmakers
                            </h3>

            <div class="wenzi">
                One of the most established and popular agencies in the foreign community, Ayi Matchmakers is started by a Dutch expat with two former...
            </div>
            <div class="tag">
                Nanny (Ayi) Agencies
            </div>
        </div>
    </a>
</li>
                    <li>
    <a href="https://www.smartshanghai.com/venue/6999/epermarket">
        <div class="img square-image-on-mobile">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/03/25/ee04a162-346e-4548-a2dd-3e26202bb82e.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2022/03/25/ee04a162-346e-4548-a2dd-3e26202bb82e.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/03/25/ee04a162-346e-4548-a2dd-3e26202bb82e.jpg.330.220.jpg" alt="Epermarket" width="330" height="auto">
                </picture>
                    </div>
        <div class="body" style="background-color: #ffffff; padding: 12px;">


            <h3>
                                    Epermarket
                            </h3>

            <div class="wenzi">
                Epermarket.com offers a wide variety of imported products from all over the world. The selection ranges from fresh meats and...
            </div>
            <div class="tag">
                Imported Groceries, Online Shopping, Grocery Delivery
            </div>
        </div>
    </a>
</li>
                    <li>
    <a href="https://www.smartshanghai.com/venue/14777/inntech_zhongshan_nan_lu">
        <div class="img square-image-on-mobile">
                            <picture>
                                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/12/13/63f44af0-55e8-4629-83f9-457814cc298c.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2023/12/13/63f44af0-55e8-4629-83f9-457814cc298c.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                    <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/12/13/63f44af0-55e8-4629-83f9-457814cc298c.jpg.330.220.jpg" alt="InnTech IT Solutions" width="330" height="auto">
                </picture>
                    </div>
        <div class="body" style="background-color: #ffffff; padding: 12px;">


            <h3>
                                    InnTech IT Solutions
                            </h3>

            <div class="wenzi">
                InnTech IT Solutions is a professional and reliable IT Managed Services Provider firm, located in Shanghai. The team includes 20+...
            </div>
            <div class="tag">
                Computer & Tech Support, App & Software Development, Xuhui
            </div>
        </div>
    </a>
</li>

                                <li>
                <a href="/services/">
                    <div class="img">
                        <div class="browse-all"></div>
                    </div>
                </a>
            </li>

    </ul>


</div>


                </div>
            </div>
        </div>


        <!-- How to Hero -->
        <div class="background-white">
            <div class="page-column">
                <div class="default-box list-block-skin">
                    <!-- wire-block -->

<div class="smsh-components-tabs articles-block " id="articles-block-43050" data-slidesdesktop="4" data-slidestablet="3" data-slidesmobile="2">

    <div class="header-block info">

    <div>
                        <h2><a href="/articles/?column=how-to">How To Guides</a></h2>

            </div>

    <div>
                    <a href="/articles/?column=how-to">Browse All</a>
            </div>

</div>




    <ul class="grid-articles slick-horizontal-list list-block-skin smsh-components-tabs-slider mobile-slider-no-right-margin" v-show="showPreloadedTab">
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/shanghai-life/how-to-move-away-from-shanghai-relocation-visa-tax-gifts">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/07/14/39064c54-81da-48e7-88b7-a14b1f8adc03.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2022/07/14/39064c54-81da-48e7-88b7-a14b1f8adc03.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/07/14/39064c54-81da-48e7-88b7-a14b1f8adc03.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                [How To]: Leave China the Right Way
            </h3>
            <div class="tag">
                Shanghai Life
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/activities/explore-suzhou-creek-by-boat">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/5471941a-06ae-45af-a525-67fcbeeb863b.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/5471941a-06ae-45af-a525-67fcbeeb863b.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/11/07/5471941a-06ae-45af-a525-67fcbeeb863b.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                [How To]: Explore Suzhou Creek By Boat
            </h3>
            <div class="tag">
                Activities
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/community/how-to-get-a-dog-license-in-china">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/08/22/524bc6fc-2ec8-4426-a6bc-fb35e25c22a6.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2023/08/22/524bc6fc-2ec8-4426-a6bc-fb35e25c22a6.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/08/22/524bc6fc-2ec8-4426-a6bc-fb35e25c22a6.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                [How To]: Get a Dog License in Shanghai
            </h3>
            <div class="tag">
                Shanghai Life
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/shanghai-life/how-to-donate-cloth-in-shanghai">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/06/13/680e78a9-b349-4d39-88f1-7dafe6dc00a5.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2023/06/13/680e78a9-b349-4d39-88f1-7dafe6dc00a5.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/06/13/680e78a9-b349-4d39-88f1-7dafe6dc00a5.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                [How To]: Use an App to Donate Your Clothes
            </h3>
            <div class="tag">
                Business
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/travel-and-sightseeing/how-to-get-an-entry-exit-permit-for-your-kid">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2023/05/16/53764675-b9d6-42ef-85db-fa429ac4d306.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2023/05/16/53764675-b9d6-42ef-85db-fa429ac4d306.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2023/05/16/53764675-b9d6-42ef-85db-fa429ac4d306.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                [How To]: Get An Entry-Exit Permit For Your Mixed-Nationality Kid
            </h3>
            <div class="tag">
                Travel & Sightseeing
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/wellbeing/in-depth-the-ultimate-guide-to-health-insurance-in-china">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/08/29/7abb86b7-fe96-4485-b2f8-ad32fe874b07.png.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2022/08/29/7abb86b7-fe96-4485-b2f8-ad32fe874b07.png.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/08/29/7abb86b7-fe96-4485-b2f8-ad32fe874b07.png.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                Health Insurance In China
            </h3>
            <div class="tag">
                Health & Wellbeing
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/wellbeing/how-to-get-a-divorce-in-shanghai">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/08/15/32fa25b2-e974-43d5-9bce-80b92671235d.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2022/08/15/32fa25b2-e974-43d5-9bce-80b92671235d.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/08/15/32fa25b2-e974-43d5-9bce-80b92671235d.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                [How to]: Get a Divorce in SH
            </h3>
            <div class="tag">
                Health & Wellbeing
            </div>
        </div>
    </a>
</li>
                    <li style="background-color: #f5f5f5">
    <a href="https://www.smartshanghai.com/articles/shanghai-life/how-to-get-to-shanghai-in-2022-maybe">


        <div class="img">
                                                                <picture>
                        <source srcset="https://images.smartshanghai.com.cn/uploads/compressed/2022/08/02/9743b8f2-ca37-4d91-bc42-fea19e589e87.jpg.330.220.webp 330w, https://images.smartshanghai.com.cn/uploads/compressed/2022/08/02/9743b8f2-ca37-4d91-bc42-fea19e589e87.jpg.660.440.webp 660w" sizes="330px" type="image/webp">
                        <img src="https://images.smartshanghai.com.cn/uploads/compressed/2022/08/02/9743b8f2-ca37-4d91-bc42-fea19e589e87.jpg.330.220.jpg" alt="" width="330" height="auto" loading="lazy">
                    </picture>


                                    </div>

        <div class="body" style="background-color: #f5f5f5;">
            <h3 >
                [How To]: Get in to Shanghai from Outside of China in 2022
            </h3>
            <div class="tag">
                Shanghai Life
            </div>
        </div>
    </a>
</li>

                                <li>
                <a href="/articles/?column=how-to">
                    <div class="img">
                        <div class="browse-all square-image"></div>
                    </div>
                </a>
            </li>

    </ul>




</div>


                </div>
            </div>
        </div>

    </div>

@endsection
