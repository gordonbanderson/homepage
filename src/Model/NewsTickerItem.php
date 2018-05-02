<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 16/3/2561
 * Time: 3:43 น.
 */

namespace Suilven\HomeLandingPage\Model;


use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;

class NewsTickerItem extends DataObject
{
    private static $db=[
        'Headline' => 'Text',
        'URL' => 'Varchar',
        'SortOrder' => 'Int'
    ];

    private static $table_name = 'NewsTickerItem';

    private static $has_one = [
        'HomePage' => 'Suilven\HomeLandingPage\Model\HomePage'
    ];

    private static $summary_fields = [
      'Headline',
      'URL'
    ];

    private static $default_sort = 'SortOrder';


    /**
     * Fields for editing a newsticker item
     * @return \SilverStripe\Forms\FieldList
     *
     */
    public function getCMSFields() {
        $fields = FieldList::create();
        $fields->push(TabSet::create("Root"));
        $fields->addFieldsToTab('Root.Main', new TextField('Headline', 'The headline to show'));
        $fields->addFieldsToTab('Root.Main', new TextField('URL', 'URL to link to'));

        return $fields;
    }
}
