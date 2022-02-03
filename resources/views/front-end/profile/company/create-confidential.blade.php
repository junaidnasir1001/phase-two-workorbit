@extends('front-end.layouts.app')
@section('content')
<section class="space-ptb">
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
                <form class="mt-4" id="form">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <div class="my-custom-text-field">
                                <input type="number" class="my-custom-input" value="{{$user->registration_no}}" name="registrationNo">
                                <label class="my-custom-label">Registration No.</label>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="my-custom-text-field">
                                <input type="number" class="my-custom-input" value="{{$user->vat_no}}" name="vatNo">
                                <label class="my-custom-label">VAT Number</label>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 ob-btn-login">
                            <button class="btn btn-primary " >Save</button>
                        </div>
@csrf
                    </div>
                </form>
                <div class="ob-sign-margin-top mt-md-0 forgot-pass ob-sign-link-href">
                    <p class="mt-1"><i class="fa fa-arrow-left"></i><a onclick="history.back()"> Back</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script>
        $(document).ready(function (){
            $('#form').validate({
                rules: {
                    registrationNo:{
                        required:true,
                    },
                    vatNo:{
                        required:true,
                    },
                },
                messages: {
                    registrationNo:'Registration No is required',
                    vatNo:'Vat No Number is required',
                },
            });

            $('#form').on('submit', function (e) {
                e.preventDefault();
                // check if the input is valid using a 'valid' property
                if (!$('#form').valid() ) {
                    return false;
                }
                let id = "{{auth()->id()}}"
                let route = "{{route('confidential.update',['id'=>':id'])}}";
                route = route.replace(':id', id);
                console.log(route)
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: new FormData(this),
                    contentType: false,
                    data_type: 'json',
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        loader();
                    },
                    success: function (response) {

                        swal.close();
                        console.log(response)
                        alertMsg(response.message, response['status']);
                        // }


                    },
                    error: function (xhr, error, status) {
                        // console.log(xhr.responseJSON.errors.name[0])
                        swal.close();
                        var response = xhr.responseJSON;
                        // alertMsg(response.message, 'error');
                        alertMsg(response.message, 'error');
                    }
                });
            });
        })
    </script>
@endsection
