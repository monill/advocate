<?php

use App\Models\Setting;
use Carbon\Carbon;

if (!function_exists('md5_gen')) {
    /**
     * Generates random characters using MD5 values
     * 32 Characters
     */
    function md5_gen(): string
    {
        return md5(uniqid() . time() . microtime());
    }
}

if (!function_exists('make_size')) {
    /**
     * Returns a human readable file size
     *
     * @param integer $bytes
     * Bytes contains the size of the bytes to convert
     *
     * @param integer $decimals
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     **/
    function make_size($bytes, $decimals = 2)
    {
        $size = [' B', ' kB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB'];
        $floor = (int)floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $floor)) . $size[$floor];
    }
}

if (!function_exists('sha1_gen')) {
    /**
     * Generates random characters using SHA1 values
     * 40 Characters
     */
    function sha1_gen($token = null): string
    {
        return sha1(uniqid() . time() . microtime() . md5_gen() . $token);
    }
}

function dias() {

    switch (date('d')) {
        case 0:
            $dia = 'Domingo';
            break;
        case 1:
            $dia = 'Segunda-Feira';
            break;
        case 2:
            $dia = 'Terça-Feira';
            break;
        case 3:
            $dia = 'Quarta-Feira';
            break;
        case 4:
            $dia = 'Quinta-Feira';
            break;
        case 5:
            $dia = 'Sexta-Feira';
            break;
        case 6:
            $dia = 'Sábado';
            break;
        default:
            $dia = 'Bugou';
            break;
    }

    return $dia;
}

function meses(int $mes) {

    switch ($mes) {
        case 1:
            $mes = 'Janeiro';
            break;
        case 2:
            $mes = 'Fevereiro';
            break;
        case 3:
            $mes = 'Março';
            break;
        case 4:
            $mes = 'Abril';
            break;
        case 5:
            $mes = 'Maio';
            break;
        case 6:
            $mes = 'Junho';
            break;
        case 7:
            $mes = 'Julho';
            break;
        case 8:
            $mes = 'Agosto';
            break;
        case 9:
            $mes = 'Setembro';
            break;
        case 10:
            $mes = 'Outubro';
            break;
        case 11:
            $mes = 'Novembro';
            break;
        case 12:
            $mes = 'Dezembro';
            break;
        default:
            $mes = 'Bugou';
            break;
    }
    return $mes;
}

if (!function_exists('day_name')) {

    function day_name($day)
    {
        switch ($day) {
            case 0:
                $today = 'Domingo';
                break;
            case 1:
                $today = 'Segunda-Feira';
                break;
            case 2:
                $today = 'Terça-Feira';
                break;
            case 3:
                $today = 'Quarta-Feira';
                break;
            case 4:
                $today = 'Quinta-Feira';
                break;
            case 5:
                $today = 'Sexta-Feira';
                break;
            case 6:
                $today = 'Sábado';
                break;
            default:
                $today = 'Bugou';
                break;
        }

        echo $today;
    }
}

if (!function_exists('hideref')) {
    /**
     * @param $strUrl
     * @return string
     */
    function hideref($strUrl): string
    {
        return "https://dereferer.me/?" . urlencode($strUrl);
    }
}

if (!function_exists('format_date_time')) {
    /**
     * Formata data do timestamp
     */
    function format_date_time($date_time)
    {
        return Carbon::parse($date_time)->format('d/m/Y H:i');
    }
}

if (!function_exists('format_date')) {
    /**
     * Formata data do timestamp
     */
    function format_date($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }
}

if (!function_exists('setting')) {
    /**
     * Get / set the specified setting value.
     *
     * If an array is passed, we'll assume you want to set settings.
     *
     * @param string|array $key
     * @param mixed $default
     * @return mixed|Setting
     */
    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new Setting();
        }
        if (is_array($key)) {
            return Setting::set($key, $default);
        }
        $value = Setting::get($key);
        return is_null($value) ? value($default) : $value;
    }
}

if (!function_exists('human_time')) {
    function human_time($seconds)
    {
        $days = intval(intval($seconds) / (3600 * 24));
        $hours = (intval($seconds) / 3600) % 24;
        $minutes = (intval($seconds) / 60) % 60;
        $seconds = intval($seconds) % 60;

        $days = $days ? $days . ' Dias - ' : '';
        $hours = $hours ? $hours . ':' : '';
        $minutes = $minutes ? $minutes . ':' : '';
        $seconds = $seconds ? $seconds . '' : '';

        return $days . $hours . $minutes . $seconds;
    }
}

if (!function_exists('months')) {
    function months()
    {
        return [
            ['mes' => 1, 'nome' => 'Janeiro'],
            ['mes' => 2, 'nome' => 'Fevereiro'],
            ['mes' => 3, 'nome' => 'Março'],
            ['mes' => 4, 'nome' => 'Abril'],
            ['mes' => 5, 'nome' => 'Maio'],
            ['mes' => 6, 'nome' => 'Junho'],
            ['mes' => 7, 'nome' => 'Julho'],
            ['mes' => 8, 'nome' => 'Agosto'],
            ['mes' => 9, 'nome' => 'Setembro'],
            ['mes' => 10, 'nome' => 'Outubro'],
            ['mes' => 11, 'nome' => 'Novembro'],
            ['mes' => 12, 'nome' => 'Dezembro']
        ];
    }
}
