<script>
    let bookNow;

    $(document).ready(function() {
        $('.btn_show_more_less').hide();
        let detailImageCount = "{{ count($detailImages) }}";

        if (detailImageCount > 4) {
            $('.btn_show_more_less').show();
        }

        $('.special_dish_inner .villa_detail_images').slice(0, 4).addClass('shown');
        $('.special_dish_inner .villa_detail_images').not('.shown').hide();
        $('.btn_show_more_less').on('click', function() {
            $('.special_dish_inner .villa_detail_images').not('.shown').toggle(300);
            $(".more_or_less_content").toggle('slow');


        });



        bookNow = (villaId) => {
            console.log("selected villa  id : " + villaId);
            let urlToRedirect = "{{ route('page.contact_us') }}" + "?villaId=" + villaId;
            console.log(urlToRedirect);
            window.location = urlToRedirect;

        }


    })
</script>
