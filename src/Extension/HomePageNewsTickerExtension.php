<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 18/4/2561
 * Time: 21:49 น.
 */
namespace Suilven\HomeLandingPage\Extension;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\GridField\GridFieldDataColumns;
use SilverStripe\Forms\GridField\GridFieldPaginator;
use SilverStripe\ORM\DataExtension;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class HomePageNewsTickerExtension extends DataExtension
{
    private static $has_many = [
        'NewsTickerItems' => 'Suilven\HomeLandingPage\Model\NewsTickerItem'
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        error_log('**** NEWS TICKER ****');
        $config = GridFieldConfig_RelationEditor::create();

        $config->getComponentByType(GridFieldPaginator::class)->setItemsPerPage(10);
        // This fails, not sure why
        // $config->addComponent(new GridFieldSortableRows('SortOrder'));

        $dataColumns = $config->getComponentByType(GridFieldDataColumns::class);

        $dataColumns->setDisplayFields([
            'Headline' => 'Headline',
            'LastEdited' => 'Changed'
        ]);
        $gridField2 = new GridField("Headlines",
            "Headlines:",
            $this->owner->NewsTickerItems(),
            $config
        );
        $fields->addFieldToTab("Root.Ticker", $gridField2);
    }
}
