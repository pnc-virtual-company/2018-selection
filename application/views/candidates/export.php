<?php
/**
 * This view builds a Spreadsheet file containing the list of users.
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      1.0.0
 */

$this->load->model('candidates_model');
require_once FCPATH . "vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$title = $candidateFilter ? "Selected candidates list" : "All candidates list";
$filename = $candidateFilter ? "List of selected candidates.xlsx" : "List of all candidates.xlsx";

$sheet->setTitle(mb_strimwidth($title, 0, 28, "..."));  //Maximum 31 characters allowed in sheet title.
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Fullname');
$sheet->setCellValue('C1', 'Provinces');
$sheet->setCellValue('D1', 'Gender');
$sheet->setCellValue('E1', 'Global grade');		
$sheet->getStyle('A1:E1')->getFont()->setBold(true);
$sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);	

$candidates = $this->candidates_model->showAllCandidates();		

$line = 2;
foreach ($candidates as $candidate) 
{
    $sheet->setCellValue('A' . $line, $candidate->candidate_id);
    $sheet->setCellValue('B' . $line, $candidate->candidate_name);
    $sheet->setCellValue('C' . $line, $candidate->candidate_province);
    $sheet->setCellValue('D' . $line, $candidate->candidate_gender);
    $sheet->setCellValue('E' . $line, $candidate->candidate_global_grade);
    $line++;
}		

//Autofit
foreach(range('A', 'E') as $colD) 
{
    $sheet->getColumnDimension($colD)->setAutoSize(TRUE);
}		

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->setPreCalculateFormulas(false);
$writer->save('php://output');
