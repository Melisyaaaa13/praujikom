$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    var alamat_kategori = 'api/kategori'

    $.ajax({
        url: alamat_artikel,
        method: "GET",
        dataType: "json",

        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {

                $("#isinya").append(
                    `
                   < div class = "nonloop-block-3 owl-carousel" >

                       <
                       div class = "text-center item mb-4" >
                       <
                       a href = "shop-single" > < img src = "{{asset('assets/pharma/images/haricuci.jpeg')}}"
                   alt = "Image"
                   width = "300" > < /a> <
                       h3 class = "text-dark" > < a href = "shop-single" > Hari Cuci Tangan Sedunia < /a></h3 >
                       <
                       /div>

                       <div class = "text-center item mb-4" >
                       <a href = "menjagamata"> <img src = "{{asset('assets/pharma/images/mata.jpg')}}" alt = "Image" width = "300"> </a> <
                       h3 class = "text-dark"> <a href = "menjagamata" > Cara sederhana menjaga mata </a></h3 >
                       </div>

                       <div class = "text-center item mb-4" >
                       <a href = "shop-single"> <img src = "{{asset('assets/pharma/images/donorrr.jpeg')}}" alt = "Image" width = "300"> < /a> <
                       h3 class = "text-dark"> <a href = "shop-single" > Donor Darah < /a></h3 >
                       </div>

                       <div class = "text-center item mb-4" >
                       <a href = "shop-single"> <img src = "{{asset('assets/pharma/images/janganpanik.jpeg')}}" alt = "Image"> < /a> <
                       h3 class = "text-dark"> <a href = "shop-single" > Jangan Panik ketika anak sakit < /a></h3>
                       </div>

                       </div>
                    `
                );

            });
        }
    });

});
