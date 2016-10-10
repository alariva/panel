<?php

// Home
Breadcrumbs::register('/', function ($breadcrumbs) {
    $breadcrumbs->push(trans('nav.home'), route('home'));
});

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push(trans('nav.home'), route('home'));
});

// Dashboard
Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->parent('/');
    $breadcrumbs->push(trans('nav.dashboard'), route('frontoffice.dashboard.show'));
});

//////////////////////////
// Terms and Conditions //
//////////////////////////

Breadcrumbs::register('terms-and-conditions', function ($breadcrumbs) {
    $breadcrumbs->parent('/');
    $breadcrumbs->push(trans('nav.terms-and-conditions'), route('frontoffice.terms-and-conditions.show'));
});

Breadcrumbs::register('backoffice/terms-and-conditions', function ($breadcrumbs) {
    $breadcrumbs->parent('terms-and-conditions');
    $breadcrumbs->push(trans('nav.terms-and-conditions'), route('backoffice.terms-and-conditions.edit'));
});

Breadcrumbs::register('backoffice/terms-and-conditions/edit', function ($breadcrumbs) {
    $breadcrumbs->parent('terms-and-conditions');
    $breadcrumbs->push(trans('nav.terms-and-conditions'), route('backoffice.terms-and-conditions.edit'));
});
