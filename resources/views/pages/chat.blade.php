@extends('layout')

@section('content')
<main class="main">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/chat">Chat</a></li>
            </ul>
            <h4>Chat</h4>
        </div>                    
        <div class="row" id="chat">
            <div class="col-sm-12 ">
                <div id="chat-window" class="chat-main-window">
                </div><!-- chat-main-window -->
            </div>
            <div class="col-sm-12 ">
                <div class="chat-message-form">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="chat-username-input">Username</label>
                            <input type="text" class="form-control" id="chat-username-input">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-10">
                            <label for="chat-text-input">Message</label>
                            <textarea class="form-control" id="chat-text-input"></textarea>
                        </div>
                        <div class="form-group col-sm-2">
                            <button class="btn btn-primery" id="chat-send-message-button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('scripts')
<script>
//pārnest visu
    const messageInput = document.querySelector('#chat-text-input');
    const messageAuthorInput = document.querySelector('#chat-username-input');
    const messageSendButton = document.querySelector('#chat-send-message-button');
    const chatWindow = document.querySelector('#chat-window');
    const chatMessages = [];

    $.getJSON('/chat/get-messages', function(resp){
        for (var index = 0; index < resp.length; index++){
            var element = resp[index];
            console.log(element);
            var newAdd = {
                username: element.username,
                text: element.text,
                date: element.created_at
            }
            chatMessages.push(newAdd);
            populateMessageWindow(chatMessages)
            
        }
        function populateMessageWindow(messageArray) {
            let message = messageArray[messageArray.length - 1];
            let messageMarkup = `<div class="chat-message">
                                    <h5>${ message.username } <em>${ message.date }</em></h5>
                                    <p>${ message.text }</p>
                                </div>`;
            chatWindow.innerHTML += messageMarkup;                         
        }
    })
</script>
@endsection