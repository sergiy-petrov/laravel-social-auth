<?php

$this->app['router']->group(
    [
        'namespace' => 'ZFort\SocialAuth\Controllers',
        'middleware' => ['web'],
        'as' => 'social.'
    ],
    function ($router) {
        $router->get('social/{social}', 'SocialAuthController@getAccount')->name('auth');
        $router->get('social/{social}/{social}callback', 'SocialAuthController@callback')->name('callback');
        $router->get('social/{social}/detach', 'SocialAuthController@detachAccount')->name('detach');
    }
);
