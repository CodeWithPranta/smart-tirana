@extends('layouts.main')
@section('content')
<div class="buyandsell-list">

    <div id="list-menu-2020">
<div class="site-main-column ">
    <div>
        <ul class="breadcrumbs">
            <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
            <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                        </ul>

                        <h1>{{$category->name}}</h1>
                </div>

    <ul class="user-action">
        <li class="post">
            <a href="">LIST ANYTHING</a>
        </li>
    </ul>
</div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


        <div class="category-tags-hero sctc-bind">
            <ul class="first-pane categories-list simple-category-tags">

                @foreach ($subCategories as $subCat)
                <li>
                    <div>
                        <a href="/">
                            <div class="tag-icon">
                                <img src="{{asset('storage/'.$subCat->image)}}">
                            </div>
                            <span>{{$subCat->name}}</span>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>


    </div>

</div>
    <div class="listing-filter-v8">
<div class="site-main-column">
    <form method="get" class="listing-filter-form bns-filter-bind" action="https://www.smartshanghai.com/buyandsell">
        <input type="hidden" class="order-input-bind" name="order" value="">







        <div class="shadows-shade"></div>

    </form>
</div>
</div>
    <div class="site-main-column">

        <div class="content">

            <div class="left bns-list-app-bind">
                <div class="listing-sub-filter">
                    <div class="filters">
                        <div class="sorting-order">
                            <select name="order" id="list-order" class="select sorting-order-bind">
                                <option value="newest">Sort by Most Recent</option>
<option value="cheapest">Sort by Cheapest</option>

                            </select>
                        </div>

                        <div class="results">
                            <span>57</span> Results
                        </div>
                    </div>
                </div>

                <div class="">

                    <ul class="list-buyandsell">
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105968">
                            <a href="https://www.smartshanghai.com/buyandsell/babychildren/105968" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/06/08/68899eb8-5c40-4738-aa12-ebf35a8e8ac3.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Baby & Children</div>

                                        <h3>NIU GOVA G0 scooter. Best condition </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 1500
                                        </div>

                                        <div class="description">
                                            Selling a NIU G0 scooter in very good condition. Max. speed 35km/h. Total km 905. Removable battery.
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-06-08 by esaslantas
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105940">
                            <a href="https://www.smartshanghai.com/buyandsell/home-furniture/105940" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/25/c0634c60-da9e-43b0-8163-0f4b09aba19e.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Home & Furniture</div>

                                        <h3>Free furniture </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 0
                                        </div>

                                        <div class="description">
                                            Confortable leather coach
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-06-07 by User 0837
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105967">
                            <a href="https://www.smartshanghai.com/buyandsell/electronics/105967" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/06/06/9f2b1a06-68ac-47be-89c7-56529b5b7518.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Electronics & IT</div>

                                        <h3>midea steamer</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 100
                                        </div>

                                        <div class="description">
                                            Midea clothes steamer. Simple to use, fill container with water, turn on and go! Used less than 10x.

pick up only...
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-06-06 by hkfuey
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105966">
                            <a href="https://www.smartshanghai.com/buyandsell/pets-animals/105966" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/06/05/6573e26c-0410-4190-b227-7ad66714a0da.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Pets & Animals</div>

                                        <h3>Mimi is looking for a new home</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 1
                                        </div>

                                        <div class="description">
                                            Hello,
His owner can’t take care of him anymore, he’s an 8 years old cat, not neutered. He needs someone who can...
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-06-05 by JasonWatt
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105965">
                            <a href="https://www.smartshanghai.com/buyandsell/pets-animals/105965" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/06/05/3add9143-9628-4607-b7df-7e8b42ae7c9b.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Pets & Animals</div>

                                        <h3>Lovely corgi in adoption</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 1
                                        </div>

                                        <div class="description">
                                            Hi! I am Parker, a six month corgi dog.  I was abandoned but now I am ready for a new home. I am fully vaccinated....
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-06-05 by User 6973
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105962">
                            <a href="https://www.smartshanghai.com/buyandsell/music-instruments/105962" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/31/e9dcd94e-8f19-42f6-9ae9-71c894a89db2.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Music & Instruments</div>

                                        <h3>Fender - acoustic Guitar  </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 1200
                                        </div>

                                        <div class="description">
                                            - New Fender Guitar CD-60S.
