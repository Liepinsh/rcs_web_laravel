@extends('layout')

@section('content')
<main class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/article1">Article1</a></li>
        </ul>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs images-col">
                        <a href="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg" class="cat">
                            <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <h4>Are cats smarter than humans?</h4>
                        <p>
                            Cats usualy act like they are more superior then humans.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <div class="row spacing-bottom">
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg" class="cat">
                                    <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg" class="cat">
                                    <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg" class="cat">
                                    <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg" class="cat">
                                    <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg" class="cat">
                                    <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs images-col">
                                <a href="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg" class="cat">
                                    <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>
                                    Is that realy true? I dont know if we will ever know that. Cats rule the world!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection