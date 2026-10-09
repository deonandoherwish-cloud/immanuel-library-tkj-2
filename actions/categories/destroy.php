<?php
if(isset($_GET['id'])): {
    $id = $_GET['id'];
    print_r("kategori id $id dihapus");
}
else:{
    echo "id kategori tidak ditemukan";
}
endif;