<?php

declare(strict_types=1);

function check_if_user_logged_in()
{
    return isset($_SESSION['is_user_logged_in']);
}
