<script> 
    let bookNow = (villaId) => {
        console.log("selected villa  id : " + villaId);
        let urlToRedirect = "{{url('/')}}"+"/contact-us?villaId="+villaId;
        console.log(urlToRedirect);
        window.location = urlToRedirect;

    }
</script>