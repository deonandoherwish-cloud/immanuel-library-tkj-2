<?php
if(isset($_GET['id'])): {
    $id = $_GET['id'];
    print_r("penulis id $id dihapus");
}
else:{
    echo "id penulis tidak ditemukan";
}
endif;