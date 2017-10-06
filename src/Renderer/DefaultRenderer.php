<?php

namespace Fosyl\ReportOne\Renderer;

use Fosyl\ReportOne\Renderer;
use Fosyl\ReportOne\Report;
use Fosyl\ReportOne\View;

class DefaultRenderer implements Renderer
{
    public function generate(Report $report, View $view): string
    {
        return $view->getFormat()->apply($view->getDataSource()->fetch($report->getInput()));
    }
}
