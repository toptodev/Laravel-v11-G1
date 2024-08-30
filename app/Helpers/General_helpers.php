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
