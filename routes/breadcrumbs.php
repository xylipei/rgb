<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('首页', route('home'));
});

// Home
Breadcrumbs::for('userList', function ($trail) {
    $trail->parent('home', route('home'));
    $trail->push('用户列表', route('userList'));
});
