<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  RSM 2013 
 * @author     Christian Duell <duell@rsm.de> 
 * @package    CatalogGeopickerField 
 * @license    GNU/LGPL 
 * @filesource
 */


/**
 * Table tl_catalog_fields 
 */

// Palettes
$GLOBALS['TL_DCA']['tl_catalog_fields']['palettes']['geopickerfield'] = '{title_legend},name,description,colName,type;{display_legend},parentCheckbox,titleField,width50;{legend_legend:hide},insertBreak;{filter_legend:hide},sortingField,filteredField,searchableField;{advanced_legend:hide},mandatory;';

// register to catalog module that we provide the geopickerfield as field type.
$GLOBALS['TL_DCA']['tl_catalog_fields']['fields']['type']['options'][] = 'geopickerfield';

?>