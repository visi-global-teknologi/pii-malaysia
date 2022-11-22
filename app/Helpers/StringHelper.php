<?php

namespace App\Helpers;

class StringHelper
{
    /**
     * get single message error, from result validate form request laravel
     *
     * @param  array $arrError list error message
     * @return string if list error message is valid, return single message error
     */
    public function getErrorLaravelFirstKey($arrError)
    {
        if (is_array($arrError)) {
            foreach ($arrError as $key => $value) {
                return $value[0];
            }
        }
        return '';
    }

    /**
     * check string is json
     *
     * @param  string $str
     * @return boolean
     */
    public function isJson($str)
    {
        return is_string($str) && is_array(json_decode($str, true)) ? true : false;
    }

    /**
     * cut text
     *
     * @param  string $str
     * @param  string $limit
     * @return string
     */
    public function cutText($str, $limit, $brChar = ' ', $pad = '...')
    {
        if (empty($str) || strlen($str) <= $limit) {
            return $str;
        }

        $output = substr($str, 0, ($limit+1));
        $brCharPos = strrpos($output, $brChar);
        $output = substr($output, 0, $brCharPos);
        $output = preg_replace('#\W+$#', '', $output);
        $output .= $pad;

        return $output;
    }
}
