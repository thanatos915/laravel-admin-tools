<?php

/**
 * @return \Illuminate\Auth\GenericUser|\Illuminate\Database\Eloquent\Model|\App\Models\User
 * @author thanatos thanatos915@163.com
 */
function get_user()
{
    return app(\Dingo\Api\Auth\Auth::class)->user();
}

function get_user_id()
{
    return get_user() ? get_user()->id : 0;
}
