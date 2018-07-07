<script>
    $(document).ready(function(){
        swal({
            title: "Sukses",
            text :"Berhasil menambahkan ke keranjang",
            type: "success",
            showCancelButton:true,
            confirmButtonColor:"#63BC81",
            confirmButtonText:"Konfirmasi Pesanan",
            cancelButtonText:"Lanjutkan belanja",
            html :true
        }, function (isConfirm){
            if (isConfirm) {
                window.location ='/cart';
            }
        });
    });

</script>
