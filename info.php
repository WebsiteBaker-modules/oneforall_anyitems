<?php

/*
  Snippet developed for the Open Source Content Management System Website Baker (http://websitebaker.org)
  Copyright (C) 2016, Christoph Marti

  LICENCE TERMS:
  This snippet is free software. You can redistribute it and/or modify it 
  under the terms of the GNU General Public License  - version 2 or later, 
  as published by the Free Software Foundation: http://www.gnu.org/licenses/gpl.html.

  DISCLAIMER:
  This snippet is distributed in the hope that it will be useful, 
  but WITHOUT ANY WARRANTY; without even the implied warranty of 
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
  GNU General Public License for more details.


  -----------------------------------------------------------------------------------------
   Code snippet OneForAll AnyItems for Website Baker v2.6.x
  -----------------------------------------------------------------------------------------

 
	DEVELOPMENT HISTORY:

   v0.3  (Christoph Marti; 11/24/2016)
	 + Fixed file url of type 'media'

   v0.2  (Christoph Marti; 04/18/2016)
	 + png thumbs did not show up after OneForAll got better support for png images and thumbs
	   (added in OneForAll v0.9)
	 + Added FTAN_SUPPORTED file

   v0.1  (Christoph Marti; 01/06/2016)
	 + Initial release of OneForAll AnyItems snippet

  -----------------------------------------------------------------------------------------
*/


$module_directory   = 'oneforall_anyitems';
$module_name        = 'OneForAll AnyItems';
$module_function    = 'snippet';
$module_version     = '0.3';
$module_platform    = '2.7';
$module_author      = 'Christoph Marti';
$module_license     = 'GNU General Public License';
$module_description = 'Snippet to display a specified number of items of a given OneForAll module section.<br /><b>Requires the module OneForAll.</b><br />Function can be invoked from the template or a code section. Call: <code>oneforall_anyitems($section_id, $num_of_items, $order = \'ASC\')</code>.';
?>
