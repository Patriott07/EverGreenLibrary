<?php
namespace App\Libraries;

class sweetalert_library{
    public function sucAndRedirect($msg, $title, $url){
        echo "<script>
            Swal.fire({
                title: '$title',
                text: '$msg',
                icon: 'success',
                confirmButtonText: 'Close here'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '$url'; 
                }
            });
          </script>";
    }
}
?>