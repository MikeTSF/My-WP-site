<?php
/**
Plugin Name: Mike's Awesome Widget
Plugin URI: http://www.tjonsienfat.net
Description: This plugin does awesome things
Author: Mike T-S-F
Version: 1.0
Author URI: http://www.tjonsienfat.net

Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

global $wp_version;

if (!version_compare($wp_version, "4.1.1",">=")) {
    die("You need at least version 4.1.1 of wordpress to use the copyright plugin");
}