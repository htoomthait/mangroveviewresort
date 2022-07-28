
<section class="get_contact_area">
    <div class="container">
        <div class="row get_contact_inner">
            <div class="col-md-6">
                <div class="left_ex_title">
                    <h2>get in <span>touch</span></h2>
                </div>
                <form class="contact_us_form row m0" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    @csrf
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name *"
                            required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email *"
                            required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="number" name="phone"
                            placeholder="Phoen no.">
                    </div>
                    <div class="form-group col-md-12">
                        <select class="form-control select2RoomType" name="room_type" id="ddlRoomType"
                            class="contact_us" style="height:54px;">
                            <option value="">--- Please select a room type ---</option>
                            @foreach ($roomTypes as $roomType)

                                <option value="{{$roomType['room_name']}}">
                                    {{$roomType['room_name']}} |
                                    {{$roomType['num_of_person']}} persons |
                                    {{$roomType['original_price']}} MMK
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="txt_check_in_checkout_date_range"
                            id="txt_check_in_checkout_date_range" placeholder="Checkin / Checkout date range" />
                        <input type="hidden" name="check_in_date" id="checkInDate" />
                        <input type="hidden" name="check_out_date" id="checkOutDate" />
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" style="text-transform:none;" name="message" id="message" rows="1"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit" id="btn_submit" class="btn submit_btn form-control">submit
                            now</button>
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
                                <p>No. (3) Ward, Shwe Thaung Yan Road, Shwe Thaung Yan Township,<br /> Pathein
                                    District,<br /> Ayeyarwady Region, Myanmar.</p>
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
                                <a href="#">(+95) 9 881 777944</a>
                                <a href="#">
                                    (+95) 9 881 222207
                                    <span class="badge badge-primary">hotline</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<div class="loader"></div>

@push('page_js')

    <script>
        let contactUsFormSubmissinValidationStatus = null;
        let submitContactUsForm = null;



        $(document).ready(function() {
            $(".select2RoomType").select2();

            $("#txt_check_in_checkout_date_range").daterangepicker({
                minDate: moment()
            });





            $("#txt_check_in_checkout_date_range").val('check in / out date range');

            $("#txt_check_in_checkout_date_range").on('change', function() {
                var checkInDate = $('#txt_check_in_checkout_date_range').data('daterangepicker').startDate
                    ._d;
                var checkOutDate = $('#txt_check_in_checkout_date_range').data('daterangepicker').endDate
                    ._d;

                let formattedCheckInDate = moment(checkInDate).format('DD-MMM-YYYY');
                let formattedCheckOutDate = moment(checkOutDate).format('DD-MMM-YYYY');

                $("#checkInDate").val(formattedCheckInDate);
                $("#checkOutDate").val(formattedCheckOutDate);

            });



            $("#contactForm").on('submit', async function(e) {
                e.preventDefault();


                await submitContactUsForm();






            })


            contactUsFormSubmissinValidationStatus = $("form#contactForm").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    name: {
                        required: "Name is required for contact us form submission",
                        minlength: "Name should have a least 3 characters."
                    },
                    email: {
                        required: "Email is required for contact us form submission",
                        email: "Input should be email format."
                    },
                    message: {
                        required: "Please enter message to submit",
                        minlength: "Message should have a least 5 characters."
                    }
                }
            })

            submitContactUsForm = async () => {
                setTimeout(() => {
                    $(".loader").css('display', 'block');

                }, 300);






                let dataToPost = $("#contactForm").serialize();

                if (contactUsFormSubmissinValidationStatus.form()) {

                    await $.ajax({
                        url: "{{ route('submit.contact_us_form') }}",
                        method: "POST",
                        dataType: "json",
                        data: dataToPost,
                        beforeSend: function() {

                        },
                        success: function(resp) {

                            if (resp.status == 'success') {
                                Swal.fire({
                                    title: "Contact Us Form Submission",
                                    icon: "success",
                                    width: '35%',
                                    text: resp.messages.request_msg
                                });

                                $("#ddlRoomType").val('').trigger('change');
                                $("form#contactForm").trigger('reset');
                            }
                        },
                        error: function(resp) {

                            if (resp.status == '422') {
                                Swal.fire({
                                    title: "Contact Us Form Submission",
                                    icon: "warning",
                                    width: '35%',
                                    text: "Your contact us form input(s) is invalid!"
                                })

                            } else {
                                Swal.fire({
                                    title: "Contact Us Form Submission",
                                    icon: "error",
                                    width: '35%',
                                    text: "Your contact us form cannot be submitted!"
                                });
                            }
                        },
                        complete: function() {
                            setTimeout(() => {
                                $(".loader").css('display', 'none');

                            }, 300);
                        }

                    });



                }

                setTimeout(() => {
                    $(".loader").css('display', 'none');

                }, 300);
            }
        });
    </script>
@endpush
