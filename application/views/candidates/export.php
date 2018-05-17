<?php
/**
 * This view builds a Spreadsheet file containing the list of users.
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      1.0.0
 */

	$this->load->model('candidates_model', 'm_can');


require_once FCPATH . "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setTitle(mb_strimwidth('Candidates list', 0, 28, "..."));  //Maximum 31 characters allowed in sheet title.
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Fullname');
$sheet->setCellValue('C1', 'Provinces');
$sheet->setCellValue('D1', 'Gender');
$sheet->setCellValue('E1', 'Global grade');


$sheet->getStyle('A1:E1')->getFont()->setBold(true);
$sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);


$candidates = $this->m_can->showAllCandidates();


$line = 2;

foreach ($candidates as $candidates) {
    $sheet->setCellValue('A' . $line, $candidates->can_id);
    $sheet->setCellValue('B' . $line, $candidates->can_name);
    $sheet->setCellValue('C' . $line, $candidates->province);
    $sheet->setCellValue('D' . $line, $candidates->can_gender);
    $sheet->setCellValue('E' . $line, $candidates->can_global_grade);
    $line++;
}

//Autofit
foreach(range('A', 'E') as $colD) {
    $sheet->getColumnDimension($colD)->setAutoSize(TRUE);
}

$filename = 'List of candidates.' . 'xlsx';
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->setPreCalculateFormulas(false);
$writer->save('php://output');
