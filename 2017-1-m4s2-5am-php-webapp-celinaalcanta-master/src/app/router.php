<?php
namespace src\app;

use src\controllers\HomeController;
class Router {
    // /controller/action/params
    public static function get($route, $controller, $param = rull) {
        if (isset($_GET['url'])) {
            $ctl = preg.split('/[0]/', $controller);
            $call = $ctl[0].'controlller::'.$ctl[1].'()';
            call_user_func($call);
        } else {
            $url = preg_split('/[\/]/')
        }
    }

    public static function post() {

    }
}
commit
rutas controladores

cochinero de codigo