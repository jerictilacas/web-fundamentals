<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="chat.js"></script>
<body onload="setInterval('chat.update()', 1000)">
<div id="page-wrap">

    <h2>jQuery/PHP Chat</h2>

    <p id="name-area"></p>

    <div id="chat-wrap"><div id="chat-area"></div></div>

    <form id="send-message-area">
        <p>Your message: </p>
        <textarea id="sendie" maxlength = '100'></textarea>
    </form>

</div>
<style>
    #chat-area > span:after {
        content: ':';
        margin-right: 10px;
    }
</style>
<script>

    // ask user for name with popup prompt
    var name = prompt("Enter your chat name:", "Guest");

    // strip tags
    name = name.replace(/(<([^>]+)>)/ig,"");

    // default name is 'Guest'
    if (!name || name === ' ') {
        name = "Guest";
    }
    // display name on page
    $("#name-area").html("You are: <span>" + name + "</span>");

    // kick off chat
    var chat =  new Chat();

    $(function() {
        chat.getState();

        // watch textarea for key presses
        $("#sendie").keydown(function(e) {
            var key = e.which;
            //all keys including return.
            if (key >= 33) {

                var maxLength = $(this).attr("maxlength");
                var length = this.value.length;
                // don't allow new content if length is maxed out
                if (length >= maxLength) {
                    e.preventDefault();
                }
            }
        });
        // watch textarea for release of key press
        $('#sendie').keyup(function(e) {
            if (e.which == 13) {

                var text = $(this).val();
                var maxLength = $(this).attr("maxlength");
                var length = text.length;

                // send
                if (length <= maxLength + 1) {
                    chat.send(text, name);
                    $(this).val("");
                } else {
                    $(this).val(text.substring(0, maxLength));
                }
            }
        });
    });
</script>