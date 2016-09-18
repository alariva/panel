<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push(trans('nav.home'), route('home'));
});

// Terms and Conditions
Breadcrumbs::register('terms-and-conditions', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('nav.terms-and-conditions'), route('frontoffice.terms-and-conditions.show'));
});
