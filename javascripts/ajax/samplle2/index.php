<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
Please enter a domain name
<input id="searchip">
<div id="resultip"></div>
<script>
    $(document).ready(function(){
        $('#searchip').change(function(){
            $.ajax({
                type: 'GET',
                url: 'getip.php',
                data: 'ip=' + $('#searchip').val(),
                success: function(msg){
                    $('#resultip').html(msg);
                }
            });
        });

    });
</script>
</body>