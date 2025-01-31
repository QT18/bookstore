<?php
/**
 * debug
 */
function _debug($data) {
     echo 'pre style="background: #000; color: #fff; width: 100%; overflow: auto"';
     echo '<div>Your IP: ' . $_SERVER['REMOTE_ADDR'] . '</div>';

     $debug_backtrace = debug_backtrace();
     $debug = array_shift($debug_backtrace);

     echo '<div>File: ' . $debug['file'] . '</div>';
     echo '<div>Line: ' . $debug['line'] . '</div>';

     if(is_array($data) || is_object($data)) {
        print_r($data);
     }
     else {
        var_dump($data);
     }
     echo '</pre>';
}               
function xss_clean($data)
{
        // Fix &entity\n;
        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do
        {
                // Remove really unwanted tags
                $old_data = $data;
                $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        }
        while ($old_data !== $data);

        // we are done...
        return $data;
}
/**
 * get input
 */
function getInput($string)
{
    return isset($_GET[$string]) ? $_GET[$string] : '';
}
/**
 * post input
 */
function postInput($string)
{
    return isset($_POST[$string]) ? $_POST[$string] : '';
}

function base_url()
{
    return $url = "http://localhost/bookstore/";
}

function public_admin()
{
    return base_url() . "public/admin/";
}

function public_frontend()
{
    return base_url() . "public/frontend/";
}

function modules($url)
{
    return base_url() . "admin/modules/" .$url ;  
}
function thoat($url)
{
    return base_url() . "admin/" .$url ;  
}
function uploads()
{
    return base_url() . "public/uploads/";
}

if( ! function_exists('redirectStyle'))
{
    function redirectStyle($url = "")
    {
        header("location: ".base_url()."{$url}"); exit();
    }
}

/**
 * redirect về các trang
 */
if( ! function_exists('redirectAdmin'))
{
    function redirectAdmin($url = "")
    {
        header("location: ".base_url()."admin/modules/{$url}"); exit();
    }
}

/**
 * redirect về các trang
 */
if( ! function_exists('redirect'))
{
    function redirect($url = "")
    {
        header("location: ".base_url().$url); exit();
    }
}
function checksumcart($number)
{
    $number = intval($number);

    if($number > 10000000)
    {
        return 10;
    }
    else if ($number > 8000000)
    {
        return 5;
    }

    else if ($number > 5000000)
    {
        return 2;
    }
    else
    {
        return 0;
    }
}
function formatprice($number)
{
    $number = intval($number);
    return number_format($number, 0,',','.') ;
}



?>
