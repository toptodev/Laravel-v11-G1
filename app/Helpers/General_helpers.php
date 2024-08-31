<?php

if (!function_exists('gen_folder')) {
  function gen_folder($id, $string = '')
  {
    $response = $id . '-' . md5($id);
    if ($string != "") {
      $response = $string;
    }

    return $response;
  }
}

if (!function_exists("_jsonUnescapedUnicode")) {
  function _jsonUnescapedUnicode(array $arr)
  {
    return json_encode($arr, JSON_UNESCAPED_UNICODE);
  }
}

if (!function_exists("_genNoIndex")) {
  function _genNoIndex($prefixed = "", $number = "", $decimal = 4): string
  {
    return $prefixed . sprintf("%0{$decimal}d", $number);
  }
}

if (!function_exists('_fileExists')) {
  function _fileExists($folder = '', $string = ''): bool
  {
    return (($string != "") && \Storage::disk('public')->exists("/$folder/$string"));
  }
}

if (!function_exists('__via_placeholder')) {
  function __via_placeholder($width, $height)
  {
    return "https://via.placeholder.com/{$width}x{$height}.png?text={$width}x{$height}";
  }
}
