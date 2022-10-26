<script>
    let fetchResult = null;



    let fetchGalleryImage = async (gallery_name) => {
        fetchResult = await $.ajax({
            url: "{{ route('get.gallery_images') }}",
            method: 'GET',
            dataType: "json",
            data: {
                "gallery_name": gallery_name
            }
        });
        console.log(fetchResult.data);
        return fetchResult.data;
    }


    let setGalleryImages = async (gallery_name) => {
        let responseData = null;
        switch (gallery_name) {
            case 'all':
                responseData = await fetchGalleryImage('all');
                break;
            case 'resort':
                responseData = await fetchGalleryImage('resort');
                break;
            case 'villa':
                responseData = await fetchGalleryImage('villa');
                break;
            case 'activity':
                responseData = await fetchGalleryImage('activity');
                break;
            case 'garden':
                responseData = await fetchGalleryImage('garden');
                break;
            case 'restaurant':
                responseData = await fetchGalleryImage('restaurant');
                break;
            case 'beach and other outdoors':
                responseData = await fetchGalleryImage('beach and other outdoors');
                break;

            default:
                responseData = await fetchGalleryImage('all');
                break;
        }


    }





    $(document).ready(async function() {
        console.log("This is gallery page");


    });
</script>
