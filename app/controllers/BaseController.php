<?php
class BaseController {
    protected function render($view, $data = []) {
        extract($data);
        include __DIR__ . "/../views/{$view}.php";
    }
}
?>