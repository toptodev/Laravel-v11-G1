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
