
<!DOCTYPE html>
<html lang="ko">
<head>
  <!-- 네이버 웹 마스터 도구 -->
  <!-- <meta name="naver-site-verification" content="f401f2054531f3591b4221839857fb4da18a3ae7"/>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>수시레시피</title> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
  <link rel="stylesheet" href="https://www.susirecipe.com/css/susirecipe.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src='https://www.googletagmanager.com/gtag/js?id=UA-118375604-1'></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-118375604-1');
  </script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.3/dist/css/bootstrap-select.min.css">
</head>

<body class="">

<main>
<!-- Modal -->
<div class="modal fade" id="postcodeModal" tabindex="-1" role="dialog" aria-labelledby="postcodeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postcodeModalLabel">우편번호 찾기</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="daum_postcode" style="width:100%;height:100%;"></div>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">학생회원 가입</div>

                <div class="card-body">
                    <form method="get" action="http://localhost/admin/create" aria-label="학생회원 가입">
                        <input type="hidden" name="_token" value="NYu41j467I8bYU3ikg2rYUb17oLF6IUe21hfN2Zj">
                        <h5 class="card-title">로그인 정보</h5>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">이메일</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">비밀번호</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">비밀번호 확인</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
                        <hr>
                        <h5 class="card-title">기본 정보</h5>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">이름</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender-F" class="col-md-4 col-form-label text-md-right">성별</label>

                            <div class="col-md-6">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-light">
                                        <input type="radio" id="gender-F" name="gender" value="F" autocomplete="off" required> 여성
                                    </label>
                                    <label class="btn btn-light">
                                        <input type="radio" id="gender-M" name="gender" value="M" autocomplete="off" required> 남성
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">생년월일</label>

                            <div class="col-md-6">
                                <input id="birth" type="date" class="form-control" name="birth" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">주소</label>

                            <div class="col-md-6">
                                <div class="form-inline mb-1">
                                    <div class="mr-auto">
                                        <input id="postcode" type="text" class="form-control" placeholder="우편번호" maxlength="7" size="9" name="postcode" readonly required>
                                    </div>
                                    <button type="button" rel="js-postcode" class="btn btn-outline-secondary">우편번호 찾기</button>
                                </div>
                                <input id="address" type="text" class="form-control mb-1" placeholder="우편번호 찾기를 눌러주세요" name="address" readonly required>
                                <input id="address2" type="text" class="form-control" placeholder="상세주소" name="address2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">핸드폰번호</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control" name="mobile" required>
                            </div>
                        </div>

                        <hr>
                        <h5 class="card-title">학교 정보</h5>

                        <div class="form-group row">
                            <label for="school_id" class="col-md-4 col-form-label text-md-right">재학 고교</label>

                            <div class="col-md-6">
                                <select id="school_id" class="form-control bootstrap-select" data-live-search="true" name="school_id">
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="grade-1" class="col-md-4 col-form-label text-md-right">학년</label>

                            <div class="col-md-6">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-light active">
                                        <input type="radio" id="grade-1" name="grade" value="1" autocomplete="off"> 1학년
                                    </label>
                                    <label class="btn btn-light">
                                        <input type="radio" id="grade-2" name="grade" value="2" autocomplete="off"> 2학년
                                    </label>
                                    <label class="btn btn-light">
                                        <input type="radio" id="grade-3" name="grade" value="3" autocomplete="off"> 3학년
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_type" class="col-md-4 col-form-label text-md-right">계열</label>

                            <div class="col-md-6">
                                <select id="school_type" class="form-control bootstrap-select" name="school_type" required>
                                    <option value="L">인문계</option>
                                    <option value="N">자연계</option>
                                    <option value="A">예체능</option>
                                    <option value="E">전문계</option>
                                    <option value="X">해당 없음</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                        <h5 class="card-title">진로 희망사항</h5>

                        <div class="row">
                            <label for="favschool1" class="col-md-4 col-form-label text-md-right">1지망 대학/학과</label>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <select id="favschool1" class="form-control bootstrap-select" data-size="5" data-live-search="true" name="favschool[]">
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <select id="favmajor1" class="form-control bootstrap-select" data-size="5" data-live-search="true" name="favmajor[]">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="favschool2" class="col-md-4 col-form-label text-md-right">2지망 대학/학과</label>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <select id="favschool2" class="form-control bootstrap-select" data-size="5" data-live-search="true" name="favschool[]">
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <select id="favmajor2" class="form-control bootstrap-select" data-size="5" data-live-search="true" name="favmajor[]">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="favschool3" class="col-md-4 col-form-label text-md-right">3지망 대학/학과</label>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <select id="favschool3" class="form-control bootstrap-select" data-size="5" data-live-search="true" name="favschool[]">
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <select id="favmajor3" class="form-control bootstrap-select" data-size="5" data-live-search="true" name="favmajor[]">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wish_ment" class="col-md-4 col-form-label text-md-right">수시레시피, 튜터에게 바라는 점</label>

                            <div class="col-md-6">
                                <textarea id="wish_ment" class="form-control" name="wish_ment" rows="2"></textarea>
                            </div>
                        </div>

                        <hr>
                        <h5 class="card-title">약관</h5>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">이용약관</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">개인정보 취급방침</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10">
                                <label><input type="checkbox" class="mr-3" required>본인은 이용약관과 개인정보 취급방침을 읽었으며, 이에 동의합니다.</label>
                            </div>
                        </div>


                        <div class="form-group row pt-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    가입 완료
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<footer class="d-flex flex-column flex-md-row bg-white border-top pb-3" style="bottom: 0px !important;position: fixed !important;width: 100% !important;z-index: 2 !important;">
    <div class="container">
        <div class="footer-info pt-3 row">
            <div class="col-md-9 mb-2">
                <span>수시레시피 &copy; Wesh</span>
                <a data-toggle="collapse" href="#collapseCopyright" class="d-sm-none">사업자 정보확인</a>
                <div class="collapse d-sm-block" id="collapseCopyright">
                    <span>대표 : 김준호</span>
                    <span>사업자등록번호 : 860-40-00368</span>
                    <span>통신판매업신고번호 : <a class="footer-info__link" href="http://www.ftc.go.kr/info/bizinfo/communicationViewPopup.jsp?wrkr_no=8604000368" target="_blank">제2018-성남중원-0243호</a></span><br>
                    <span>본점 : 경기도 성남시 중원구 자혜로54번길 24-1</span>
                    <a href="https://www.susirecipe.com/branches"><span>지점안내</span></a>
                    <span>전화 : <a class="footer-info__link" href="tel:+82-10-6860-7588">+82-10-6860-7588</a> , <a class="footer-info__link" href="tel:+82-10-2463-5485">+82-10-2463-5485</a></span>
                    <span>이메일 : <a class="footer-info__link" href="mailto:lgqwert@naver.com">lgqwert@naver.com</a></span>
                </div>
            </div>
            <div class="col-md-3 footer-sns">
                <span><a class="footer-sns__link xi-facebook" href="https://www.facebook.com/susirecipe" target="_blank"></a></span>
                <span><a class="footer-sns__link xi-instagram" href="https://www.instagram.com/susirecipe" target="_blank"></a></span>
                <span><a class="footer-sns__link xi-youtube-play" href="https://www.youtube.com/channel/UCAZpW_m3tEyiFh7VFpov3sQ" target="_blank"></a></span>
            </div>
        </div>
    </div>
</footer>    
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
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
<script>
var daumPostcode;

$(function() {
    $("[rel='js-postcode']").click(function() {
        // $("#daum_postcode_container").show();
        $('#postcodeModal').modal('show');
        $('#postcodeModal').on('shown.bs.modal', function (e) {
            if (!daumPostcode) {
                daumPostcode = new daum.Postcode({
                    width: $("div[id='daum_postcode']").width(),
                    oncomplete: function(data) {
                        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                        // 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
                        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                        var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
                        var extraRoadAddr = ''; // 도로명 조합형 주소 변수

                        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                        if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                            extraRoadAddr += data.bname;
                        }
                        // 건물명이 있고, 공동주택일 경우 추가한다.
                        if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                        if(extraRoadAddr !== ''){
                            extraRoadAddr = ' (' + extraRoadAddr + ')';
                        }
                        // 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
                        if(fullRoadAddr !== ''){
                            fullRoadAddr += extraRoadAddr;
                        }

                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                        document.getElementById('postcode').value = data.zonecode; //5자리 새우편번호 사용
                        document.getElementById('address').value = fullRoadAddr;
                        document.getElementById('address2').value = '';
                    },
                    onclose: function(state) {
                        //state는 우편번호 찾기 화면이 어떻게 닫혔는지에 대한 상태 변수 이며, 상세 설명은 아래 목록에서 확인하실 수 있습니다.
                        if(state === 'FORCE_CLOSE'){
                            //사용자가 브라우저 닫기 버튼을 통해 팝업창을 닫았을 경우, 실행될 코드를 작성하는 부분입니다.
                        } else if(state === 'COMPLETE_CLOSE'){
                            //사용자가 검색결과를 선택하여 팝업창이 닫혔을 경우, 실행될 코드를 작성하는 부분입니다.
                            //oncomplete 콜백 함수가 실행 완료된 후에 실행됩니다.
                            // $("#daum_postcode_container").hide();
                            $('#postcodeModal').modal('hide');
                            $("#address2").focus();
                        }
                    }
                });
            }

            daumPostcode.embed(document.querySelector('#daum_postcode'));
        });
    });
});
</script>
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
<script>
var getResources = function(event, url, keyword, element) {
    if (keyword.length > 1) {
        $.ajax({
            url: url+"?q="+keyword,
            type: "GET",
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
            success: function(data, status, xhr) {
                if (xhr.status == 200) {
                    if (element.attr('multiple') == 'multiple') {
                        $("option:not(:selected)", element).remove();
                    } else {
                        element.empty();
                    }
                    

                    $.each(data.results, function(k, v) {
                        element.append($('<option>', {
                            value: v.id,
                            text: v.name + (v.desc ? '('+v.desc+')' :'')
                        }));
                    });
                }

                element.selectpicker('refresh');
            },
            error: function (xhr, status, thrown) {
                var data = $.parseJSON(xhr.responseText);
                alert(data.msg);
            }
        });
    }
};

$(function() {
    $('.bootstrap-select').selectpicker();

    $('#school_id').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/schools', $(this).val(), $("#school_id"));
    }, 300));

    $('#favschool1').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/universities', $(this).val(), $("#favschool1"));
    }, 300));

    $('#favschool2').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/universities', $(this).val(), $("#favschool2"));
    }, 300));

    $('#favschool3').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/universities', $(this).val(), $("#favschool3"));
    }, 300));

    $('#favmajor1').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/majors', $(this).val(), $("#favmajor1"));
    }, 300));

    $('#favmajor2').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/majors', $(this).val(), $("#favmajor2"));
    }, 300));

    $('#favmajor3').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/majors', $(this).val(), $("#favmajor3"));
    }, 300));
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.3/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.3/dist/js/i18n/defaults-ko_KR.min.js"></script>
</body>

</html>