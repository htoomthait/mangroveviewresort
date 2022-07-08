<section class="get_contact_area">
    <div class="container">
        <div class="row get_contact_inner">
            <div class="col-md-6">
                <div class="left_ex_title">
                    <h2>get in <span>touch</span></h2>
                </div>
                <form class="contact_us_form row m0" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="number" name="number" placeholder="Phoen no.">
                    </div>
                    <div class="form-group col-md-12">                        
                        <select class="form-control select2RoomType" name="ddl_room_type" id="ddlRoomType" class="contact_us" style="height:54px;"> 
                            <option value="" >--- Please select a room type ---</option>
                            <option value="Single Deluxe Villa"  > Single Deluxe Villa | 2 persons | 149,000 mmk</option>
                            <option value="Duplex Room Villa"  > Duplex Room Villa | 2 persons | 149,000 mmk </option>
                            <option value="Duplex Sutie Villa"  > Duplex Suite Villa | 3 persons | 214,000 mmk </option>
                            <option value="Mangrove Suite Villa"  > Mangrove Suite Villa | 3 persons | 214,000 mmk </option>
                            <option value="Family Deluxe Villa"> Family Deluxe Villa | 4 persons | 298,000 mmk</option>
                            <option value="Jade Suite Villa"> Jade Suite Villa | 2 persons | 299,000 mmk</option>
                            <option value="Family Jade Suite Villa 4"> Family Jade Suite Villa | 4 persons | 398,000 mmk</option>
                            <option value="Faily Jade Suite Villa 8"> Faily Jade Suite Villa | 8 persons | 430,000 mmk</option>
                            <option value="Presidential Jade Suite Villa">Persidential Jade Suite Villa | 2 persons | 271,000 mmk </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <input 
                            type="text" 
                            class="form-control" 
                            name="txt_check_in_checkout_date_range"
                            id="txt_check_in_checkout_date_range" 
                            placeholder="Checkin / Checkout date range" />
                            <input type="hidden" name="checkinDate" id="checkInDate" />
                            <input type="hidden" name="checkOutDate" id="checkOutDate" />
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="right_contact_info">
                    <div class="contact_info_title">
                        <h3>Contact info</h3>
                        <p>Have any Queries? Let us know. We will clear it for you at the best.</p>
                    </div>
                    <div class="contact_info_list">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <h4>Graden</h4>
                                <p>No. (3) Ward, Shwe Thaung Yan Road, Shwe Thaung Yan Township,<br/> Pathein District,<br/> Ayeyarwady Region, Myanmar.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="media-body">
                                <h4>Email</h4>
                                <a href="#">sales@mangroviewresort.com</a>
                                <a href="#">reservations@mangroviewresort.com</a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h4>Phone</h4>
                                <a href="#">+95 9 881 777944</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</section>


@push('page_js')
    <script>
        $(document).ready(function(){
            $(".select2RoomType").select2();

            $("#txt_check_in_checkout_date_range").daterangepicker({
                autoUpdateInput: false,
                minDate : moment()
            });

            $("#txt_check_in_checkout_date_range").on('change', function(){
                var checkInDate = $('#txt_check_in_checkout_date_range').data('daterangepicker').startDate._d;
                var checkOutDate = $('#txt_check_in_checkout_date_range').data('daterangepicker').endDate._d;
                
                let formattedCheckInDate = moment(checkInDate).format('DD-MMM-YYYY');
                let formattedCheckOutDate = moment(checkOutDate).format('DD-MMM-YYYY');

                $("#checkInDate").val(formattedCheckInDate);
                $("#checkOutDate").val(formattedCheckOutDate);
                
                // console.log(formattedCheckInDate, formattedCheckOutDate);
            })
        })
    </script>
@endpush