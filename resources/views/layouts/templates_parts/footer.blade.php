<div id="site-footer">

    <div class="ad-block">
<div class="main-column">
<p class="ad-notice">Advertisement</p>
<div class="img">
    <a href="https://adsrvr.smartshanghai.com/ads/adclick/17510?url=https://www.smartshanghai.com/event/76118" target="_blank">
        <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/04/28/7a93112a-cfd2-4590-a305-9ee6753d2636.jpg" class="topBanner">
    </a>
</div>
</div>
</div>

    <div id="sponsor-footer">
    <div class="site-main-column">
        <p>A special thanks for the continued support and sponsorship of our industry partners:</p>
        <ul>

                                    <li><a href="http://www.samsclub.cn" target="_blank">Sam's Club</a></li>
                                    <li><a href="https://gubei-en.suis.com.cn/" target="_blank">Shanghai United International School, Gubei Campus</a></li>
                                    <li><a href="http://ichinese.sjtu.edu.cn/" target="_blank">Shanghai Jiao Tong University - School of Humanities</a></li>
                                    <li><a href="http://www.harrowshanghai.cn/" target="_blank">Harrow International School Shanghai</a></li>
                                    <li><a href="http://www.saschina.org/en" target="_blank">Shanghai American School (SAS)</a></li>
                                    <li><a href="https://www.jiahui.com/en" target="_blank">Jiahui International Hospital</a></li>
                                    <li><a href="http://shanghai.ufh.com.cn/" target="_blank">Shanghai United Family Hospital</a></li>
                                    <li><a href="http://www.sinounitedhealth.com.cn" target="_blank">SinoUnited Health</a></li>
                            </ul>
    </div>
</div>

