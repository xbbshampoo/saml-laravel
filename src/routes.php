<?php

Route::get(Config::get('laravel-saml::saml.routes.login', 'login'), 'SamlController@login');
Route::get(Config::get('laravel-saml::saml.routes.logout', 'logout'), 'SamlController@logout');
