<?php
if (! function_exists('getLocale')) {
    function getLocale(): string
    {
        return App::getLocale();
    }
}
// list all languages
if (! function_exists('listLanguages')) {
    function listLanguages(): array
    {
        return [
            'ar' => __('Arabic'),
            'en' => __('English')

        ];
    }
}
//is route function
if (! function_exists('isRoute')) {
    function isRoute(string $routeName): bool
    {
        return Route::currentRouteName() === $routeName;
    }
}
//set active if route is active
if (! function_exists('setActive')) {
    function setActive(string $routeName, string $active = 'active'): string
    {
        return isRoute($routeName) ? $active : '';
    }
}

