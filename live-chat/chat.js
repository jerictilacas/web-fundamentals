/**
 * Created by ram on 3/28/17.
 */
var instanse = false;
var state = 0;
function Chat () {
    this.update = updateChat;
    this.send = sendChat;
    this.getState = getStateOfChat;
}

function getStateOfChat() {
   if(!instanse){
        instanse = true;
        $.ajax({
            type: "POST",
            url: "process.php",
            data: {'function': 'getState'},
            dataType: "json",
            success: function(data) {
                state = 0;
                instanse = false;
            }
        });
    }
}

//Updates the chat
function updateChat() {
    if(!instanse){
        instanse = true;
        $.ajax({
            type: "POST",
            url: "process.php",
            data: {'function': 'update','state': state},
            dataType: "json",
            success: function(data) {
                if(data.text){
                    for (var i = 0; i < data.text.length; i++) {
                        $('#chat-area').append($(""+ data.text[i] +" <br />"));
                    }
                }
                document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
                instanse = false;
                state = data.state;
            }
        });
    }
}

//send the message
function sendChat(message, nickname) {
    updateChat();
    $.ajax({
        type: "POST",
        url: "process.php",
        data: {'function': 'send','message': message,'nickname': nickname},
        dataType: "json",
        success: function(data){
            updateChat();
        }
    });
}