<?php

namespace App\Helper {
    class DateHelper {}
};

namespace {

    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }


    function dateTimeFormatter($dateTime)
    {
        $dateTime = new DateTimeImmutable($dateTime);
        return "{$dateTime->format('F j')}, {$dateTime->format('Y')}";
    }
}
