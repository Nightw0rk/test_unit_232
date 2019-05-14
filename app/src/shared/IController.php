<?php

namespace TU\Shared;


interface IController {
  function action($name, $method, $params);
}