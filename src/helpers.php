<?php
function view($template, $data = [])
{
  if (is_array($data)) {
    extract($data, EXTR_OVERWRITE);
  } else {
    die("No data");
  }
  return require "src/Views/{$template}.view.php";
}
