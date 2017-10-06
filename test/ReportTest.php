<?php

namespace test\Fosyl\ReportOne;

use Fosyl\ReportOne\Format\CellFormat;
use Fosyl\ReportOne\DataSource\ZeroCountDataSource;
use Fosyl\ReportOne\Input\EmptyInput;
use Fosyl\ReportOne\Renderer\DefaultRenderer;
use Fosyl\ReportOne\Report\GenericReport;
use Fosyl\ReportOne\View\GenericView;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ReportTest extends TestCase
{
    public function testReportCanBeGenerated()
    {
        $report = new GenericReport(new EmptyInput());
        $view = new GenericView(new ZeroCountDataSource(), new CellFormat());

        $renderer = new DefaultRenderer();

        Assert::assertEquals('Count: 0', $renderer->generate($report, $view));
    }
}
