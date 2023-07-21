<?php

require('functions.php');

// this will give /contact instead of /contact/?=adjkhjfk <= if we write it
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// if ($uri === '/') {
//     require('index.php');
// } else if ($uri === '/about.php') {
//     require('./about.php');
// } else if ($uri === '/contact.php') {
//     require('./contanct.php');
// }


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contacts' => 'controllers/contacts.php',
];

// here default code is set to 404
function abort($code = 404)
{
    http_response_code(404);
    require('view/{$code}.php');
    die();
}

// we will use array_key_exits() inbuilt property here, 
// this will see if uri exists in the routes array then it returns it 
// otherwise it will show error code and message and after it 
// call die function which terminates the loop.
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort(501);
}