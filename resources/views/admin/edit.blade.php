<!DOCTYPE html>
<html>
<head>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="widget-content">
          <table class="table table-striped table-bordered" >
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
								</th>
                <!-- </th><th class="td-actions" id="table_action"> 세부사항</th> -->
              </tr>
            </thead>

            <tbody>

			  <tr>
			  <form action="{{route('admin.update', $info->id)}}" method="POST">
				@csrf
				@method('PUT')
        <td> <input type="text" id="id" value = "<?= ($info -> id)  ?>" name="id" readonly/> </td>
				<td> <input type="text" id="user_id" value = "<?= ($info -> user_id)  ?>" name="user_id" /> </td>
				<td> <input type="text" id="name" value = "<?= ($info -> name)  ?>" name="name" /> </td>
				<td> 
					<input type = "radio" name = "gender" value = "F">F
					<input type = "radio" name = "gender" value = "M">M  
					</td>
					<script> 
						var li =  document.getElementsByName("gender");
						if("<?= ($info -> gender)  ?>" == li[0].value) li[0].checked = true;
						if("<?= ($info -> gender)  ?>" == li[1].value) li[1].checked = true;
      	  </script>

				<td> <input type="text" id="phone_number" value = "<?= $info -> phone_number  ?>"name="phone_number" /> </td>
				<td> <input type="text" id="Email"  value = "<?= ($info -> Email)  ?>"name="Email" /> </td>
				<td> <input type="text" id="resigter_date" value = "<?= ($info -> register_date)  ?>" name="resigter_date" /> </td>
				<td> 
				<input type = "radio" name = "category" value = "mentor">mentor 
  			<input type = "radio" name = "category" value = "student">student 
  			<input type = "radio" name = "category" value = "parent">parent
				</td>
				<script> 
          var li =  document.getElementsByName("category");
          if("<?= ($info -> category)  ?>" == li[0].value) li[0].checked = true;
          if("<?= ($info -> category)  ?>" == li[1].value) li[1].checked = true;
          if("<?= ($info -> category)  ?>" == li[2].value) li[2].checked = true; 
        </script>
				<td>
				<input type = "radio" name = "situation" value = "match"> 매칭중
				<input type = "radio" name = "situation" value = "wait"> 대기중
				<input type = "radio" name = "situation" value = "out"> 탈퇴
				<input type = "radio" name = "situation" value = "black">블랙리스트
				</td>
				<script> 
          var li =  document.getElementsByName("situation");
          if("<?= ($info -> situation)  ?>" == li[0].value) li[0].checked = true;
          if("<?= ($info -> situation)  ?>" == li[1].value) li[1].checked = true;
          if("<?= ($info -> situation)  ?>" == li[2].value) li[2].checked = true; 
					if("<?= ($info -> situation)  ?>" == li[3].value) li[3].checked = true; 
        </script>

        <button class="glyphicon glyphicon-pencil" type='submit'></span> 수정완료
	
			  </form>
			  </tr>
            </tbody>
          </table>

</body>
</html>