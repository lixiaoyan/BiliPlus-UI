<?php

if (empty($_SERVER["QUERY_STRING"])) {
  header("Location: /?home");
} else {
  header("Location: /tmpl/".$_SERVER["QUERY_STRING"].".php");
}
