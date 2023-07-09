<?php
$pdf = new FPDF("P", "cm", "A4");// P-potrait, cm=centimeter, A4=ukuran kertas
$pdf->AddPage();//membuat jadi satu halaman
$pdf->SetTitle("Laporan Data Program Studi");//untuk title/judul
$pdf->SetFont("Arial", "B", 16);//mengatur font, (type tulisan, cetak tebal, ukuran font)
$pdf->Cell(19, 1, "KEMAHASISWAAN UNISKA BANJARMASIN", 0, 1, "C");//cell=1 kotak (width, height, tulisan, border, line atau baris, posisi tulisan[center])
$pdf->SetFont("Arial", "", 11);//perbaruan style penulisan berikutnya
$pdf->Cell(19, 1, "Alamat: Jalan Adhyaksa No.3 Kel. Sungai Miai Kec. Banjarmasin Utara", 0, 1, "C");
$pdf->Line(1, 3, 20, 3);//garis
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);//perbaruan style penulisan berikutnya
$pdf->Cell(19, 1, "Laporan Data Program Studi", 0, 1, "C");
$pdf->SetMargins(4,0);
$pdf->Ln();
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0);//untuk 
$pdf->Cell(2, 1, "No", 1, 0, "C", true);//(1cm, tinggi,)
$pdf->Cell(11, 1, "Nama Program Studi", 1, 1, "C", true);//(width, heigth, tulisan, 1, line baru, center)
$pdf->SetFont("Arial", "", 11);
$no = 1;
foreach ($prodi as $a) {
    $pdf->Cell(2, 1, $no++, 1, 0, "C");
    $pdf->Cell(11, 1, $a->nama_prodi, 1, 1, "C");
}
$pdf->Output("I", "Laporan Data Prodi.pdf");