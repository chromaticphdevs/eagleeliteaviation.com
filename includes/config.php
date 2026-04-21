<?php
// Set to 'dev' when working locally, 'prod' for live site
define('ENV', 'dev');

if (ENV === 'dev') {
    define('BASE', '/eagleeliteaviation.com');
} else {
    define('BASE', 'https://eagleeliteaviation.com');
}
