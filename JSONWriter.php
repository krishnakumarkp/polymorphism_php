<?php
namespace kkcms;
class JSONWriter implements Writer {
    public function write(Article $obj) {
        $array = array('article' => $obj);
        return json_encode($array);
    }
}