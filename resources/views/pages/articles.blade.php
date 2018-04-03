@extends('layout')

@section('content')

<main class="main">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/articles">Articles</a></li>
            </ul>
            <div class="col-xs-12 small-article">
                <a href="/article1" class="article1">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <img src="https://cdn.thinglink.me/api/image/777509114820427778/1240/10/scaletowidth">
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <h4>Are cats smarter than humans?</h4>
                            <p>
                                Cats usualy act like they are more superior then humans.<br>
                                Is that realy true? I dont know if we will ever know that. Cats rule the world!
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 small-article">
                <a href="/article2" class="article2">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <h4>Are cats cuter than dogs?</h4>
                            <p>
                                For centuries people have been fighting to prove each other, who is the cutest.<br>
                                Are there ways to measure cuteness? Is the fight going to continue on forever? Only cats can answer!
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 small-article">
                <a href="/article3" class="article3">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12">
                            <img src="https://i.pinimg.com/originals/2e/18/ab/2e18ab3f71b73c6719b04c81625bb922.jpg">
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <h4>Can cats cook us dinner?</h4>
                            <p>
                                We know, that humans can cook, but can cats cook?<br>
                                There have been evidence, where cats add some ingredients to the food, which then improves the taste of the food. But are cats actually cooking? Only Cook Cat 2000 has the answer!
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>     
        <div class="row page-numbers">
            <div class="col-md-12">
                <ul class="paging">
                    <li>
                        <a href="/articles"><<</a>
                    </li>
                    <li>
                        <a href="/articles">1</a>
                    </li>
                    <li>
                        <a href="/articles">2</a>
                    </li>
                    <li class="active">
                        <a href="/articles">3</a>
                    </li>
                    <li>
                        <a href="/articles">4</a>
                    </li>
                    <li>
                        <a href="/articles">5</a>
                    </li>
                    <li>
                        <a href="/articles">>></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection