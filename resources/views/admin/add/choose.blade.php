
<!DOCTYPE html>
<html lang="ko">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
  <link rel="stylesheet" href="https://www.susirecipe.com/css/susirecipe.css">

</head>

<body class="">
<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <a href="{{url('/admin/add/create_std') }}" class="btn btn-light btn-block" style="white-space: inherit!important">
                <div>
                    <span style="padding-left: 16px; padding-right: 16px; vertical-align: middle;">
                        <div class="">
                            <div class="">
                                <span class=""> 학생회원 가입 &gt; </span>
                            </div>
                        </div>
                    </span>
                </div>
            </a>

            <a href="{{url('/admin/add/create_mento') }}" class="btn btn-light btn-block" style="white-space: inherit!important;">
                <div>
                    <span style="padding-left: 16px; padding-right: 16px; vertical-align: middle;">
                        <div class="">
                            <div class="">
                                <span class=""> 멘토회원 가입 &gt; </span>
                            </div>
                        </div>
                    </span>
                </div>
            </a>
 
        </div>
    </div>
    

</div>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.susirecipe.com/js/helper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/localization/messages_ko.js"></script>
<script>
$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})
</script>
</body>

</html>