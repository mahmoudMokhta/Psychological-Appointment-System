
<div id=success_model class="modal fade " role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <a class="modal-close close" href="#" data-dismiss="modal">&times;</a>
            <div class="page-body">
                <div class="head">
                    <h3 class="mb-3" style="margin-top:5px;">{{__('success_login')}}</h3>
                    <p class="mb-4">
                        <a class="text-primary hoverable-text" href="#">
                            &nbsp;  {{__('update_profile')}} &nbsp;
                        </a>
                        {{__('you_can_access')}}

                    </p>
                </div>

                <h1 style="text-align:center;">
                    <div class="checkmark-circle">
                        <div class="background"></div>
                        <div class="checkmark draw"></div>
                    </div>
                </h1>

            </div>
        </div>
    </div>

</div>


@if(request()->has('register') == "Done")
    <script>
        window.onload = function () {
            $('#success_model').modal('show');
        }
    </script>

@endif
