@extends('layout')

@section('content')
<main class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/article2">Article2</a></li>
        </ul>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs images-col">
                        <a href="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                            <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <h4>Are cats cuter than dogs?</h4>
                        <p>
                            For centuries people have been fighting to prove each other, who is the cutest.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row spacing-row">
            <div class="col-xs-12 small-article">
                <div class="row">
                    <div class="col-sm-3 hidden-xs images-col">
                        <div class="row spacing-bottom">
                            <div class="col-sm-4 hidden-xs">
                                <a href="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                    <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs">
                                <a href="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                    <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                </a>
                            </div>
                            <div class="col-sm-4 hidden-xs">
                                <a href="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                    <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-4 hidden-xs">
                                    <a href="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                        <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                    </a>
                                </div>
                                <div class="col-sm-4 hidden-xs">
                                    <a href="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                        <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                    </a>
                                </div>
                                <div class="col-sm-4 hidden-xs">
                                    <a href="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                        <img src="https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.jpg">
                                    </a>
                                </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        Are there ways to measure cuteness? Is the fight going to continue on forever? Only cats can answer!
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