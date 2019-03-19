<!DOCTYPE html>
<html lang="ko">
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
  <link rel="stylesheet" href="https://www.susirecipe.com/css/susirecipe.css">
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
                <div class="card-header">회원 가입</div>

                <div class="card-body">
                    <form method="get" action="http://localhost/admin/create" aria-label="학생회원 가입">
                        <input type="hidden" name="_token" value="phtUWWrZQ09lcBfWZTRaGwfLrzJuvdnIlGCX8uCg">
                        <h5 class="card-title">로그인 정보</h5>

                        
                        <div class="form-group row">

</div>
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
                            <label for="school_id" class="col-md-4 col-form-label text-md-right">출신 고교</label>

                            <div class="col-md-6">
                                <select id="school_id" class="form-control bootstrap-select" data-live-search="true" name="school_id">
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university_id" class="col-md-4 col-form-label text-md-right">대학교</label>

                            <div class="col-md-6">
                                <select id="university_id" class="form-control bootstrap-select" data-live-search="true" name="university_id">
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="entry_year" class="col-md-4 col-form-label text-md-right">입학년도(학번)</label>

                            <div class="col-md-6">
                                <!-- <input type="text" id="entry_year" class="form-control" name="entry_year"> -->
                                <select id="entry_year" class="form-control bootstrap-select" name="entry_year">
                                                                        <option value="2020">2020년도</option>
                                                                        <option value="2019">2019년도</option>
                                                                        <option value="2018">2018년도</option>
                                                                        <option value="2017">2017년도</option>
                                                                        <option value="2016">2016년도</option>
                                                                        <option value="2015">2015년도</option>
                                                                        <option value="2014">2014년도</option>
                                                                        <option value="2013">2013년도</option>
                                                                        <option value="2012">2012년도</option>
                                                                        <option value="2011">2011년도</option>
                                                                        <option value="2010">2010년도</option>
                                                                        <option value="2009">2009년도</option>
                                                                        <option value="2008">2008년도</option>
                                                                        <option value="2007">2007년도</option>
                                                                        <option value="2006">2006년도</option>
                                                                        <option value="2005">2005년도</option>
                                                                        <option value="2004">2004년도</option>
                                                                        <option value="2003">2003년도</option>
                                                                        <option value="2002">2002년도</option>
                                                                        <option value="2001">2001년도</option>
                                                                        <option value="2000">2000년도</option>
                                                                    </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="semester" class="col-md-4 col-form-label text-md-right">학년(학기)</label>

                            <div class="col-md-6">
                                <select id="semester" class="form-control bootstrap-select" name="semester">
                                                                        <option value="1">1학년 1학기</option>
                                                                        <option value="2">1학년 2학기</option>
                                                                        <option value="3">2학년 1학기</option>
                                                                        <option value="4">2학년 2학기</option>
                                                                        <option value="5">3학년 1학기</option>
                                                                        <option value="6">3학년 2학기</option>
                                                                        <option value="7">4학년 1학기</option>
                                                                        <option value="8">4학년 2학기</option>
                                                                        <option value="9">5학년 1학기</option>
                                                                        <option value="10">5학년 2학기</option>
                                                                        <option value="11">6학년 1학기</option>
                                                                        <option value="12">6학년 2학기</option>
                                                                    </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="major_id" class="col-md-4 col-form-label text-md-right">주전공학과</label>

                            <div class="col-md-6">
                                <select id="major_id" class="form-control bootstrap-select" data-live-search="true" name="major_id">
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="second_major_id" class="col-md-4 col-form-label text-md-right">복수전공</label>

                            <div class="col-md-6">
                                <select id="second_major_id" class="form-control bootstrap-select" data-live-search="true" name="second_major_id">
                                </select>
                            </div>
                        </div>

                        <hr>
                        <h5 class="card-title">멘토링 정보</h5>

                        <div class="form-group row">
                            <label for="wish_area" class="col-md-4 col-form-label text-md-right">컨설팅 희망지역</label>

                            <div class="col-md-6">
                                <select id="wish_area" class="form-control bootstrap-select" data-live-search="true" name="wish_area[]" multiple="multiple">
                                                                <option value="1">강원도</option>
                                                                <option value="2">강원도 강릉시</option>
                                                                <option value="3">강원도 고성군</option>
                                                                <option value="4">강원도 동해시</option>
                                                                <option value="5">강원도 삼척시</option>
                                                                <option value="6">강원도 속초시</option>
                                                                <option value="7">강원도 양구군</option>
                                                                <option value="8">강원도 양양군</option>
                                                                <option value="9">강원도 영월군</option>
                                                                <option value="10">강원도 원주시</option>
                                                                <option value="11">강원도 인제군</option>
                                                                <option value="12">강원도 정선군</option>
                                                                <option value="13">강원도 철원군</option>
                                                                <option value="14">강원도 춘천시</option>
                                                                <option value="15">강원도 태백시</option>
                                                                <option value="16">강원도 평창군</option>
                                                                <option value="17">강원도 홍천군</option>
                                                                <option value="18">강원도 화천군</option>
                                                                <option value="19">강원도 횡성군</option>
                                                                <option value="20">경기도</option>
                                                                <option value="21">경기도 가평군</option>
                                                                <option value="22">경기도 고양시</option>
                                                                <option value="23">경기도 고양시 덕양구</option>
                                                                <option value="24">경기도 고양시 일산동구</option>
                                                                <option value="25">경기도 고양시 일산서구</option>
                                                                <option value="26">경기도 과천시</option>
                                                                <option value="27">경기도 광명시</option>
                                                                <option value="28">경기도 광주시</option>
                                                                <option value="29">경기도 구리시</option>
                                                                <option value="30">경기도 군포시</option>
                                                                <option value="31">경기도 김포시</option>
                                                                <option value="32">경기도 남양주시</option>
                                                                <option value="33">경기도 동두천시</option>
                                                                <option value="34">경기도 부천시</option>
                                                                <option value="35">경기도 성남시</option>
                                                                <option value="36">경기도 성남시 분당구</option>
                                                                <option value="37">경기도 성남시 수정구</option>
                                                                <option value="38">경기도 성남시 중원구</option>
                                                                <option value="39">경기도 수원시</option>
                                                                <option value="40">경기도 수원시 권선구</option>
                                                                <option value="41">경기도 수원시 영통구</option>
                                                                <option value="42">경기도 수원시 장안구</option>
                                                                <option value="43">경기도 수원시 팔달구</option>
                                                                <option value="44">경기도 시흥시</option>
                                                                <option value="45">경기도 안산시</option>
                                                                <option value="46">경기도 안산시 단원구</option>
                                                                <option value="47">경기도 안산시 상록구</option>
                                                                <option value="48">경기도 안성시</option>
                                                                <option value="49">경기도 안양시</option>
                                                                <option value="50">경기도 안양시 동안구</option>
                                                                <option value="51">경기도 안양시 만안구</option>
                                                                <option value="52">경기도 양주시</option>
                                                                <option value="53">경기도 양평군</option>
                                                                <option value="54">경기도 여주시</option>
                                                                <option value="55">경기도 연천군</option>
                                                                <option value="56">경기도 오산시</option>
                                                                <option value="57">경기도 용인시</option>
                                                                <option value="58">경기도 용인시 기흥구</option>
                                                                <option value="59">경기도 용인시 수지구</option>
                                                                <option value="60">경기도 용인시 처인구</option>
                                                                <option value="61">경기도 의왕시</option>
                                                                <option value="62">경기도 의정부시</option>
                                                                <option value="63">경기도 이천시</option>
                                                                <option value="64">경기도 파주시</option>
                                                                <option value="65">경기도 평택시</option>
                                                                <option value="66">경기도 포천시</option>
                                                                <option value="67">경기도 하남시</option>
                                                                <option value="68">경기도 화성시</option>
                                                                <option value="69">경상남도</option>
                                                                <option value="70">경상남도 거제시</option>
                                                                <option value="71">경상남도 거창군</option>
                                                                <option value="72">경상남도 고성군</option>
                                                                <option value="73">경상남도 김해시</option>
                                                                <option value="74">경상남도 남해군</option>
                                                                <option value="75">경상남도 밀양시</option>
                                                                <option value="76">경상남도 사천시</option>
                                                                <option value="77">경상남도 산청군</option>
                                                                <option value="78">경상남도 양산시</option>
                                                                <option value="79">경상남도 의령군</option>
                                                                <option value="80">경상남도 진주시</option>
                                                                <option value="81">경상남도 창녕군</option>
                                                                <option value="82">경상남도 창원시</option>
                                                                <option value="83">경상남도 창원시 마산합포구</option>
                                                                <option value="84">경상남도 창원시 마산회원구</option>
                                                                <option value="85">경상남도 창원시 성산구</option>
                                                                <option value="86">경상남도 창원시 의창구</option>
                                                                <option value="87">경상남도 창원시 진해구</option>
                                                                <option value="88">경상남도 통영시</option>
                                                                <option value="89">경상남도 하동군</option>
                                                                <option value="90">경상남도 함안군</option>
                                                                <option value="91">경상남도 함양군</option>
                                                                <option value="92">경상남도 합천군</option>
                                                                <option value="93">경상북도</option>
                                                                <option value="94">경상북도 경산시</option>
                                                                <option value="95">경상북도 경주시</option>
                                                                <option value="96">경상북도 고령군</option>
                                                                <option value="97">경상북도 구미시</option>
                                                                <option value="98">경상북도 군위군</option>
                                                                <option value="99">경상북도 김천시</option>
                                                                <option value="100">경상북도 문경시</option>
                                                                <option value="101">경상북도 봉화군</option>
                                                                <option value="102">경상북도 상주시</option>
                                                                <option value="103">경상북도 성주군</option>
                                                                <option value="104">경상북도 안동시</option>
                                                                <option value="105">경상북도 영덕군</option>
                                                                <option value="106">경상북도 영양군</option>
                                                                <option value="107">경상북도 영주시</option>
                                                                <option value="108">경상북도 영천시</option>
                                                                <option value="109">경상북도 예천군</option>
                                                                <option value="110">경상북도 울릉군</option>
                                                                <option value="111">경상북도 울진군</option>
                                                                <option value="112">경상북도 의성군</option>
                                                                <option value="113">경상북도 청도군</option>
                                                                <option value="114">경상북도 청송군</option>
                                                                <option value="115">경상북도 칠곡군</option>
                                                                <option value="116">경상북도 포항시</option>
                                                                <option value="117">경상북도 포항시 남구</option>
                                                                <option value="118">경상북도 포항시 북구</option>
                                                                <option value="119">광주광역시</option>
                                                                <option value="120">광주광역시 광산구</option>
                                                                <option value="121">광주광역시 남구</option>
                                                                <option value="122">광주광역시 동구</option>
                                                                <option value="123">광주광역시 북구</option>
                                                                <option value="124">광주광역시 서구</option>
                                                                <option value="125">대구광역시</option>
                                                                <option value="126">대구광역시 남구</option>
                                                                <option value="127">대구광역시 달서구</option>
                                                                <option value="128">대구광역시 달성군</option>
                                                                <option value="129">대구광역시 동구</option>
                                                                <option value="130">대구광역시 북구</option>
                                                                <option value="131">대구광역시 서구</option>
                                                                <option value="132">대구광역시 수성구</option>
                                                                <option value="133">대구광역시 중구</option>
                                                                <option value="134">대전광역시</option>
                                                                <option value="135">대전광역시 대덕구</option>
                                                                <option value="136">대전광역시 동구</option>
                                                                <option value="137">대전광역시 서구</option>
                                                                <option value="138">대전광역시 유성구</option>
                                                                <option value="139">대전광역시 중구</option>
                                                                <option value="140">부산광역시</option>
                                                                <option value="141">부산광역시 강서구</option>
                                                                <option value="142">부산광역시 금정구</option>
                                                                <option value="143">부산광역시 기장군</option>
                                                                <option value="144">부산광역시 남구</option>
                                                                <option value="145">부산광역시 동구</option>
                                                                <option value="146">부산광역시 동래구</option>
                                                                <option value="147">부산광역시 부산진구</option>
                                                                <option value="148">부산광역시 북구</option>
                                                                <option value="149">부산광역시 사상구</option>
                                                                <option value="150">부산광역시 사하구</option>
                                                                <option value="151">부산광역시 서구</option>
                                                                <option value="152">부산광역시 수영구</option>
                                                                <option value="153">부산광역시 연제구</option>
                                                                <option value="154">부산광역시 영도구</option>
                                                                <option value="155">부산광역시 중구</option>
                                                                <option value="156">부산광역시 해운대구</option>
                                                                <option value="157">서울특별시</option>
                                                                <option value="158">서울특별시 강남구</option>
                                                                <option value="159">서울특별시 강동구</option>
                                                                <option value="160">서울특별시 강북구</option>
                                                                <option value="161">서울특별시 강서구</option>
                                                                <option value="162">서울특별시 관악구</option>
                                                                <option value="163">서울특별시 광진구</option>
                                                                <option value="164">서울특별시 구로구</option>
                                                                <option value="165">서울특별시 금천구</option>
                                                                <option value="166">서울특별시 노원구</option>
                                                                <option value="167">서울특별시 도봉구</option>
                                                                <option value="168">서울특별시 동대문구</option>
                                                                <option value="169">서울특별시 동작구</option>
                                                                <option value="170">서울특별시 마포구</option>
                                                                <option value="171">서울특별시 서대문구</option>
                                                                <option value="172">서울특별시 서초구</option>
                                                                <option value="173">서울특별시 성동구</option>
                                                                <option value="174">서울특별시 성북구</option>
                                                                <option value="175">서울특별시 송파구</option>
                                                                <option value="176">서울특별시 양천구</option>
                                                                <option value="177">서울특별시 영등포구</option>
                                                                <option value="178">서울특별시 용산구</option>
                                                                <option value="179">서울특별시 은평구</option>
                                                                <option value="180">서울특별시 종로구</option>
                                                                <option value="181">서울특별시 중구</option>
                                                                <option value="182">서울특별시 중랑구</option>
                                                                <option value="183">세종특별자치시</option>
                                                                <option value="184">울산광역시</option>
                                                                <option value="185">울산광역시 남구</option>
                                                                <option value="186">울산광역시 동구</option>
                                                                <option value="187">울산광역시 북구</option>
                                                                <option value="188">울산광역시 울주군</option>
                                                                <option value="189">울산광역시 중구</option>
                                                                <option value="190">인천광역시</option>
                                                                <option value="191">인천광역시 강화군</option>
                                                                <option value="192">인천광역시 계양구</option>
                                                                <option value="193">인천광역시 남동구</option>
                                                                <option value="194">인천광역시 동구</option>
                                                                <option value="195">인천광역시 미추홀구</option>
                                                                <option value="196">인천광역시 부평구</option>
                                                                <option value="197">인천광역시 서구</option>
                                                                <option value="198">인천광역시 연수구</option>
                                                                <option value="199">인천광역시 옹진군</option>
                                                                <option value="200">인천광역시 중구</option>
                                                                <option value="201">전라남도</option>
                                                                <option value="202">전라남도 강진군</option>
                                                                <option value="203">전라남도 고흥군</option>
                                                                <option value="204">전라남도 곡성군</option>
                                                                <option value="205">전라남도 광양시</option>
                                                                <option value="206">전라남도 구례군</option>
                                                                <option value="207">전라남도 나주시</option>
                                                                <option value="208">전라남도 담양군</option>
                                                                <option value="209">전라남도 목포시</option>
                                                                <option value="210">전라남도 무안군</option>
                                                                <option value="211">전라남도 보성군</option>
                                                                <option value="212">전라남도 순천시</option>
                                                                <option value="213">전라남도 신안군</option>
                                                                <option value="214">전라남도 여수시</option>
                                                                <option value="215">전라남도 영광군</option>
                                                                <option value="216">전라남도 영암군</option>
                                                                <option value="217">전라남도 완도군</option>
                                                                <option value="218">전라남도 장성군</option>
                                                                <option value="219">전라남도 장흥군</option>
                                                                <option value="220">전라남도 진도군</option>
                                                                <option value="221">전라남도 함평군</option>
                                                                <option value="222">전라남도 해남군</option>
                                                                <option value="223">전라남도 화순군</option>
                                                                <option value="224">전라북도</option>
                                                                <option value="225">전라북도 고창군</option>
                                                                <option value="226">전라북도 군산시</option>
                                                                <option value="227">전라북도 김제시</option>
                                                                <option value="228">전라북도 남원시</option>
                                                                <option value="229">전라북도 무주군</option>
                                                                <option value="230">전라북도 부안군</option>
                                                                <option value="231">전라북도 순창군</option>
                                                                <option value="232">전라북도 완주군</option>
                                                                <option value="233">전라북도 익산시</option>
                                                                <option value="234">전라북도 임실군</option>
                                                                <option value="235">전라북도 장수군</option>
                                                                <option value="236">전라북도 전주시</option>
                                                                <option value="237">전라북도 전주시 덕진구</option>
                                                                <option value="238">전라북도 전주시 완산구</option>
                                                                <option value="239">전라북도 정읍시</option>
                                                                <option value="240">전라북도 진안군</option>
                                                                <option value="241">제주특별자치도</option>
                                                                <option value="242">제주특별자치도 서귀포시</option>
                                                                <option value="243">제주특별자치도 제주시</option>
                                                                <option value="244">충청남도</option>
                                                                <option value="245">충청남도 계룡시</option>
                                                                <option value="246">충청남도 공주시</option>
                                                                <option value="247">충청남도 금산군</option>
                                                                <option value="248">충청남도 논산시</option>
                                                                <option value="249">충청남도 당진시</option>
                                                                <option value="250">충청남도 보령시</option>
                                                                <option value="251">충청남도 부여군</option>
                                                                <option value="252">충청남도 서산시</option>
                                                                <option value="253">충청남도 서천군</option>
                                                                <option value="254">충청남도 아산시</option>
                                                                <option value="255">충청남도 예산군</option>
                                                                <option value="256">충청남도 천안시</option>
                                                                <option value="257">충청남도 천안시 동남구</option>
                                                                <option value="258">충청남도 천안시 서북구</option>
                                                                <option value="259">충청남도 청양군</option>
                                                                <option value="260">충청남도 태안군</option>
                                                                <option value="261">충청남도 홍성군</option>
                                                                <option value="262">충청북도</option>
                                                                <option value="263">충청북도 괴산군</option>
                                                                <option value="264">충청북도 단양군</option>
                                                                <option value="265">충청북도 보은군</option>
                                                                <option value="266">충청북도 영동군</option>
                                                                <option value="267">충청북도 옥천군</option>
                                                                <option value="268">충청북도 음성군</option>
                                                                <option value="269">충청북도 제천시</option>
                                                                <option value="270">충청북도 증평군</option>
                                                                <option value="271">충청북도 진천군</option>
                                                                <option value="272">충청북도 청주시</option>
                                                                <option value="273">충청북도 청주시 상당구</option>
                                                                <option value="274">충청북도 청주시 서원구</option>
                                                                <option value="275">충청북도 청주시 청원구</option>
                                                                <option value="276">충청북도 청주시 흥덕구</option>
                                                                <option value="277">충청북도 충주시</option>
                                                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_name" class="col-md-4 col-form-label text-md-right">은행명</label>

                            <div class="col-md-6">
                                <input id="bank_name" type="tel" class="form-control" name="bank_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_account" class="col-md-4 col-form-label text-md-right">계좌번호</label>

                            <div class="col-md-6">
                                <input id="bank_account" type="tel" class="form-control" name="bank_account">
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

    $('#university_id').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/universities', $(this).val(), $("#university_id"));
    }, 300));
    
    $('#major_id').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/majors', $(this).val(), $("#major_id"));
    }, 300));

    $('#second_major_id').parent().find('.bs-searchbox .form-control').on('keyup', helperjs.delay(function (e) {
        getResources(e, 'https://www.susirecipe.com/api/v1/resources/majors', $(this).val(), $("#second_major_id"));
    }, 300));
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.3/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.3/dist/js/i18n/defaults-ko_KR.min.js"></script>
</body>

</html>