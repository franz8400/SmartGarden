 <?php

if( stristr( $_SERVER['HTTP_USER_AGENT'],'iphone' ) || 
        stristr( $_SERVER['HTTP_USER_AGENT'],'ipod' ) || 
        stristr( $_SERVER['HTTP_USER_AGENT'],'ipad' ))
        {
        header('Location: /public_html_mobile/index.html');
    }
    else
    {
        header('Location: /public_html/index.html');
    }
    
?> 
