<?php

function app_logout()
{
    unset($_SESSION[SESSION_LOG_IN_KEY]);

    redirect_to('dashboard.php');
}

function is_logged_in()
{
    return isset($_SESSION[SESSION_LOG_IN_KEY]);
}

function set_log_in_user($user_id)
{
    $_SESSION[SESSION_LOG_IN_KEY] = $user_id;
}

function should_logged_in()
{
    if (!is_logged_in()) {
        redirect_to("login_form.php");
    }
}