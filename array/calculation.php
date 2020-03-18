<?php
$get_result = calc(30, 20);
echo "addition: " . $get_result[2];
function calc($one, $two)
{
    $add = $one + $two;
    $sub = $one - $two;
    $mul = $one * $two;
    $div = $one / $two;
    $result = array($add, $sub, $mul, $div);
    return $result;
}
?>
<br/>
<?php
function get_ticket($user, $age)
{
    $ticket_id = rand(999, 99999);
    if ($age >= 30){
        $msg = "Hello " . $user . " your age is " . $age . ". <br/>";
        $msg .= "You are qualified to have a ticket...CONGRATULATION" . ". <br/>";
        $msg .= "Your ticket ID is <span> [ " . $ticket_id . " ]</span> ";
    }else{
        $msg = "Hello " . $user . " your age is " . $age . ". <br/>";
        $msg .= ucwords("You are not qualified to have a ticket... SORRY ") . ". <br/>";
    }
    return $msg;
}

$disc =  get_ticket(ucfirst('ramel'), 30);


function makeframe($element)
{
    $frame="<div class='style_frame'>";
    $frame.= $element;
    $frame .="</div>";
    return $frame;
}

echo makeframe($disc);

?>
<style>
    .style_frame {
        width : 400px;
        text-align: center;
        padding: 12px;
        background-color: silver;
        border:1px solid silver;
        border-radius: 5px;
        margin-left: auto;
        margin-right: auto;
    }
    span{
        color: darkred;
        font-size: 20px;
    }
</style>



