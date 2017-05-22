<?php
//Do not remove the below code. This will lead to voilation of Terms Of Use
/****************************************************************************
Copyright (C) <2009> <Dr. Anurag Singh>
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
This script is written by Dr. Anurag Singh
Title: Wap Redirect
Version: 4.0
Email: tom.anu007@gmail.com,
Homepage: http://tom.anu007.googlepages.com/wapredirect
Special thanks to Harald Hope, Website: http://techpatterns.com/
And also to Joseph George Jacobs , Email joe@spitzbucket.com
Special thanks to Anna Rogers , Email missannalr@aol.com for PSP Browser support
--------------------------------------------------------------------------------
Latest Version (4.0) Wap Redirect Now Supports iPhone , PSP , WAP & usual PC browser Detection.
Now you can Support four Different websites (for PC, Mobile, iPhone & PSP) through a single Link version (4.0)
--------------------------------------------------------------------------------
Version 3.0 had some Dramatic but Desirable Changes in the Code Thanks to Alan Reiblein.
He had to say this
" The version (3.0) supports both PSP & WAP bowser Detection along with
usual PC browser detection in the same script. So now you can support three different websites (for PC , Mobile & PSP)
through a single link Version(3.0)
Some changes made to check for WAP before anything else
Will also check what doument types the user's browser can accept
also some slight tweaking by using an array of identities to match against the User Agent string 
Alan Reiblein EMail alan@cedar-view.co.uk Website Http://www.cedar-view.co.uk
Updated as many WAP Browser identities I could find "
--------------------------------------------------------------------------------
iPhone support by Ben Lopez benlopez7@gmail.com
****************************************************************************/
//Configuration
global $userBrowser;
global $userAccept;
// Exit this area 

// Your wapsite
//enter the link you want user to be redirected in case of WML browser
$wmllink = "mobile/";
// Your website
//enter the link you want user to be redirected in case of PC browser
$htmllink = "nonmobile/";
// Your PSPsite
//enter the link you want user to be redirected in case of PSP browser
$psplink = "mobile/";
// Your iPhone site
//enter the link you want user to be redirected in case of iPhone browser
$iPhonelink = "mobile/";

//end of your edits
//There is no need to edit any information from this point on
//however in case if you want to contribute please do so
//please be sure to let me know about the changes
//Detect the browser
// put in lowercase to aid searching
$userBrowser = strtolower($_SERVER['HTTP_USER_AGENT']); 
//Detect acceptable document types
$userAccept= strtolower($_SERVER['HTTP_ACCEPT']);

//Remove the below // quotes.

//It helps to check if there is any error when editing
//If everything is all right it will display the browser information
//please remember to put // back after testing or no redirection will occur
//echo "HTTP_USER_AGENT = " . $userBrowser . "<br>HTTP_ACCEPT = " . $userAccept;


function checkidentity($fromThis,$identities){
//this function iterates through the array identities matching to see if in the $fromThis string
// returns true if found otherwise false
  foreach ($identities as $identity) {
	if (stristr($fromThis,$identity)){
	  //found
	  return true;
	}
  }
  //not found
  return false;
}


if (stristr($userAccept,'wml')) {
   // This can accept wml (Wireless Meta Language files) so let's assume its WAP)
   // trouble is accept can contain wildcards ... but here we go
   $ub="WML";
   }
else {
// Lets look at the browser
//specify an array of identities to match against
$wapidentity = array('wapbrowser','up.browser','up/4','mib','cellphone','go.web',
                     'nokia','panasonic','wap','wml-browser','wml','BlackBerry'
                     );// can add other identities to this list
$pcidentity = array(
		'mozilla','gecko','opera','omniweb','msie','konqueror','safari',
		'netpositive' ,'lynx' ,'elinks' ,'links' ,'w3m' ,'webtv' ,'amaya' ,
		'dillo' ,'ibrowse' ,'icab' ,'crazy browser' ,'internet explorer' 
		); // can add other identities to this list
$pspidentity= array('PlayStation Portable'); //can add other identities to this list
$iPhoneidentity= array('iphone'); //can add other identities to this list
if (checkidentity($userBrowser,$wapidentity)){
  $ub="WML";
  }
elseif (checkidentity($userBrowser,$iPhoneidentity)){
  $ub="iphone";
  }
elseif (checkidentity($userBrowser,$pspidentity)){
  $ub="PSP";
  }
elseif (checkidentity($userBrowser,$pcidentity)){
  $ub= "PC";
  }
else {
  $ub="WML"; // can't find anything else so let's hope it is WML 
}
}



//Code for redirecting based upon the results
switch ($ub){
  case 'PC':
    header("Location: ".$htmllink);
    exit;
  case 'WML':
    header("Location: ".$wmllink);
    exit;  
  case 'PSP':
    header("Location: ".$psplink);
    exit;
  case 'iphone':
    header("Location: ".$iPhonelink);
  exit;
  }
?>
