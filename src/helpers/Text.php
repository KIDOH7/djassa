<?php

namespace ôthentik\helpers;

class Text {
    public static function excerpt(string $content , int $limit = 60)
    {
        if(mb_strlen($content) <= $limit) {
            return $content;
        }
        // $lastspace = mb_strpos($content, ' ', $limit);
        return mb_substr($content, 0, $limit) . '...' ;
    }
}