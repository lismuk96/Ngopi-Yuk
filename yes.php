<?php
//variabel
//variabel di PHP dimulai dengan tanda $ (dolar)
$title = 'Menghubungkan HTML dan PHP ternyata mudah';
$judul_tipe_data = 'Tipe data';
$judul_aritmatika = 'Operator Aritmatika';
$judul_logika = 'Operator Logika';
$judul_perulangan = 'Perulangan';
$judul_fungsi_bawaan = 'Fungsi Bawaan PHP';
$judul_fungsi_sediri = 'Fungsi Buatan Sendiri';

//tipe data
$string = 'String adalah teks, abjad, campuran angka, dll. Harus dikasih tanda petik.';
$integer = 20;
$float = 51.5;

//komentar dalam PHP ditulis //
//jika komentar berisi beberapa baris bisa ditulis didalam /* */
//komentar di PHP tidak dieksekusi dan ditampilkan.
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        /*
        variabel $title ditulis dibagian <title>
        cara menulis variabel di PHP menggunakan "echo" 
        */
        ?>
        <title><?php echo $title; ?></title>
        <style type="text/css">
            body {
                background-color:#eee;
            }

            li {
                margin-bottom: 10px;
            }

        </style>
    </head>
    <body>

        <div class="content">

            <h1>Konsep dasar PHP</h1>

            <h2><?php echo $judul_tipe_data; ?></h2>

            <ul>
                <li>
                    String
                    <br />
                    Contoh: <?php echo $string; ?>
                </li>
                <li>
                    Integer
                    <br />
                    integer adalah bilangan bulat.
                    <br />
                    Contoh: Umur Dina adalah <?php echo $integer; ?> tahun.
                </li>
                <li>
                    Float
                    <br />
                    float bisa digunakan untuk bilangan bulat dan desimal.
                    <br />
                    Contoh: Berat Dina adalah <?php echo $float; ?> kg.
                </li>
                <li>
                    Array
                    <br />
                    Array dalam PHP adalah sebuah variabel yang berisi kumpulan data-data tunggal (string, int, array, dll).
                    <br />
                    Jadi data-data tersebut dijadikan dalam satu variabel array. 
                    <br />
                    <?php
                    //format: $nama_variabel_arary = array('isivar1','isivar2',dst);
                    $arr_hobi = array('membaca', 'traveling','menulis');

                    echo 'Contoh: Hobi Dina adalah: '.implode(', ', $arr_hobi).'.';
                    //implode adalah fungsi bawaan PHP untuk memecah array menjadi string.
                    ?>
                </li>
                <li>
                    Array Multidimensi
                    <br />
                    Array Multidimensi adalah sebuah variabel yang berisi kumpulan data-data (string, int, array, dll) yang berisi index dan nilai yang bisa banyak (multi).
                    <br />
                    Jadi array juga bisa dimasukkan dalam sebuah variabel array.
                    <br />
                    <?php
                    //format: $nama_variabel_arary[nama_index] = array('key1'=>'val1','key2',dst);
                    $arr_sekolah['playgroup'] = 
                        array(
                            'umur'=>'2-4', 
                            'kepala'=>'Ibu Dina',
                            'jumlah_murid'=>30
                        );
                    $arr_sekolah['tk'] = 
                        array(
                            'umur'=>'5-7', 
                            'kepala'=>'Bpk Warso',
                            'jumlah_murid'=>60
                        );
                    $arr_sekolah['sd'] = 
                        array(
                            'umur'=>'8-14', 
                            'kepala'=>'Bpk Eko',
                            'jumlah_murid'=>180
                        );

                    echo 'Contoh: ';
                    echo '<br />';
                    foreach ($arr_sekolah as $jenjang => $arr) {
                        echo 'Jenjang: '.$jenjang.', range usia: '.$arr['umur'].' tahun, kepsek: '.$arr['kepala'].', jumlah murid: '.$arr['jumlah_murid'];
                        echo '<br />';
                    }

                    //foreach digunakan untuk fungsi perulangan yang digunakan untuk mengambil data dari array.
                    //format foreach($array as $index => $value/array) : jika multidimensi
                    //atau foreach($array as $value) : jika bukan multidimensi
                    ?>
                </li>
            </ul>
            
            <h2><?php echo $judul_aritmatika; ?></h2>

            <?php
            $angka1 = 15;
            $angka2 = 5;
            $angka3 = 50;

            $hasil_bagi = $angka3/$angka2;

            echo 'Hasil dari penjumlahan <strong>'.$angka1.'+'.$angka2.'='.($angka1+$angka2).'</strong>.';
            echo '<br />';
            echo 'Hasil dari pengurangan <strong>'.$angka3.'-'.$angka1.'='.($angka3-$angka1).'</strong>.';
            echo '<br />';
            echo 'Hasil dari pembagian <strong>'.$angka3.'/'.$angka2.'='.$hasil_bagi.'</strong>.';
            ?>

            <h2><?php echo $judul_logika; ?></h2>
            <ul>
                <li>
                    IF
                    <br />
                    <?php
                    $umur_dina = $integer;//lihat nilai integer di atas

                    if ($umur_dina === 20) {
                        echo 'Umur dina '.$umur_dina.' tahun.';
                    }

                    //perbedaan == dan ===
                    //kalau == digunakan untuk membandingkan nilai yang sama
                    //kalau === digunakan untuk membandingkan nilai dan tipe data yang sama
                    echo '<br />';
                    if ($umur_dina === '20') {
                        echo "umur dina === '20'";
                    } else {
                        echo "umur dina tidak === '20'";
                    }
                    echo '<br />';
                    if ($umur_dina == '20') {
                        echo "umur dina == '20'";
                    } else {
                        echo "umur dina tidak == '20'";
                    }

                    ?>
                </li>
                <li>
                    IF ELSE
                    <br />
                    <?php
                    if ($umur_dina < 10) {
                        echo 'Umur dina masih dibawah 10 tahun.';
                    } else {
                        echo 'Umur dina di atas 10 tahun.';
                    }

                    $hobi1 = 'menulis';
                    $hobi2 = 'membaca';
                    echo '<br />';
                    if ($hobi1==='menulis' AND $hobi2==='membaca') {
                        echo 'Hobinya menulis dan membaca.';
                    } else {
                        echo 'Hobinya tidak menulis dan membaca, mungkin menulis saja atau membaca saja atau tidak keduanya.';
                    }

                    $musik1 = 'pop';
                    $musik2 = 'rock';
                    echo '<br />';
                    if ($musik1==='pop' OR $musik2==='rock') {
                        echo 'Hobinya musik pop saja atau rock saja atau keduanya.';
                    } else {
                        echo 'Hobinya bukan musik pop atau rock, mungkin dangdut.';
                    }

                    ?>
                </li>
                <li>
                    SWITCH - CASE
                    <br />
                    <?php
                    switch ($umur_dina) {
                        case 10:
                            $info_umur = 'Umur dina 10 tahun.';
                            break;
                        case 20:
                            $info_umur = 'Umur dina 20 tahun.';
                            break;
                        case 30:
                            $info_umur = 'Umur dina 30 tahun.';
                            break;
                        
                        default:
                            $info_umur = 'Umur dina tidak 10, 20, 30 tahun.';
                            break;
                    }
                    echo $info_umur;
                    ?>
                </li>
            </ul>


            <h2><?php echo $judul_perulangan; ?></h2>

            <ul>
                <li>
                    FOR
                    <br />
                    <?php
                    //Untuk membuat angka kelipatan 1
                    echo 'Contoh: '; 
                    for ($i=1;$i<=10;$i++) {
                        echo $i.' ';
                    }
                    echo '<br />';
                    //Untuk membuat angka kelipatan 2
                    echo 'Contoh: '; 
                    for ($i=1;$i<=10;$i+=2) {
                        echo $i.' ';
                    }
                    ?>
                </li>
                <li>
                    FOREACH
                    <br />
                    <?php
                    /*
                    Untuk mengekstrak array
                    Format:
                    foreach ($array as $value) {
                        kode yang akan dieksekusi;
                    }
                    atau:
                    foreach ($array as $index=>$value/$arraychild) {
                        kode yang akan dieksekusi;
                    }
                    */

                    $arr_warna = array('merah','kuning','biru','hijau');
                    echo 'Warna: '; 
                    foreach ($arr_warna as $value) {
                         # code...
                        echo $value.' ';
                    }
                    ?>
                </li>
                <li>
                    WHILE
                    <br />

                    <?php
                    /*
                    Format:
                    while (kondisi jika masih benar) {
                        kode yang akan dieksekusi;
                    }
                    */
                    echo 'Angka: ';
                    $i = 5;
                    while ($i <= 10) {
                        echo $i.' ';

                        $i++;
                    }
                    ?>
                </li>
            </ul>

            <h2><?php echo $judul_fungsi_bawaan; ?></h2>

            <ul>
                <li>
                    str_replace
                    <br />
                    <?php
                    //str_replace digunakan untuk mereplace string
                    $data = 'Rumah saya di surabaya';

                    echo 'Data1: '.$data;
                    echo '<br />';
                    echo 'Data2: '.str_replace('surabaya', 'malang', $data);

                    echo '<br />';
                    ?>
                </li>
                <li>
                    strlen
                    <br />
                    <?php
                    //strlen digunakan untuk menghitung jumlah karakter dalam string
                    $data = 'Rumah saya di surabaya';

                    echo 'Data1: '.$data;
                    echo '<br />';
                    echo 'Jumlah karakter: '.strlen($data);

                    echo '<br />';
                    ?>
                </li>
                <li>
                    strtoupper
                    <br />
                    <?php
                    //strtoupper digunakan untuk menjadikan huruf besar semua
                    $data = 'Rumah saya di surabaya';

                    echo 'Data1: '.$data;
                    echo '<br />';
                    echo 'Hasil: '.strtoupper($data);

                    echo '<br />';
                    ?>
                </li>
                <li>
                    referensi fungsi bawaan PHP lainnya:
                    <br />
                    https://www.php.net/manual/en/ref.strings.php
                    <br />
                    https://www.w3schools.com/php/default.asp
                    <br />
                    dll
                </li>
            </ul>

            <h2><?php echo $judul_fungsi_sediri; ?></h2>

            <?php
            /*
            Format:
            function namaFungsi() {
                //kode yang dieksekusi
            }
            function namaFungsi(var1,var2,dst) {
                //kode yang dieksekusi
            }
            */
            ?>

            <ul>
                <li>
                    Membuat fungsi untuk menghitung
                    <br />
                    <?php
                    function penambahan($var1,$var2) {
                        $hasil = $var1 + $var2;
                        return $hasil;
                    }

                    $a = 3;
                    $b = 7;

                    echo 'Hasil '.$a.'+'.$b.'= '.penambahan($a, $b);
                    ?>
                </li>
                <li>
                    Membuat fungsi menambahkan string
                    <br />
                    <?php
                    function namalengkap($var1) {
                        $hasil = 'Nama lengkap saya Rudi '.$var1;
                        return $hasil;
                    }

                    $namabelakang = 'Silalahi';

                    echo 'Hasil : '.namalengkap($namabelakang);
                    ?>
                </li>
            </ul>

        </div>        

    </body>
</html>
