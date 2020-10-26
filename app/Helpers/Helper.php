<?php
function set_active($uri){
  if (is_array($uri)) {
    return in_array(Request::path(), $uri) ? 'active' : '';
  }
  return Request::path() == $uri ? 'active' : '';
}
