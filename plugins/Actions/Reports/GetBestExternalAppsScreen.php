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
class getBestExternalAppsScreen extends Base
{
    protected function init()
    {

        parent::init();
        $this->name          = "Applications externes (Ecrans)";
        $this->dimension     = null;
        $this->documentation = Piwik::translate('');
        $this->subcategoryId = $this->name;
        $this->order = -1;
    }

    /**
     * Here you can configure how your report should be displayed. For instance whether your report supports a search
     * etc. You can also change the default request config. For instance change how many rows are displayed by default.
     *
     * @param ViewDataTable $view
     */
    public function configureView(ViewDataTable $view)
    {
        $view->config->columns_to_display = array('Nom', 'Visites', 'Vues uniques','Temps moyen','Temps total');
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
