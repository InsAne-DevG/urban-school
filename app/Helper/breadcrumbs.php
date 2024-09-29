<?php

use Illuminate\Support\Facades\Route;

function generateBreadcrumbs()
{
    $breadcrumbs = [];
    
    // Get current route's name and explode it to get segments
    $routeName = Route::currentRouteName();
    $segments = explode('-', $routeName);

    // Create breadcrumb for 'Home'
    $breadcrumbs[] = [
        'label' => 'Home',
        'url' => route('school-dashboard') // Adjust to the correct home route
    ];

    // Generate breadcrumbs dynamically based on route name
    $routePath = '';
    foreach ($segments as $key => $segment) {
        // Skip 'school' part
        if ($segment == 'school') {
            continue;
        }

        $routePath .= $segment;

        // Add breadcrumb to array
        $breadcrumbs[] = [
            'label' => ucfirst($segment),
            'url' => ($key == count($segments) - 1) ? null : route('school-' . $routePath)
        ];

        $routePath .= '-';
    }

    return $breadcrumbs;
}
