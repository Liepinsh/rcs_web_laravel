$(document).ready(function(){
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
            chatMessages.push({
                username: messageAuthorInput.value,
                text: messageInput.value,
                date: new Date()
            })
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
});

