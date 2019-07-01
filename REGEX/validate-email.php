<?php

function validate_email($email_address)
{
    $pattern = "/^([a-zA-z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9])+([a-zA-Z0-9\._-]+)+$/";
    return preg_match($pattern, $email_address);
}

echo validate_email("daniel@gmail.com");
