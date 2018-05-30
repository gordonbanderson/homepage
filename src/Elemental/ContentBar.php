<?php

namespace Suilven\HomeLandingPage\Elemental;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\FieldList;
use SilverStripe\View\ArrayData;


class ContentBar extends BaseElement
{
    /**
     * @var string
     */
    private static $icon = 'sectionnav-icon';

    /**
     * @var string
     */
    private static $singular_name = 'Content Bar';

    /**
     * @var string
     */
    private static $plural_name = 'Content Bar';

    /**
     * @var array
     */
    private static $db = [
        'Content' => 'Text'
    ];

    /**
     * @var string
     */
    private static $table_name = 'ContentBar';


    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'ContentBar');
    }

    /**
     * @return \SilverStripe\ORM\ValidationResult
     */
    public function validate()
    {
        $result = parent::validate();

        if (!$this->Content) {
            $result->addError('Content is required');
        }

        return $result;
    }

    /*
    **
    * @return FieldList
    */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(
            function (FieldList $fields) {
                $fields->dataFieldByName('Content')
                    ->setRows(8);

            }
        );
        return parent::getCMSFields();
    }

}
