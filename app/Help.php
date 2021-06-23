<?php

namespace app;

class Help{

    static function dd($debug){
        highlight_string("<?=\n" . print_r($debug, true) . ";\n?>");
    }
}