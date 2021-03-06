<?php

return array('auth_tokens' => function ($t) {
    $t->increments('_id');
    $t->integer('auth_id')->references('_id')->on('auth');
    $t->string('token', 40);
    $t->string('role')->nullable();

    // timestamps
    $t->timestamp('created_at');
    $t->timestamp('expire_at');
});
