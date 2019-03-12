<!DOCTYPE html>
<html>
<head>
	<title>information</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>



<div class="container">
  <div class="row">
      <div class="span12">
      <div class="widget stacked widget-table action-table">
        <div class="page-header">
          <h1>
            회원 정보
          </h1>
        </div>

       
        <div class="container">
  <div class="row">
        <div class="span3 side-by-side clearfix offset4">
            <form method="get" action="/" >
                <input name="q" class="form-control" type="text"  placeholder="회원 ID">
                <input name="loc" class="form-control" type="text"  placeholder="E-mail">
                <input name="type" class="form-control" type="text"  placeholder="분류">
                <button type="submit" class="btn btn-primary"> <i class="glyphicon glyphicon-search"></i></button>
            </form>
        </div>
    </div>
</div>
        <div class="row">
 <!--          <div class="span2 side-by-side clearfix">
            <select tabindex="-1" id="Show" class="chosen-select" data-placeholder="Show" style="display: none;">
              <option value=""></option>
              <option>5</option>
              <option>10</option>
              <option>20</option>
              <option>50</option>
              <option>All</option>
            </select><div class="chosen-container chosen-container-single" style="width: 150px;" title="" id="Show_chosen"><a tabindex="-1" class="chosen-single chosen-default"><span>Show</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" tabindex="2"></div><ul class="chosen-results"><li data-option-array-index="1" style="" class="active-result">5</li><li data-option-array-index="2" style="" class="active-result">10</li><li data-option-array-index="3" style="" class="active-result">20</li><li data-option-array-index="4" style="" class="active-result">50</li><li data-option-array-index="5" style="" class="active-result">All</li></ul></div></div>
          </div> -->
          <!-- <div class="span2 side-by-side clearfix">
            <select tabindex="-1" id="Sort" class="chosen-select" data-placeholder="Sort by" style="display: none;">
              <option value=""></option>
              <option>Exam ID</option>
              <option>Exam Name</option>
              <option>Department</option>
              <option>Program/Level</option>
              <option>Course</option>
              <option>Date Created</option>
              <option>Exam Date</option>
              <option>Status</option>
            </select><div class="chosen-container chosen-container-single" style="width: 150px;" title="" id="Sort_chosen"><a tabindex="-1" class="chosen-single chosen-default"><span>Sort by</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" tabindex="2"></div><ul class="chosen-results"><li data-option-array-index="1" style="" class="active-result">Exam ID</li><li data-option-array-index="2" style="" class="active-result">Exam Name</li><li data-option-array-index="3" style="" class="active-result">Department</li><li data-option-array-index="4" style="" class="active-result">Program/Level</li><li data-option-array-index="5" style="" class="active-result">Course</li><li data-option-array-index="6" style="" class="active-result">Date Created</li><li data-option-array-index="7" style="" class="active-result">Exam Date</li><li data-option-array-index="8" style="" class="active-result">Status</li></ul></div></div>
          </div> -->

    <!-- 버튼 -->
<!--           <div class="span3 side-by-side clearfix offset4">
            <form action="#" method="get">
              <div class="input-group">
                <input class="form-control" id="system-search" name="q" placeholder="Search for" required="">
                <input class="form-control" id="system-search" name="q" placeholder="Search for" required="">
                <input class="form-control" id="system-search" name="q" placeholder="Search for" required="">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default" data-original-title="" title=""><i class="glyphicon glyphicon-search"></i></button>
                </span>
              </div>
            </form>
          </div> -->
<!--           <div class="span1 side-by-side clearfix">
            <a class="btn btn-default" href="javascript:;">
              <span class="glyphicon glyphicon-globe"></span> Adv.
            </a>
          </div> -->
        </div><br><br>
        <a href="{{route('admin.create')}}" class="btn btn-primary">등록</a>
        <div class="widget-content">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th id="table_id">일련번호
                </th><th id=""> 회원 ID
                </th><th id=""> 이름
                </th><th id=""> 성별
                </th><th id=""> 휴대폰 번호
                </th><th id=""> E-mail
                </th><th id=""> 등록 일시
                </th><th id=""> 분류
                </th><th id=""> 계정 상황
                </th><th class="td-actions" id="table_action"> 세부사항</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>000001</td>
                <td>mentor1@susirecipe.com</td>
                <td>이수아</td>
                <td>여</td>
                <td>010-1111-2222</td>
                <td>susirecipe@gmail.com</td>
                <td>1999-01-16</td>
                <td>셰프</td>
                <td>활동 / 정지 / 탈퇴 / 블랙리스트</td>
                <td class="td-actions">
                  <a class="btn btn-default btn-xs" href="javascript:;">
                    <span class="glyphicon glyphicon-pencil"></span> Edit
                  </a>
                  <a class="btn btn-default btn-xs" href="javascript:;">
                    <span class="glyphicon glyphicon-remove"></span> Remove
                  </a>
                  <a class="btn btn-default btn-xs" href="javascript:;">
                    <span class="glyphicon glyphicon-search"></span> View
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div> <!-- /widget-content -->
        <div class="row">
          <div class="col-md-12">
            <ul class="pagination pagination-sm pull-left">
              <li class="disabled"><a href="javascript:void(0)">«</a></li>
              <li class="active"><a href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="javascript:void(0)">»</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </div>
</div>


</body>
</html>