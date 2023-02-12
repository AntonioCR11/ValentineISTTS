@if (Session::has('errorMessage'))
    <div class="d-flex justify-content-center w-100" id="error_alert">
        <div class="alert alert-danger w-25 mx-auto text-center" style="position: fixed;top:3%;" id= "error-alert">
            {{Session::get('errorMessage')}}
        </div>
    </div>

    <script>
        $("#error_alert").fadeOut(2500,"swing",function(){
            $("#error_alert").html("");
        });
    </script>
@elseif (Session::has('successMessage'))
    <div class="d-flex justify-content-center w-100" id="success_alert">
        <div class="alert alert-success w-25 mx-auto text-center" style="position: fixed;top:3%;" id= "success-alert">
            {{Session::get('successMessage')}}
        </div>
    </div>
    <script>
        $("#success_alert").fadeOut(2500,"swing",function(){
            $("#success_alert").html("");
        });
    </script>
@endif
