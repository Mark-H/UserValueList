<?php
/**
 * userValueList
 *
 * Copyright 2011-12 by SCHERP Ontwikkeling <info@scherpontwikkeling.nl>
 *
 * This file is part of userValueList.
 *
 * userValueList is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * userValueList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * userValueList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package userValueList
 */
/**
 * Default snippet properties for userValueList
 *
 * @package uservaluelist
 * @subpackage build
 */
$properties = array(
	array(
		'name' => 'key',
		'desc' => 'The key used for the list.',
		'type' => 'textfield',
		'options' => '',
		'value' => 'userValueList',
		'lexicon' => ''
	),
	array(
		'name' => 'separator',
		'desc' => 'The separator used when returning list values. Defaults to ",".',
		'type' => 'textfield',
		'options' => '',
		'value' => ',',
		'lexicon' => ''
	)
);
return $properties;