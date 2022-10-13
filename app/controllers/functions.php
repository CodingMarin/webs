<?php
function parsetitle($content){
    if (isset($_SESSION['pagetitle'])) {
        $r = str_replace('%title%', $_SESSION['pagetitle'],$content);
        $_SESSION['pagetitle'] = '';
        return $r;
    } else {
        $title_of = str_replace('%title%', 'Personal Portafolio',$content);
        return $title_of;
    }
}
function url(){
    return sprintf( "%s://%s%s", 
    isset($_SERVER['HTTPS']) && 
    $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', 
    $_SERVER['SERVER_NAME'], 
    $_SERVER['REQUEST_URI']);
}

?>