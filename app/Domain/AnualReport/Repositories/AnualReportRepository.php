<?php
namespace QQB\AnualReport\Repositories;

use App\AnualReport;
use QQB\AnualReport\Resources\AnualReportResource;

class AnualReportRepository {
    private $anual_reports;
    public function __construct(AnualReport $anual_reports) {
        $this->anual_reports = $anual_reports;
    }
    public function getAll(): array
    {
        return ['anual_reports' => AnualReportResource::collection($this->anual_reports->orderByDesc('created_at')->get())];
    }
}