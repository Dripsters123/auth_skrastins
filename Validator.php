<?php

class Validator
{

    static public function string($data, $min = 0, $maxlen = INF)
    {
        $data = trim($data);

        return is_string($data)
            && strlen($data) >= $min
            && strlen($data) < $maxlen;
    }
}
