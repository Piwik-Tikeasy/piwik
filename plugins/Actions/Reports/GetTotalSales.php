<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Actions\Reports;

use Piwik\Piwik;
use Piwik\Plugin\Report;
use Piwik\Plugin\ViewDataTable;

use Piwik\View;

/**
 * This class defines a new report.
 *
 * See {@link http://developer.piwik.org/api-reference/Piwik/Plugin/Report} for more information.
 */
class GetTotalSales extends Base
{
    protected function init()
    {
        parent::init();

        $this->name          = Piwik::translate('Total ventes annuelles');
        $this->dimension     = null;
        $this->documentation = Piwik::translate('');
        $this->subcategoryId = $this->name;
        $this->order = 12;


        // By default standard metrics are defined but you can customize them by defining an array of metric names
        // $this->metrics       = array('nb_visits', 'nb_hits');

        // Uncomment the next line if your report does not contain any processed metrics, otherwise default
        // processed metrics will be assigned
        // $this->processedMetrics = array();

        // Uncomment the next line if your report defines goal metrics
        // $this->hasGoalMetrics = true;

        // Uncomment the next line if your report should be able to load subtables. You can define any action here
        // $this->actionToLoadSubTables = $this->action;

        // Uncomment the next line if your report always returns a constant count of rows, for instance always
        // 24 rows for 1-24hours
        // $this->constantRowsCount = true;

        // If a subcategory is specified, the report will be displayed in the menu under this menu item
        // $this->subcategoryId = 'Actions_GetTotalSales';
    }

    /**

    /**
     * Here you can configure how your report should be displayed. For instance whether your report supports a search
     * etc. You can also change the default request config. For instance change how many rows are displayed by default.
     *
     * @param ViewDataTable $view
     */
    public function configureView(ViewDataTable $view)
    {
        $view->config->columns_to_display = array('Nombre de ventes totales','Palladium','Prestashop','Moyenne par jour des ventes Palladium',
            'Maximum des ventes Palladium','Moyenne par jour des ventes Prestashop','Maximum des ventes Prestashop');
    }

    /**
     * Here you can define related reports that will be shown below the reports. Just return an array of related
     * report instances if there are any.
     *
     * @return \Piwik\Plugin\Report[]
     */
    public function getRelatedReports()
    {
        return array(); // eg return array(new XyzReport());
    }


}