- Comes with Cover / travel case

Never played because I can't play guitar, bought for...
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-31 by roryfromholland
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105961">
                            <a href="https://www.smartshanghai.com/buyandsell/others/105961" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/31/0f9bcd37-747e-4920-bfaa-b84abba1936d.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Others </div>

                                        <h3>Selling WFOE Company Package</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 30.000
                                        </div>

                                        <div class="description">
                                            Hi there,

I am selling my Company NUDE skincare.
It is a WFOE registered in March 2018 and is running ever...
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-31 by c84
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105958">
                            <a href="https://www.smartshanghai.com/buyandsell/home-furniture/105958" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/30/269978e7-8b0b-4a2b-a2fe-24572aed9486.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Home & Furniture</div>

                                        <h3>Muji Large Air Hunidifier </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 88
                                        </div>

                                        <div class="description">
                                            Muji Air Humidifier. Condition like new, rarely used. Fully functional. New price 300+ RMB.

Location: Jingan /...
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-30 by NJCS1986
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105943">
                            <a href="https://www.smartshanghai.com/buyandsell/electronics/105943" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/37d53078-e416-4486-a007-b7d9947a85ff.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Electronics & IT</div>

                                        <h3>Sennheiser Bluetooth Noise Cancelling Earphones </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 500
                                        </div>

                                        <div class="description">
                                            CX PLUS SE TRUE WIRELESS SENNHEISER
All parts included. (incl USB charger)
Used for a week but doesn’t work for my...
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by User 8646
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105946">
                            <a href="https://www.smartshanghai.com/buyandsell/books-and-magazines/105946" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/85009070-fbc5-413f-a6dd-02bb470d863e.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Books & Magazines</div>

                                        <h3>Assorted books, comics</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 150
                                        </div>

                                        <div class="description">
                                            All 36 books for only RMB150
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by User 2085
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105947">
                            <a href="https://www.smartshanghai.com/buyandsell/babychildren/105947" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/982ad5bc-b20c-4bd6-863f-375d5475a958.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Baby & Children</div>

                                        <h3>Elle Brand Luggage 20”</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 120
                                        </div>

                                        <div class="description">
                                            silver color/ light grey Gently used. smooth and quiet 4 wheeler
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by User 6682
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105951">
                            <a href="https://www.smartshanghai.com/buyandsell/clothing-apparel/105951" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/65f5afe3-b6bf-4179-baba-c1486e3c44e7.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Clothing & Apparel</div>

                                        <h3>Sling bag with Adjustable long straps </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 50
                                        </div>

                                        <div class="description">
                                            Brand new. Black color. Light and stylish
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by User 6682
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105957">
                            <a href="https://www.smartshanghai.com/buyandsell/home-furniture/105957" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/012308c9-1b47-4f80-81b0-da9de12908f3.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Home & Furniture</div>

                                        <h3>Iron Soleusair</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 100
                                        </div>

                                        <div class="description">
                                            Small iron, rarely used, in good condition
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by andy
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105956">
                            <a href="https://www.smartshanghai.com/buyandsell/home-furniture/105956" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/40ebbdbd-17ec-4b4a-aa0b-df62b6e7391e.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Home & Furniture</div>

                                        <h3>Airfryer</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 100
                                        </div>

                                        <div class="description">
                                            Airfryer,  works well, no idea about the model.
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by andy
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105955">
                            <a href="https://www.smartshanghai.com/buyandsell/electronics/105955" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/e769e767-b1cf-4726-82f9-14cd8ff416c6.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Electronics & IT</div>

                                        <h3>Xiaomi Airpurifier</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 700
                                        </div>

                                        <div class="description">
                                            Bought around August 2022. Filter changed and still has 69% left.
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by andy
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105954">
                            <a href="https://www.smartshanghai.com/buyandsell/home-furniture/105954" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/29/d1b4e927-8c59-44d5-bbd3-a1bae117d925.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Home & Furniture</div>

                                        <h3>Ironing Board </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 50
                                        </div>

                                        <div class="description">
                                            basic but solid ironing board in good condition. Original price 150 RMB.
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-29 by NJCS1986
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105917">
                            <a href="https://www.smartshanghai.com/buyandsell/home-furniture/105917" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/20/98630aee-df41-4dcf-9448-36ece58f8434.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Home & Furniture</div>

                                        <h3>SmartAir Air Filter </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 500
                                        </div>

                                        <div class="description">
                                            Used in good condition.

