<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */

return array(
	'import' => array(
		'application.modules.mehstaffdb.*',
		'application.modules.mehstaffdb.components.*',
		'application.modules.mehstaffdb.models.*',
	),
	'components' => array(
		'event' => array(
			'observers' => array(
				'user_before_login' => array(
					'update_user' => array(
						'class' => 'UserObserver',
						'method' => 'updateUser',
					),
				),
				'lookup_user' => array(
					'lookup_user' => array(
						'class' => 'UserObserver',
						'method' => 'updateUser',
					),
				),
			),
		),
		'db_staff' => array(
			'class' => 'CDbConnection',
			//'connectionString' => 'dblib:host=HOSTNAME;dbname=DATABASE',
			//'username' => 'root',
			//'password' => '',
		),
	),
	'params'=>array(
		'mehstaffdb_always_refresh' => false,
		'mehstaffdb_cache_time' => 300,
		'mehstaffdb_default_email' => 'openeyes.servicedesk@moorfields.nhs.uk',
	),
);
