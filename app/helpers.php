<?php
if (!function_exists('number_to_text')) {
    function number_to_text($number, $locale)
    {
        $f = new NumberFormatter($locale, NumberFormatter::SPELLOUT);
        return $f->format($number);
    }
}
