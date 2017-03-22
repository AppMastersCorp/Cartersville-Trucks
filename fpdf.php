<?php
function job_posting_to_pdf($job_id) {
    require_once(ROOT . 'assets/libs/tcpdf/config/lang/eng.php');
    require_once(ROOT . 'assets/libs/tcpdf/tcpdf.php');
    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('');
    $pdf->SetTitle('OPL Job Posting');
    $pdf->SetSubject('Job Posting');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // remove default header/footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    //set margins
    $pdf->SetMargins(11, PDF_MARGIN_TOP, 11);

    //set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    //set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

    //set some language-dependent strings
    $pdf->setLanguageArray($l); 

    // ---------------------------------------------------------

    $pdf->SetFont('times', 'I', 9);
    $pdf->AddPage();

    $left_cell_width = 60;
    $row_height = 6;

    $pdf->Image(ROOT . 'assets/gfx/logos/OPL-Logo.jpg', 0, 5, null, 16, null, null, 'N', false, null,'R');
    $pdf->Ln('3');

    if(!$row['internal']) {
        $pdf->Cell(0,0,'This position will be posted internally and externally, concurrently.',0,2,'C');
    } else {
        $pdf->Cell(0,0,'Internal posting only.',0,2,'C');
    }

    //Remainder of actual PDF creation removed to keep things simple


    return $pdf->Output("", "S");
}
?>