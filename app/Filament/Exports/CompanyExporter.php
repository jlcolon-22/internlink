<?php

namespace App\Filament\Exports;

use App\Models\Company;
use Filament\Actions\Exports\Exporter;
use OpenSpout\Common\Entity\Style\Style;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Models\Export;

class CompanyExporter extends Exporter
{


    protected static ?string $model = Company::class;

public function getXlsxCellStyle(): ?Style
{
    return (new Style())
        ->setFontSize(12)
        ->setFontName('Consolas');
}
    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('company_name'),
            ExportColumn::make('company_profile'),
            ExportColumn::make('company_background'),
            ExportColumn::make('company_description'),
            ExportColumn::make('company_address'),
            ExportColumn::make('company_email'),
            ExportColumn::make('company_contact_number'),
            ExportColumn::make('status'),
            ExportColumn::make('company_employer_name'),

        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your company export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
