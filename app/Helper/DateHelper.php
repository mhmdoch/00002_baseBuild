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

    function bbcode($text)
    {
        $find = array(
            '~\[b\](.*?)\[/b\]~s',
            '~\[i\](.*?)\[/i\]~s',
            '~\[u\](.*?)\[/u\]~s',
            '~\[quote\](.*?)\[/quote\]~s',
            '~\[size=(.*?)\](.*?)\[/size\]~s',
            '~\[color=(.*?)\](.*?)\[/color\]~s',
            '~\[url\]((?:ftp|https?)://.*?)\[/url\]~s',
            '~\[url=([^"><]*?)\](.*?)\[/url\]~s', // Added url with label
            '~\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]~s',
            '~\[h([1-6])\](.*?)\[/h\1\]~s', // Added H# parsing
        );

        $replace = array(
            '<b>$1</b>',
            '<i>$1</i>',
            '<span style="text-decoration:underline;">$1</span>',
            '<pre>$1</' . 'pre>',
            '<span style="font-size:$1px;">$2</span>',
            '<span style="color:$1;">$2</span>',
            '<a href="$1">$1</a>',
            '<a href="$1">$2</a>', // Added url with label
            '<img src="$1" alt="" />',
            '<h$1>$2</h$1>' // Added H# parsing
        );


        return preg_replace($find, $replace, $text);
    }
}
