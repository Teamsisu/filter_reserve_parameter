<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package    MetaModels
 * @subpackage FilterText
 * @author     Christopher Boelter <christopher@boelter.eu>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

namespace MetaModels\Filter\Setting;

/**
 * Attribute type factory for text filter settings.
 */
class ReserveParameterFilterSettingTypeFactory extends AbstractFilterSettingTypeFactory
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this
            ->setTypeName('text')
            ->setTypeIcon('system/modules/metamodelsfilter_reserve_parameter/html/filter_text.png')
            ->setTypeClass('MetaModels\Filter\Setting\ReserveParameter')
            ->allowAttributeTypes();

        foreach (array(
                     'longtext',
                     'text',
                     'translatedtext',
                     'translatedlongtext',
                     'date',
                 ) as $attribute) {
            $this->addKnownAttributeType($attribute);
        }
    }
}
