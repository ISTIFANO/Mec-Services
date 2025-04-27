<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{user_id}', function ($user, $user_id) {
    return true;
});
