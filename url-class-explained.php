<?php

$page_name = 'home';

$config = array(
    'base_url' => 'http://www.cbp-classproject.local',
    'db_host' => 'localhost',
    'db_name' => 'bootcamp_eshop',
    'db_user' => 'root',
    'db_pass' => '',
    'db_encoding' => 'utf8',
    'administrator' => null,
    'site_title' => 'My amazing eshop'
);


function createUrl($page_name = '', $params = array())  //this is a function that takes a page name as an argument and builds a query string (to put behind a hyperlink).
    {
        if($page_name) //if the page_name is given
        {
            $params['page'] = $page_name; //the pagename is stored in the params array under de key page.
        }

        $query_string = http_build_query($params); //the query string is build using the http_build query function.

       //the query is returned based on the base_url (config.php) that is set up in the config file and the query string.

        echo 'the page name variable is: ' . var_dump($page_name);
        echo 'the params variable is: ' . var_dump($params);
        echo 'the query_string viable is' . var_dump($query_string);
        echo $config['base_url'] . ($query_string ? '?' . $query_string : ''); 

    }

createUrl($page_name);




