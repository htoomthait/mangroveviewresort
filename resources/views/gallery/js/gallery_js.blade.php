<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
    integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script>
    let fetchResult = null;





    // API Fetch
    let fetchGalleryImage = async (gallery_name) => {
        fetchResult = await $.ajax({
            url: "{{ route('get.gallery_images') }}",
            method: 'GET',
            dataType: "json",
            data: {
                "gallery_name": gallery_name
            }
        });

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

                galleryImages.map((gImage,index) => {


                    content += `
                        <div class="" >
                            <a href="{{url('/')}}/${gImage}">
                                <img src="{{url('/')}}/${galleryThubmnails[index]}" alt="" style="position: relative; width:100%;">
                            </a>

                        </div>
                    `;
                });

                console.log(content);



                $(`#${galleryName}`).html(`${content}`);

                $('.lightgallery a').simpleLightbox({ overlay : true })
            // }






        }

        setGalleryImages('all');

        $('.lightgallery a').simpleLightbox({ overlay : true });

    })
</script>
