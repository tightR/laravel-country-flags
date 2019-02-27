<?php

use Tightr\LaravelCountryFlags\CountryFlagFacade as CountryFlag;

if (! function_exists('country_flag')) {
    /**
     * Get the emoji country flag for the given country code.
     *
     * @param  string  $countryCode
     * @return string
     */
    function country_flag($countryCode)
    {
        return CountryFlag::get($countryCode);
    }
}

if (! function_exists('locale_flag')) {
    /**
     * Get the emoji country flag for the given locale code.
     *
     * @param  string  $localeCode
     * @return string
     */
    function locale_flag($localeCode)
    {
        if($localeCode == 'en')
            $localeCode = 'gb';

        $localeCode = ucwords($localeCode);

        return CountryFlag::get($localeCode);
    }
}
