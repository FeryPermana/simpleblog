<?php
function increment($data, $loop)
{
    return $data->firstItem() + $loop->index;
}


function formatTanggalIndo($date, $type = null, $year = null)
{
    if (!$date) {
        return '-';
    }

    if ($type == 'singkat') {
        $BulanIndo = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
    } else {
        $BulanIndo = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    }

    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl = substr($date, 8, 2);
    if ($year == "kosong") {
        $result = $tgl . ' ' . $BulanIndo[(int) $bulan - 1];
    } else {
        $result = $tgl . ' ' . $BulanIndo[(int) $bulan - 1] . ' ' . $tahun;
    }
    return $result;
}
