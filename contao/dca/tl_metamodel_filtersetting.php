<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package      MetaModels
 * @subpackage   FilterText
 * @author       Christian de la Haye <service@delahaye.de>
 * @author       Andreas Isaak <info@andreas-isaak.de>
 * @author       Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author       David Molineus <mail@netzmacht.de>
 * @author       Christopher Boelter <christopher@boelter.eu>
 * @copyright    The MetaModels team.
 * @license      LGPL.
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['reserve_parameter extends default'] = array
(
	'+config' => array('urlparam', 'label', 'template'),
);
//$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['reserve_parameter extends default'] = array
//(
//	'+config' => array('attr_id', 'urlparam', 'label', 'template'),
//);
//
//$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['reserverparametersearch'] = array
//(
//	'label'                   => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['reserverparametersearch'],
//	'exclude'                 => true,
//	'inputType'               => 'select',
//	'options'                 => array('exact','beginswith','endswith'),
//	'reference'               => $GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references'],
//	'eval'                    => array('tl_class' => 'w50', 'includeBlankOption' => true)
//);
