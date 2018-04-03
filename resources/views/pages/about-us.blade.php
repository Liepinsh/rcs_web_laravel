@extends('layout')

@section('content')
<main class="main">
    <div class="container">
        <div class="row shortcut">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About us</a></li>
            </ul>
        </div>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Our team</a></li>
                <li><a href="#tabs-2">Free time</a></li>
                <li><a href="#tabs-3">Cat manager</a></li>
                <li><a href="#tabs-4">Programmer cat</a></li>
            </ul>
            <div id="tabs-1">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <img class="tab-img" src="http://www.morewallpapers.com/wp-content/uploads/2016/02/American-short-hair-cat-family.jpg">
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <p>
                                    We are the cat family. We can provide you with the information of the secret world of cats.<br>
                                    Everyone knows us by our street name: "The CAT CUMPILATOR crew". Our job is to manipulate with human brain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-2">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <img class="tab-img" src="http://giantgag.net/wp-content/uploads/2014/02/funny-cat-party-bring-your-own-box-01.jpg">
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <p>
                                    Everyone knows we are the best in our feald.<br>
                                    But only few know, that its because we do PARTY FRIDAYS. Bring you'r box to work day!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-3">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <img class="tab-img" src="https://pbs.twimg.com/media/B5pjF_8IEAE_erU.jpg:large">
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <p>
                                    Cat manager manages the web development process. Purffect manager.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tabs-4">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <img class="tab-img" src="https://rforcats.net/assets/img/programmer.png">
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <p>
                                    Cats usualy act like they are more superior then humans.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Contacts</h4>
        </div>
        <div class="row map-contacts">
            <div class="col-xs-12 contacts">
                <div class="row">
                    <div class="col-sm-5">
                        <div id="map">
                            Google maps
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <h5>Adress:</h5>
                        <p>Pils laukums 3, Rīga, LV-1050, Latvia</p>
                        <h5>Email:</h5>
                        <a href="mailto:cat@catnip.com">cat@catnip.com</a>
                        <h5>Phone:</h5>
                        <p>+371 66666666</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection