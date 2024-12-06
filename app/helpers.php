<?php

use App\Models\section;

function get_section_data($key)
{
    $data = section::where('post_as', $key)->first();
    if ($data) {
        return $data; // Kembalikan data jika ditemukan.
    } else {
        return null; // Kembalikan null jika tidak ada data.
    }
}

?>
