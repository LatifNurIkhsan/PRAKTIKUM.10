<?php
    require_once 'koneksiakad.php';
// membaca (select) tabelmahasiswa
// jikaberhasil, hasil array drbaris-baris data
// dansetiapbaris data berupa array darinama-nama field
// jikatidakada,hasilberupanilai null
    Function bacaMhs($sql){
        $data = array();
        $koneksi = koneksiAkademik();
        $hasil = mysqli_query($koneksi, $sql);
    // jikatidakada record, hasilberupa null
        if (mysqli_num_rows($hasil) == 0) {
            mysqli_close($koneksi);
            return null;}
        $i=0;
            while   ($baris = mysqli_fetch_assoc($hasil)){
                    $data[$i]['nim']= $baris['nim'];
                    $data[$i]['nama'] = $baris['nama'];
                    $data[$i]['kelamin'] = $baris['kelamin'];
                    $data[$i]['jurusan'] = $baris['jurusan'];
                    $i++;
                    }
            mysqli_close($koneksi);
            return $data;
}

//Tugas Praktikum Pertemuan Ke-8 Bagian #1
//Membaca/Mengambil	Semua Record Dalam Tabel
    Function bacaSemuaMhs(){
        return bacaMhs(" Select * From Mahasiswa");}

//Tugas Praktikum Pertemuan Ke-8 Bagian #2
//Membaca/Mengambil Record-Record Yang Mempunyai Jurusan Tertentu
    Function bacaMhsPerJurusan($jurusan){
        return bacaMhs("Select * From Mahasiswa Where Jurusan = '$jurusan'");}

//Tugas Praktikum Pertemuan Ke-8 Bagian #3
//Mencari Record Dengan NIM Tertentu
    Function cariMhsDariNIM($nim){
        return bacaMhs("Select * From Mahasiswa Where NIM = '$nim'");}