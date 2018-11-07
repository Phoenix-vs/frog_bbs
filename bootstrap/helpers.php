<?php

function route_class()
{
    return str_replace_array('.', '-', Route::currentRouteName());
}