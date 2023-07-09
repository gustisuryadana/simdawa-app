<?php
$pdf = new FPDF("P", "cm", "A4");// P-potrait, cm=centimeter, A4=ukuran kertas
$pdf->AddPage();//membuat jadi satu halaman
$pdf->SetTitle("Laporan Data Beasiswa");//untuk title/judul
$pdf->SetFont("Arial", "B", 16);//mengatur font, (type tulisan, cetak tebal, ukuran font)
$pdf->Cell(19, 1, "KEMAHASISWAAN UNISKA BANJARMASIN", 0, 1, "C");//cell=1 kotak (width, height, tulisan, border, line atau baris, posisi tulisan[center])
$pdf->SetFont("Arial", "", 11);//perbaruan style penulisan berikutnya
$pdf->Cell(19, 1, "Alamat: Jalan Adhyaksa No.3 Kel. Sungai Miai Kec. Banjarmasin Utara", 0, 1, "C");
$pdf->Line(1, 3, 20, 3);//garis
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);//perbaruan style penulisan berikutnya
$pdf->Cell(19, 1, "Laporan Data Beasiswa", 0, 1, "C");
$pdf->Ln();
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0);//untuk 
$pdf->Cell(1, 1, "No", 1, 0, "C", true);//(1cm, tinggi,)
$pdf->Cell(6, 1, "Nama Beasiswa", 1, 0, "C", true);
$pdf->Cell(4, 1, "Tanggal Mulai", 1, 0, "C", true);
$pdf->Cell(4, 1, "Tanggal Selesai", 1, 0, "C", true);
$pdf->Cell(4, 1, "Jenis Beasiswa", 1, 1, "C", true);//(width, heigth, tulisan, 1, line baru, center)
$pdf->SetFont("Arial", "", 11);
$no = 1;
foreach ($beasiswa as $a) {
    $pdf->Cell(1, 1, $no++, 1, 0, "C");
    $pdf->Cell(6, 1, $a->nama_beasiswa, 1, 0, "C");
    $pdf->Cell(4, 1, $a->tanggal_mulai, 1, 0, "C");
    $pdf->Cell(4, 1, $a->tanggal_mulai, 1, 0, "C");
    $pdf->Cell(4, 1, $a->nama_jenis, 1, 1, "C");
}
$pdf->Output("I", "Laporan Data Beasiswa.pdf");