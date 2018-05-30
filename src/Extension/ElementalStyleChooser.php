<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 18/4/2561
 * Time: 21:49 น.
 */
namespace Suilven\HomeLandingPage\Extension;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class ElementalStyleChooser extends DataExtension
{
    private static $db = [
        // which template to use
        'Style' => 'Varchar(255)'
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        $styles = $this->owner->config()->get('styles');
        $styleArray = [];

        // convert likes of 'Orange Bar' to orange-bar for CSS styling
        foreach($styles as $style) {
            $key = strtolower($style);
            $key = str_replace(' ', '-', $key);
            $styleArray[$key] = $style;
        }

        if (!empty($styles)) {
            $stylesField = DropdownField::create('Style', 'Style', $styleArray)
                ->setEmptyString('-- use default style --');
            $fields->push($stylesField);
        }
    }

}
