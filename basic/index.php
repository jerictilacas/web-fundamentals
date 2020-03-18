<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-2.2.4.min.js"></script>
</head>
<style>
    #form {
        display: none;
    }

    .js-close-form{
        display: none;
    }

    /*.show-content{*/
        /*display: none;*/
    /*}*/

    .hide{
        display: none;
    }

    .show{
        display: block ;
    }
</style>
<body>

<strong># Show form</strong><br>
<button class="js-show-form">
    Click to show form
</button><br>
<button class="js-close-form">
    Close form
</button>

<form action="/action_page.php" method="get" id="form">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Submit">
</form>
<br><br><br><br>
<strong>#Checkbox on change</strong><br>
<input type="checkbox" name="checkbox" value="" class="js-checkbox">On change checkbox
<br>
<div class="show-content hide">sample content
</div>

</body>
</html>
<script>
   (function(){

       $(".js-show-form").click(function(){
           $("#form").show();
           $(".js-close-form").show();
           $(this).hide();
       });

       $('.js-close-form').on('click', (function(){
           $("#form").hide();
           $(this).hide();
           $(".js-show-form").show();
       }));


       // $(".js-show-form").hover(function(){
       //     $("#form").show();
       //     $(".js-close-form").show();
       //     $(this).hide();
       // });
       //
       //
       // $('.js-close-form').hover(function(){
       //     $("#form").hide();
       //     $(this).hide();
       //     $(".js-show-form").show();
       // });

       // $('.show-content').hide();

       // $('.js-checkbox').change(function(){
       //     $('.show-content').toggle();
       // });

       $('.js-checkbox').change(function(){
           $('.show-content').addClass('show');
           $('.show-content').removeClass('hide');
       });
   })();
</script>