This high-capacity large room HEPA air purifier delivers an impressive 820 cubic feet per...
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-28 by NJCS1986
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105948">
                            <a href="https://www.smartshanghai.com/buyandsell/babychildren/105948" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/28/52055bd3-8cf8-4596-85f7-a93583c50441.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Baby & Children</div>

                                        <h3>Elle Brand Luggage 24”</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 180
                                        </div>

                                        <div class="description">
                                            Dark Blue. Used once. Smooth and quiet 4 wheeler
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-28 by User 6682
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105952">
                            <a href="https://www.smartshanghai.com/buyandsell/health-sports/105952" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/28/df5e68fc-f44b-467e-aa37-559ff5120074.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Health & Sports</div>

                                        <h3>Tennis Racket HEAD </h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 350
                                        </div>

                                        <div class="description">
                                            Tennis Racket HEAD (men) used 2 times only. + 8 balls
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-28 by User 5366
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                    <li class="listing" data-track-content data-content-name="bs-list" data-content-piece="bs-105953">
                            <a href="https://www.smartshanghai.com/buyandsell/health-sports/105953" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="https://images.smartshanghai.com.cn/uploads/repository/2024/05/28/fbc68119-36af-408f-ac14-11027c4f79b3.jpg">
                                    </div>

                                    <div class="body">
                                        <div class="area">Health & Sports</div>

                                        <h3>Gym Bench</h3>

                                        <div class="price">
                                            <span class="currency">¥</span> 450
                                        </div>

                                        <div class="description">
                                            Gym bench, very good condition
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                2024-05-28 by User 5366
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                                                </ul>

                        <div class="pagination">
    <ul>

                        <li class="next">
                <a href="https://www.smartshanghai.com/buyandsell/?page=2">
                    Next Page <div class="icon right-arrow"></div>
                </a>
            </li>
                </ul>
</div>
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17506?url=https://idurl.cn/ZYCzte">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/04/22/4fbf36d3-14a2-4f51-9552-1a2134c2af4a.jpg" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17527?url=https://www.smartshanghai.com/event/76218">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/27/b8fcc943-3106-438e-b2cb-a21398ac3bb5.jpg" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17519?url=https://www.jiahui.com/en ">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/03c80579-5ec2-4d4e-ac46-73382ae36b76.jpg" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17525?url=https://www.smartshanghai.com/event/73184">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/16/e24def13-7aac-4e35-a8a5-63154804d412.gif" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17522?url=https://www.smartshanghai.com/event/76294">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/13/cbe02674-01d1-4611-a6aa-89998645a201.gif" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17530?url=https://www.smartshanghai.com/event/76441">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/30/e18fe683-adf2-4c07-b596-515b4a505326.jpg" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17533?url= https://www.smartshanghai.com/event/64108">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/a2ea0f74-e5d6-4af4-981e-7b5dec4fe5d3.gif" class="bigBox" width="300" height="260">
</a>
<a href="https://adsrvr.smartshanghai.com/ads/adclick/17531?url=https://www.smartshanghai.com/venue/15089/j_hotel_shanghai_tower">
    <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/03/c11deb92-c074-45ad-a4f3-5c3dd10750e5.jpg" class="bigBox" width="300" height="260">
</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
