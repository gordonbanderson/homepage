<?php

namespace Suilven\HomeLandingPage\Elemental;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\View\ArrayData;


class TitleContentImage extends BaseElement
{
    private static $has_one = [
        'Image' => Image::class
    ];

    private static $owns = ['Image'];

    /**
     * @var string
     */
    private static $icon = 'sectionnav-icon';

    /**
     * @var string
     */
    private static $singular_name = 'Title Content Image Section';

    /**
     * @var string
     */
    private static $plural_name = 'Title Content Image Section';

    /**
     * @var array
     */
    private static $db = [
        'Content' => 'Text',
        'SubTitle' => 'Varchar(255)'
    ];

    /**
     * @var string
     */
    private static $table_name = 'TitleContentImage';


    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Title,Content and Image');
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

                /** @var UploadField $uploadField */
                $uploadField = $fields->dataFieldByName('Image');
                $uploadField->setFolderName('homepage');
                $uploadField->setAllowedFileCategories('image');

            }
        );
        return parent::getCMSFields();
    }

}
