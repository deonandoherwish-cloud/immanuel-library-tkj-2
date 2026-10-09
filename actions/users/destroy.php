<?php
if(isset($_GET['id'])): {
    $id = $_GET['id'];
    print_r("pengguna id $id dihapus");
}
else:{
    echo "id pengguna tidak ditemukan";
}
endif;