@extends('layouts.main')
@section('content')

@if ($category->slug === 'service')
<div class="buyandsell-list">

    <div id="list-menu-2020">
        <div class="site-main-column ">
            <div>
                <ul class="breadcrumbs">
                    <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
                    <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                </ul>
            </div>

            <ul class="user-action">
                <li class="post">
                    <a href="{{route('filament.vendor.auth.login')}}">LIST ANYTHING</a>
                </li>
            </ul>
        </div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


            <div class="category-tags-hero sctc-bind">
                <ul class="first-pane categories-list simple-category-tags">

                    @foreach ($subCategories as $subCat)
                    <li>
                        <div>
                            <a href="{{route('sub.category', $subCat->slug)}}">
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
            <form method="get" class="listing-filter-form bns-filter-bind"
                action="https://www.smartshanghai.com/buyandsell">
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
                        @foreach ($services as $service)
                        <li class="listing" data-track-content data-content-name="bs-list"
                            data-content-piece="bs-105968">
                            <a href="/" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="{{asset('storage/'. $service->photos[0])}}">
                                    </div>

                                    <div class="body">
                                        <div class="area">{{$service->listing->category->name}}</div>

                                        <h3>{{$service->service_title}} </h3>

                                        <div class="info">
                                            {{$service->address}}
                                        </div>
                                        <div class="info">
                                            {{$service->phone_number}}
                                        </div>
                                        <div class="info">
                                            {{$service->website}}
                                        </div>

                                        <div class="description">
                                            {!!Str::limit($service->editor_description, 50)!!}
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                by {{$service->listing->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    {{$services->links()}}
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
                        <a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg"
                                class="bigBox" width="300" height="260">
                        </a>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@elseif ($category->slug === 'buy-sell')
<div class="buyandsell-list">

    <div id="list-menu-2020">
        <div class="site-main-column ">
            <div>
                <ul class="breadcrumbs">
                    <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
                    <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                </ul>
            </div>

            <ul class="user-action">
                <li class="post">
                    <a href="{{route('filament.vendor.auth.login')}}">LIST ANYTHING</a>
                </li>
            </ul>
        </div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


            <div class="category-tags-hero sctc-bind">
                <ul class="first-pane categories-list simple-category-tags">

                    @foreach ($subCategories as $subCat)
                    <li>
                        <div>
                            <a href="{{route('sub.category', $subCat->slug)}}">
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
            <form method="get" class="listing-filter-form bns-filter-bind"
                action="https://www.smartshanghai.com/buyandsell">
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
                        @foreach ($sells as $sell)
                        <li class="listing" data-track-content data-content-name="bs-list"
                            data-content-piece="bs-105968">
                            <a href="/" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="{{asset('storage/'. $sell->attachments[0])}}">
                                    </div>

                                    <div class="body">
                                        {{-- <div class="area">{{$sell->listing->category->name}}</div> --}}

                                        <h3>{{$sell->short_product_name}} </h3>

                                        <div class="price">
                                            €{{$sell->sales_price}}
                                        </div>
                                        <div class="info">
                                            {{$sell->model_name}}
                                        </div>
                                        <div class="info">
                                            Pick up area: {{$sell->pick_up_location}}
                                        </div>

                                        <div class="description">
                                            {!!Str::limit($sell->description, 50)!!}
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                by {{$sell->listing->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    {{$sells->links()}}
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
                        <a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg"
                                class="bigBox" width="300" height="260">
                        </a>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@elseif ($category->slug === 'jobs')
<div class="buyandsell-list">

    <div id="list-menu-2020">
        <div class="site-main-column ">
            <div>
                <ul class="breadcrumbs">
                    <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
                    <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                </ul>
            </div>

            <ul class="user-action">
                <li class="post">
                    <a href="{{route('filament.vendor.auth.login')}}">LIST ANYTHING</a>
                </li>
            </ul>
        </div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


            <div class="category-tags-hero sctc-bind">
                <ul class="first-pane categories-list simple-category-tags">

                    @foreach ($subCategories as $subCat)
                    <li>
                        <div>
                            <a href="{{route('sub.category', $subCat->slug)}}">
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
            <form method="get" class="listing-filter-form bns-filter-bind"
                action="https://www.smartshanghai.com/buyandsell">
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
                        @foreach ($jobs as $job)
                        <li class="listing" data-track-content data-content-name="bs-list"
                            data-content-piece="bs-105968">
                            <a href="/" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="{{asset('storage/'. $job->listing_logo_image)}}">
                                    </div>

                                    <div class="body">
                                        {{-- <div class="area">{{$sell->listing->category->name}}</div> --}}

                                        <h3>{{$job->job_title}} </h3>

                                        <div class="info">
                                          Job type:  {{$job->job_type}}
                                        </div>
                                        <div class="info">
                                           Location: {{$job->location_type}}
                                        </div>
                                        <div class="info">
                                            Max salary: €{{$job->max_salary}}
                                        </div>

                                        <div class="description">
                                            {!!Str::limit($job->general_job_description, 50)!!}
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                by {{$job->listing->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    {{$jobs->links()}}
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
                        <a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg"
                                class="bigBox" width="300" height="260">
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@elseif ($category->slug === 'venues')
<div class="buyandsell-list">

    <div id="list-menu-2020">
        <div class="site-main-column ">
            <div>
                <ul class="breadcrumbs">
                    <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
                    <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                </ul>
            </div>

            <ul class="user-action">
                <li class="post">
                    <a href="{{route('filament.vendor.auth.login')}}">LIST ANYTHING</a>
                </li>
            </ul>
        </div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


            <div class="category-tags-hero sctc-bind">
                <ul class="first-pane categories-list simple-category-tags">

                    @foreach ($subCategories as $subCat)
                    <li>
                        <div>
                            <a href="{{route('sub.category', $subCat->slug)}}">
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
            <form method="get" class="listing-filter-form bns-filter-bind"
                action="https://www.smartshanghai.com/buyandsell">
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
                        @foreach ($venues as $venue)
                        <li class="listing" data-track-content data-content-name="bs-list"
                            data-content-piece="bs-105968">
                            <a href="/" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="{{asset('storage/'. $venue->attachments[0])}}">
                                    </div>

                                    <div class="body">
                                        {{-- <div class="area">{{$sell->listing->category->name}}</div> --}}

                                        <h3>{{$venue->venue_name}} </h3>

                                        <div class="info">
                                          Address:  {{$venue->address}}
                                        </div>
                                        <div class="info">
                                           Nearest cross: {{$venue->nearest_cross_street}}
                                        </div>
                                        <div class="info">
                                            Nearby metro: {{$venue->nearby_metro}}
                                        </div>

                                        <div class="description">
                                            {!!Str::limit($venue->venue_description, 50)!!}
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                by {{$venue->listing->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    {{$venues->links()}}
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
                        <a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg"
                                class="bigBox" width="300" height="260">
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@elseif ($category->slug === 'housing')
<div class="buyandsell-list">

    <div id="list-menu-2020">
        <div class="site-main-column ">
            <div>
                <ul class="breadcrumbs">
                    <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
                    <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                </ul>
            </div>

            <ul class="user-action">
                <li class="post">
                    <a href="{{route('filament.vendor.auth.login')}}">LIST ANYTHING</a>
                </li>
            </ul>
        </div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


            <div class="category-tags-hero sctc-bind">
                <ul class="first-pane categories-list simple-category-tags">

                    @foreach ($subCategories as $subCat)
                    <li>
                        <div>
                            <a href="{{route('sub.category', $subCat->slug)}}">
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
            <form method="get" class="listing-filter-form bns-filter-bind"
                action="https://www.smartshanghai.com/buyandsell">
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
                        @foreach ($housings as $housing)
                        <li class="listing" data-track-content data-content-name="bs-list"
                            data-content-piece="bs-105968">
                            <a href="/" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="{{asset('storage/'. $housing->photos[0])}}">
                                    </div>

                                    <div class="body">
                                        {{-- <div class="area">{{$sell->listing->category->name}}</div> --}}

                                        <h3>{{$housing->compound_or_building_name}} </h3>

                                        <div class="info">
                                          Property type:  {{$housing->property_type}}
                                        </div>
                                        <div class="info">
                                           Owner status: {{$housing->owner_status}}
                                        </div>
                                        <div class="info">
                                            Available from: {{$housing->available_from}}
                                        </div>

                                        <div class="description">
                                            {!!Str::limit($housing->basic_information, 50)!!}
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                by {{$housing->listing->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    {{$housings->links()}}
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
                        <a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg"
                                class="bigBox" width="300" height="260">
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@elseif ($category->slug === 'events')
<div class="buyandsell-list">

    <div id="list-menu-2020">
        <div class="site-main-column ">
            <div>
                <ul class="breadcrumbs">
                    <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
                    <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                </ul>
            </div>

            <ul class="user-action">
                <li class="post">
                    <a href="{{route('filament.vendor.auth.login')}}">LIST ANYTHING</a>
                </li>
            </ul>
        </div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


            <div class="category-tags-hero sctc-bind">
                <ul class="first-pane categories-list simple-category-tags">

                    @foreach ($subCategories as $subCat)
                    <li>
                        <div>
                            <a href="{{route('sub.category', $subCat->slug)}}">
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
            <form method="get" class="listing-filter-form bns-filter-bind"
                action="https://www.smartshanghai.com/buyandsell">
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
                        @foreach ($events as $event)
                        <li class="listing" data-track-content data-content-name="bs-list"
                            data-content-piece="bs-105968">
                            <a href="/" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="{{asset('storage/'. $event->menu_image)}}">
                                    </div>

                                    <div class="body">
                                        {{-- <div class="area">{{$sell->listing->category->name}}</div> --}}

                                        <h3>{{$event->event_title}} </h3>

                                        <div class="info">
                                          Status:  {{$event->event_status}}
                                        </div>
                                        <div class="info">
                                           Date: {{$event->on_date}}
                                        </div>
                                        <div class="info">
                                            Type: {{$event->event_type}}
                                        </div>

                                        <div class="description">
                                            {!!Str::limit($event->description, 50)!!}
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                by {{$event->listing->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    {{$housings->links()}}
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
                        <a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg"
                                class="bigBox" width="300" height="260">
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="buyandsell-list">

    <div id="list-menu-2020">
        <div class="site-main-column ">
            <div>
                <ul class="breadcrumbs">
                    <li><a href="/"><img src="{{asset('storage/'.$category->image)}}" width="16" height="16"></a></li>
                    <li><a href="{{route('main.category', $category->slug)}}">{{$category->name}}</a></li>
                </ul>
            </div>

            <ul class="user-action">
                <li class="post">
                    <a href="{{route('filament.vendor.auth.login')}}">LIST ANYTHING</a>
                </li>
            </ul>
        </div>


        <div class="site-main-column category-tag-hero jobs-category-tag-hero-bind">


            <div class="category-tags-hero sctc-bind">
                <ul class="first-pane categories-list simple-category-tags">

                    @foreach ($subCategories as $subCat)
                    <li>
                        <div>
                            <a href="{{route('sub.category', $subCat->slug)}}">
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
            <form method="get" class="listing-filter-form bns-filter-bind"
                action="https://www.smartshanghai.com/buyandsell">
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
                        @foreach ($all_list_by_admins as $list)
                        <li class="listing" data-track-content data-content-name="bs-list"
                            data-content-piece="bs-105968">
                            <a href="/" class="thumbnail-container" target="_blank">

                                <div class="cont">

                                    <div class="img">
                                        <img src="{{asset('storage/'. $list->photos[0])}}">
                                    </div>

                                    <div class="body">
                                        {{-- <div class="area">{{$sell->listing->category->name}}</div> --}}

                                        <h3>{{$list->main_title}} </h3>

                                        @foreach ($list->list_details as $item)
                                        <div class="info">
                                            {{$item['title']}}:  {{$item['description']}}
                                        </div>
                                        @endforeach


                                        <div class="description">
                                            {!!Str::limit($list->description, 50)!!}
                                        </div>

                                        <div class="company-info">
                                            <div class="address">
                                                by {{$list->listing->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    {{$all_list_by_admins->links()}}
                </div>
            </div>

            <div class="right">
                <div class="sidebar-inside">
                    <div class="bigboxes">
                        <br>
                        <p class="label">ADVERTISEMENT</p>
                        <a href="https://adsrvr.smartshanghai.com/ads/adclick/17540?url=">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/06/07/51cda5e6-59a7-4173-89b8-aeef716fd672.png"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17523?url=https://www.summercampschina.com">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/22/f688d59e-b866-4469-a162-a6864aeee428.gif"
                                class="bigBox" width="300" height="260">
                        </a>
                        <a
                            href="https://adsrvr.smartshanghai.com/ads/adclick/17520?url=https://www.parkwaychina.com/en/medical-teams-81">
                            <img src="https://adsrvr.smartshanghai.com/uploads/repository/2024/05/09/b8ffee11-6cfd-4674-af81-09e6987ea677.jpg"
                                class="bigBox" width="300" height="260">
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
