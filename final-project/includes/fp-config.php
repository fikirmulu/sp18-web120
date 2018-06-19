<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey ="6LcKYFUUAAAAAFIzsmeyZUWpQB3UQ346A9c8EucE";
$secretKey="6LcKYFUUAAAAAIeD2m8yin0RwiTpNu59RV6xsrHh";

 //this helps eliminate PHP date errors
//date_default_timezone_set('America/Los Angeles');//

 //this constant allows a page to know its own url?name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
        
    case "index.php":
        $title = "Noble spirits Liqour store";
        $logo = "fa-home";
        $pageID = "welcome";
    break;
      
      case "about.php":
        $title = "Noble spirits Liqour store";
        $logo = "";
        $pageID = "About us";
     break;      
     
      case "gallery.php":
        $title = "Noble spirits Liqour store";
        $logo = "";
        $pageID = "";
     break;    
        
     case "map.php":
        $title = "Noble spirits Liqour store";
        $logo = "";
        $pageID = "google map of Noblespirits Seattle";
     break;         
       
      case "contact.php":
        $title = "Noble spirits Liqour store";
        $logo = "";
        $pageID = "Contact NobleSprits";
     break;
        
    default:
        $title = "THIS_PAGE";
        $logo = "";
        $pageID = "";
    break;  
}

$nav1['index.php'] = "Welcome";
$nav1['about.php'] = "About";
$nav1['gallery.php'] = "Gallery";
$nav1['map.php'] = "map";
$nav1['contact.php'] = "Contact";

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        if($url == THIS_PAGE){
          $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";  
        }else{
        
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
            
            }
    }
        return $myReturn;
}
            
            
?>