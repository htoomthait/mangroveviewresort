<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
    integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script>
    let fetchResult = null;





    // API Fetch
    let fetchGalleryImage = async (gallery_name) => {
        let fetchResult = null;
        try {
            fetchResult = await $.ajax({
                url: "{{ route('get.gallery_images') }}",
                method: 'GET',
                dataType: "json",
                crossDomain: true,
                data: {
                    "gallery_name": gallery_name
                }
            });
        } catch (error) {
            console.error("Error fetching gallery images:", error);
            return []; // Return null or handle the error as needed
        }


        return fetchResult.data;
    }

    // Setting Image Gallery
    let setGalleryImages = async (gallery_name) => {


        await photoLoopingAtDom(gallery_name);
    }

    let photoLoopingAtDom = null;



    $(document).ready(function() {


        $("#gallery_page_gallery").tabs({
            active: 0
        })

        // Photo Setting At HTML DOM
        photoLoopingAtDom = async (galleryName) => {
            let responseData = null;
            $(".gallery_page_tabs li a.active").removeClass("active");

            $(`.gallery_page_tabs li a[href='#${galleryName}']`).addClass('active');




            let content = ``;
            $(".lightgallery").html("");

            // if ($(`#${galleryName}`).html() == "" || null || galleryName == 'all') {
            responseData = await fetchGalleryImage(galleryName);
            console.log(responseData);


            let galleryImages = responseData.images;
            let galleryThubmnails = responseData.thumbnail_images;

            galleryImages.map((gImage, index) => {


                // console.log(gImage);
                content += `
                        <div class="" >
                            <a href="{{ url('/${gImage}') }}" class="lightgallery" style="position: relative; display:block; width:100%; height: 100%;">
                                <img src="{{ url('/${galleryThubmnails[index]}') }}" alt="" style="position: relative; width:100%; display:block; height: 100%; object-fit: cover;">
                            </a>

                        </div>
                    `;
            });

            console.log(content);



            // $(`#${galleryName}`).html(`${content}`);

            $("#" + galleryName).html(`${content}`);

            // $("#all").html(`${content}`);

            $('.lightgallery a').simpleLightbox({
                overlay: true
            })
            // }






        }

        setGalleryImages('all');

        $('.lightgallery a').simpleLightbox({
            overlay: true
        });

    })
</script>
