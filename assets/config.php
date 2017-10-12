<?php
// styled by @jonfinley
//          EXAMPLE
//  'dontedit' => 'EDITHERE'

$config = array(
    'title' => 'Monitorr', // Site Title
    'siteurl' => 'http://localhost', // SITE URL
// if on Linux, the timezone script will automatically select your timezone
// For Windows, set the timezone. Default is UTC Time.
// I.E. ($timezone = 'America/Los_Angeles',)
    'timezone' => 'UTC',
    'timestandard' => 'False', // True for Standard Time, DEFAULT = False
    'rftime' => '', // time refresh
    'rfsysinfo' => '5000', // system info refresh in milliseconds
//    'coloron' => '', // color for online, WIP
//    'coloroff' => '', // color for offline, WIP
);
// thanks @causefx for the assist <3
// supports http, https, domain, ip, 
//  "NAMEOFAPP" => array( 
//      "link" => "http://linktoyourapp.com", 
//      "image" => "ACTUALAPPNAME.png"
//    ), 
$myServices = array( 
    "monitorr" => array( 
        "link" => "http://localhost/monitorr", 
        "image" => "monitorr.png"
        ), 
    "plex" => array( 
        "link" => "http://localhost:32400", 
        "image" => "plex.png"
        ), 
    "sonarr" => array(  
        "link" => "http://localhost:8989", 
        "image" => "sonarr.png"
        ), 
    "radarr" => array( 
        "link" => "http://localhost:7878", 
        "image" => "radarr.png"
        ), 
    "Plexpy" => array( 
        "link" => "http://localhost:8181", 
        "image" => "plexpy.png"
        ), 
   ); 


?>
