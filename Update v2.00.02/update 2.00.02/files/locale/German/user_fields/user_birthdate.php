<?php
/*
+--------------------------------------------------------+
| PHP-Fusion Content Management System                   |
| Copyright � 2002 - 2012 Nick Jones                     |
| http://www.php-fusion.co.uk/                           |
+--------------------------------------------------------+
| This program is released as free software under the    |
| Affero GPL license. You can redistribute it and/or     |
| modify it under the terms of this license which you    |
| can read by viewing the included agpl.txt or online    |
| at www.gnu.org/licenses/agpl.html. Removal of this     |
| copyright header is strictly prohibited without        |
| written permission from the original author(s).        |
+--------------------------------------------------------+
| Birthdate User Field                                   |
| Copyright � 2012 PHP-Fusion.at Development Team        |
| http://www.php-fusion.at/                              |
| http://development.php-fusion.at/                      |
+--------------------------------------------------------+
| Filename: user_birthdate.php                           |
| Fileversion: 1.0                                       |
+--------------------------------------------------------+
| Modified by Patrick Kruse (Chrome)                     |
| Modified and compatible to PHP 7.2                     |
| Copyright by Patrick Kruse (Chrome)                    |
| http://chrome-fusion.de                                |
+--------------------------------------------------------*/

if (!defined("IN_FUSION")) {
   die("Access denied");
}

// Userfeld: Geburtstag
$locale['uf_birthdate'] = "Geburtsdatum";
$locale['uf_birthdate_desc'] = "Zeigt das Geburtsdatum eines Benutzers an.";
$locale['uf_birthdate_error'] = "Du musst dein Geburtsdatum angeben.";
$locale['uf_birthdate_day'] = "Tag";
$locale['uf_birthdate_month'] = "Monat";
$locale['uf_birthdate_year'] = "Jahr";
$locale['uf_birthdate_years'] = "Jahre";
?>
