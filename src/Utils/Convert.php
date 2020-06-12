<?php

namespace RobRichards\XMLSecLibs\Utils;

class Convert
{
    /**
     * Based on https://www.php.net/manual/en/function.hexdec.php#90309
     * @param $hex
     * @return string
     */
    public static function hex2dec($hex)
    {
        $dec = '0';

        $len = strlen($hex);
        for ($i = 1; $i <= $len; $i++) {
            $dec = bcadd($dec, bcmul(strval(hexdec($hex[$i - 1])), bcpow('16', strval($len - $i))));
        }

        return $dec;
    }
}