<div class="footer-ground">
<div class="site-main-column">
    <div class="about-us">
        <div class="logo">
            <a href="https://www.smartshanghai.com">
                <div class="footer--smsh-logo-write footer--smsh-logo-write-dims"></div>
            </a>
        </div>
        <p>
            SmartShanghai.com is an independent media publication dedicated to honesty and editorial transparency. We are for Shanghai residents,
            written by a team of long-term, opinionated and knowledgeable writers and editors. We never give an opinion or recommendation that we
            wouldn’t also share with our own friends and family.
        </p>
    </div>
    <div class="navigate">
        <h2>
            NAVIGATE
        </h2>
        <ul>
            @foreach ($pages as $page)
            <li><a href="{{route('page-detail', $page->slug)}}">{{$page->title}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="get-listed">
        <h2>
            GET LISTED
        </h2>
        <ul>
            <li><a href="https://www.smartshanghai.com/events/add">List An Event</a> on our <a href="http://www.smartshanghai.com/events/" class="gray">curated editorial events page</a></li>
            <li><a href="https://www.smartshanghai.com/jobs/add">Post a Job</a> on <a href="http://www.smartshanghai.com/jobs/" class="gray">Shanghai's best English jobs boards</a></li>
            <li><a href="https://www.smartshanghai.com/buyandsell/add">Sell Something</a> using our <a href="http://www.smartshanghai.com/buyandsell/" class="gray">Buy & Sell classifieds</a></li>
            <li><a href="https://www.smartshanghai.com/service/venues">List Your Business</a> in <a href="http://www.smartshanghai.com/listings/" class="gray">Shanghai's largest English directory</a></li>
            <li><a href="https://www.smartticket.cn/sell">Sell Tickets</a> using our <a href="https://www.smartticket.cn/" class="gray">SmartTicket ticketing service</a></li>
        </ul>
    </div>
</div>
</div>

<div class="footer-copyright">
<div class="site-main-column">
    <div class="weblink">
        <h2>
            FOLLOW US
        </h2>
        <ul class="sharing-buttons">
        <li>
    <a href="https://www.instagram.com/smartshanghai/" target="_blank">
        <div class="footer--instagram footer--instagram-dims"></div>
    </a>
</li>
<li>
    <a href="http://www.twitter.com/smartshanghai" target="_blank">
        <div class="footer--twitter footer--twitter-dims"></div>
    </a>
</li>
<li>
    <a href="http://www.facebook.com/smartshanghai" target="_blank">
        <div class="footer--facebook footer--instagram-dims"></div>
    </a>
</li>
<li>
    <a href="https://www.smartshanghai.com/wechat/">
        <div class="footer--wechat footer--wechat-dims"></div>
    </a>
</li>
<li>
    <a href="https://www.linkedin.com/company/smartshanghai.com/" target="_blank">
        <div class="footer--linkedin footer--linkedin-dims"></div>
    </a>
</li>
<li>
    <a href="https://weibo.com/smartshanghai" target="_blank">
        <div class="footer--weibo footer--weibo-dims"></div>
    </a>
</li>
</ul>
    </div>
    <div class="copyright">
        <p>
            All material is copyright of SmartShanghai.com <br>
            Made in Shanghai since 2003 | <a href="https://beian.miit.gov.cn" target="_blank">沪ICP备08111777号-9</a>
        </p>
        <a class="return-top" href="#" title="Return Top"></a>
    </div>
</div>
</div>

</div>



<div class="lightBox user-favorites-light-box" id="userFavoritesLightbox">
<div id="preloader" style="text-align: center"><img src="https://images.smartshanghai.com/img/general/loading.svg"></div>
<div id="hero">


<div id="requireSignIn" class="hidden">
    <div class="header">
        <h1>Sign in to sync your<br>favorites across devices</h1>
        <p class="close"></p>
    </div>

    <div class="light-box-body" style="padding: 0">
        <a href="/signin/"><button class="save" style="width: 100%; border-radius: 0;">Sign In</button></a>
    </div>


</div>

<div id="saveToFavorites" class="hidden">
    <div class="header">
        <h1>Save to Favorites</h1>
        <p class="close"></p>
    </div>

    <div class="light-box-body">
        <textarea name="comment" rows="2" placeholder="Type a short comment why you like this venue, e.g. 'Great date spot with Bund view'" style="width: 100%;"></textarea>
        <div class="checkbox">
            <input type="checkbox" name="is_public" value="1" checked="checked" id="favorites-is-public">
            <label for="favorites-is-public">This comment is <b>public</b> and may be seen by others</label>
        </div>

        <div class="scroll-hero">
            <ul class="light-favorites-list" id="favorites-list-selection">
            </ul>
            <ul>
                <li class="create-new-list"><img src="https://images.smartshanghai.com/img/icons/svg/icon-plus.svg">Create a new List</li>
            </ul>
        </div>


        <input type="text" name="new_list_title" class="hidden add-list" placeholder="Enter List Title">
        <input type="hidden" name="venueId" value="">

            <input type="submit" name="saveFavorite" value="Loading ..." class="save disabled" disabled>

    </div>
</div>

</div>


<div id="confirmation" class="hidden confirmation">
<h1>Favorite Added</h1>
<button class="close button blue">Close Window</button>
</div>

</div>
<div id="sales-request-lightbox" class="lightbox hidden">

<h2>Thanks for your interest in our services</h2>
<p>Please reach out to our sales team through a contact channel below:</p>

<h3>By WeChat</h3>
<div class="sales-contact-method">
<div class="qrCode"><img src="https://images.smartshanghai.com/img/service/jacob-smsh-qr.png" loading="lazy"></div>
</div>













</div>

<div class="site-fixed-bottom">

<div class="feedback-box" id="smsh-feedback-box">

<div class="open-point"></div>

<div class="bg-shadow"></div>

<div class="feedback-box-body">

<div class="spinner hidden">
    <div><img src="https://images.smartshanghai.com/img/general/loading.svg"></div>
</div>

<div class="success hidden">
    <div>
        <h1>Thank you for your feedback</h1>
        <p>Our editors and admins will review your message and respond to <a href="/userarea/messaging/">your inbox</a></p>
        <button class="button default2020 close">Close Window</button>
    </div>
</div>

<div class="error hidden">
    <div id="errorMessage"></div>
</div>

<div class="feedback-selects box" id="feedback-index">

    <div class="navigation">
        <div class="return"><br></div>
        <div class="close">Close</div>
    </div>
    <div class="hero">
        <div class="feedback-section-button withBottomBorder" data-tabslug="feedback-wronginfo">
            <h3>
                <div class="icon-wrong icon-wrong-dims" style="margin-right: 10px"></div>
                Report Wrong Information
            </h3>
            <div class="txt">
                Tell our editors about wrong, outdated or missing information on this page
            </div>
        </div>

        <div class="feedback-section-button withBottomBorder" data-tabslug="feedback-bugreport">
            <h3>
                <div class="icon-bug icon-bug-dims" style="margin-right: 10px"></div>
                Report a Technical Bug
            </h3>
            <div class="txt">
                Tell our tech team about something that isn’t working the way it should
            </div>

        </div>

        <div class="feedback-section-button" data-tabslug="feedback-general">
            <h3>
                <div class="icon-wrong icon-wrong-dims" style="margin-right: 10px"></div>
                General Feedback
            </h3>
            <div class="txt">
                Reach out to us with feedback or ideas, or learn how to promote your Business
            </div>
        </div>


    </div>

</div>


<div class="feedback-selects technical hidden" id="feedback-bugreport">

    <div class="navigation">
        <div class="return">&#8592; Return</div>
        <div class="close">Close</div>
    </div>


    <div class="hero">
        <div>
            <h3>
                <div class="icon-bug icon-bug-dims" style="margin-right: 10px"></div>
                Report a Technical Bug
            </h3>
            <div class="txt">
                Tell our tech team about something that isn’t working the way it should
            </div>

        </div>
        <div>
            <textarea name="" cols="30" rows="6"></textarea>
            <a href="" class="button send submitFeedbackForm" data-supportuserslug="technicalSupport">SEND</a>
        </div>
    </div>

</div>


<div class="feedback-selects wrong-information hidden" id="feedback-wronginfo">

    <div class="navigation">
        <div class="return">&#8592; Return</div>
        <div class="close">Close</div>
    </div>

    <div class="hero">
        <div>
            <h3>
                <div class="icon-wrong icon-wrong-dims" style="margin-right: 10px"></div>
                Report Wrong Information
            </h3>
            <div class="txt">
                Tell our editors about wrong, outdated or missing information on this page
            </div>
        </div>
        <div>
            <textarea name="" cols="30" rows="6"></textarea>
            <a href="" class="button send submitFeedbackForm"  data-supportuserslug="directorySupport">SEND</a>
        </div>
    </div>


</div>


<div class="feedback-selects general hidden" id="feedback-general">

    <div class="navigation">
        <div class="return">&#8592; Return</div>
        <div class="close">Close</div>
    </div>

    <div class="hero">
        <div class="feedback-section-button withBottomBorder">
            <a class="divider" href="/mediakit/">
                <h3>
                    <div class="icon-promote icon-promote-dims" style="margin-right: 10px"></div>
                    Promote Your Business
                </h3>
                <div class="txt">
                    Learn more about how you can promote your business with us.
                </div>
            </a>
        </div>

        <div class="feedback-section-button withBottomBorder">
            <a class="divider" href="/userarea">
                <h3>
                    <div class="icon-get icon-get-dims" style="margin-right: 10px"></div>
                    Get Listed
                </h3>
                <div class="txt">
                    List an Event, a venue, job, apartment or something to sell on our site
                </div>
            </a>
        </div>

        <div class="feedback-section-button">
            <a href="/contact/?sourceId=2">
                <h3>
                    <div class="icon-general icon-general-dims" style="margin-right: 10px"></div>
                    General Enquiry
                </h3>
                <div class="txt">
                    Reach out to our team with feedback, ideas or to speak to a specific department
                </div>
            </a>
        </div>

    </div>

</div>
</div>

</div>


</div>
