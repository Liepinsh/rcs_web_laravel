<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://resources/demos/style.css">
    <link rel="stylesheet" href="https://maps/documentation/javascript/demos/demos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css">
</head>
<body>
    <header class="header">
        <!-- conteiner-fluid: izmanto visu mājaslapas platumu -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 main-logo">
                    <a href="index.php?page=index" >
                        <img src="https://img-cache.cdn.gaiaonline.com/02744d6cbcc08ef4b0960f3bc8feaf4c/http://static.tumblr.com/986c01f269c6e5577b55bc3c088db60a/zjg7b8w/Jn2n58l52/tumblr_static_25r7daot4zmsw4wgskwkgcw0w.png">
                    </a>
                </div>
                <div class="col-xs-9">
                    <ul class="main-menu">
                        <li class="main-menu-item <?= $page == 'index' ? 'active' : ''; ?>">
                            <a href="/">Home</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'articles' ? 'active' : ''; ?>">
                            <a href="/articles">Articles</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'chat' ? 'active' : ''; ?>">
                            <a href="/chat">Chat</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'register' ? 'active' : ''; ?>">
                            <a href="/register">Register</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'about-us' ? 'active' : ''; ?>">
                            <a href="/about-us">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <p>&copy cat corp. All rights reserved 2018.</p>
                </div>
            </div>
        </div>
    </footer>

<script type="text/javascript" src="js/main.js"></script>


<!-- ----------script for register---------- -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    $('#reg-form').submit(function(){
        var errors = [];
        $('.errors ul').html('');
        $('.has-error').removeClass('has-error');

        if ($('input[name="username"]').val() == '') {
            errors.push('Please enter username');
            $('input[name="username"]').addClass('has-error');
        }
        if ($('input[name="password"]').val() == '') {
            errors.push('Please enter password');
            $('input[name="password"]').addClass('has-error');
        }
        if ($('input[name="password"]').val().length < 8) {
            errors.push('Password must be at least 8 symbols');
            $('input[name="password"]').addClass('has-error');
        }
        if ($('input[name="password2"]').val() == '') {
            errors.push('Please retype the password');
            $('input[name="password2"]').addClass('has-error');
        }
        if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
            errors.push('Passwords must match');
            $('input[name="password"]').addClass('has-error');
            $('input[name="password2"]').addClass('has-error');
        }
        if ($('input[name="first_name"]').val() == '') {
            errors.push('Please enter first name');
            $('input[name="first_name"]').addClass('has-error');
        }
        // if ($('select[name="country"]').val() == 0) {
        //     errors.push('Please select country');
        //     $('select[name="country"]').addClass('has-error');
        // }
        // if ($('input[name="agree"]').is(":checked") == false) {
        //     errors.push('Please agree with terms and conditions');
        //     $('input[name="agree"]').addClass('has-error');
        // }
        if (errors.length > 0) {
            // handle errors
            for (var index = 0; index < errors.length; index++) {
                var element = errors[index];
                $('.errors ul').append('<li>' + element + '</li>');
            }
            $('.errors').show();
            return false;
        }
    });
</script> -->


<!-- ----------script for chat---------- -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    function initializeChat(elID) {
        const chatPlaceholder = document.getElementById(elID);
        window.t = chatPlaceholder;
        const messageInput = document.querySelector('#chat-text-input');
        const messageAuthorInput = document.querySelector('#chat-username-input');
        const messageSendButton = document.querySelector('#chat-send-message-button');
        const chatWindow = document.querySelector('#chat-window');
        const chatMessages = [];
        messageSendButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (!messageAuthorInput.value.length || !messageInput.value.length) {
                alert('Username and Text needed, to participate in chat');
                // console.log("empty username and text")
                return;
            }
            var newAdd = {
                username: messageAuthorInput.value,
                text: messageInput.value,
                date: new Date()
            }
            chatMessages.push(newAdd);
            $.post('/chat/save-message', newAdd, function(res){
                console.log(res)
            });
            populateMessageWindow(chatMessages)
        })
        function populateMessageWindow(messageArray) {
            let message = messageArray[messageArray.length - 1];
            let messageMarkup = `<div class="chat-message">
                                    <h5>${ message.username } <em>${ message.date }</em></h5>
                                    <p>${ message.text }</p>
                                </div>`;
            chatWindow.innerHTML += messageMarkup;                         
        }
    }
    initializeChat('chat');
</script>


<!-- ----------Script for fancybox images in article---------- -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script>
    $('.images-col a').fancybox();
</script>


<!-- ----------Script for google maps---------- -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm46NQhA_hX9UuZzpNQ88OD34NTwjr2Ig&callback=initMap" async defer></script>
<script>
    $( function() {
        $( "#tabs" ).tabs();
    } );
    function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 56.964, lng: 24.103},
        zoom: 16
        });
        var marker = new google.maps.Marker({
        position: {lat: 56.964, lng: 24.104},
        map: map,
        title: 'Riga Coding School'
        });
    }
</script>

    @yield('scripts')

</body>
</html>