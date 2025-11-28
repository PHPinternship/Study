<?php
function normalizeUrl($url)
{
    if (str_starts_with($url, 'https://')) {
        return $url;
    }

    if (str_starts_with($url, 'http://')) {
        $domain = substr($url, 7);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
}
