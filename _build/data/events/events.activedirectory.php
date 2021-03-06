<?php
/**
 * modActiveDirectory
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of modActiveDirectory, which integrates Active Directory
 * authentication into MODx Revolution.
 *
 * modActiveDirectory is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * modActiveDirectory is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * modActiveDirectory; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package activedirectory
 */
/**
 * Add events to ActiveDirectory plugin
 * 
 * @package activedirectory
 * @subpackage build
 */
$events = array();

$events['OnManagerAuthentication']= $modx->newObject('modPluginEvent');
$events['OnManagerAuthentication']->fromArray(array(
    'event' => 'OnManagerAuthentication',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);
$events['OnWebAuthentication']= $modx->newObject('modPluginEvent');
$events['OnWebAuthentication']->fromArray(array(
    'event' => 'OnWebAuthentication',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);
$events['OnUserNotFound']= $modx->newObject('modPluginEvent');
$events['OnUserNotFound']->fromArray(array(
    'event' => 'OnUserNotFound',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);

return $events;