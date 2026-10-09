<?php
if(isset($_GET['id'])): {
    $id = $_GET['id'];
    print_r("buku id $id dihapus");
}
else:{
    echo "id buku tidak ditemukan";
}
endif;