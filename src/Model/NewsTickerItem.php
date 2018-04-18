<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 16/3/2561
 * Time: 3:43 น.
 */

namespace Suilven\HomeLandingPage\Model;


use SilverStripe\ORM\DataObject;

class NewsTickerItem extends DataObject
{
    private static $db=[
        'Headline' => 'Text',
        'SortOrder' => 'Int'
    ];

    private static $table_name = 'NewsTickerItem';

    private static $has_one = [
        'HomePage' => 'Suilven\HomeLandingPage\Model\HomePage'
    ];
}
