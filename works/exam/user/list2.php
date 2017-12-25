
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="red">
    <title>login.html</title>
</head>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="/css/bootstrap-grid.min.css"/>
<link rel="stylesheet" href="/css/bootstrap-reboot.min.css"/>
<link rel="stylesheet" href="/css/bootstrap.min.css"/>
<script>
    $(document).ready(function(){
        var search = {};
        $.ajax({
            //type : http의 메소드를 결정
            type:"get",
            //요청을 보낼 url, form tag의 action이라고 생각하면 쉬움.
            url:"./getlist.php",
            //data 내가 보낼 파라메터들
            data : search,
            //내가 받을 데이터 타입 text, html, json, xml
            dataType : "json",
            //제대로 응답이 왔을때 200번대의 status값
            success: function(res){
                var str ="";
                for(var user of res){
                    str +="<tr>";
                    str += "<td>" + user.uino + "</td>";
                    str += "<td>" + user.uiname + "</td>";
                    str += "<td>" + user.uiid + "</td>";
                    str += "<td>" + user.uipwd + "</td>";
                    str += "<td>" + user.uiage + "</td>";
                    str +="</tr>";
                }
                $("#result_div").html(str);
                console.log(res);
            },
            //요청에 대한 응답이 에러가 났을때
            error: function(xhr, status, error) {
                alert(error);
            }  
        });
    });
</script>
<body>
    <br>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">번호</th>
                    <th scope="col">이름</th>
                    <th scope="col">아이디</th>
                    <th scope="col">비밀번호</th>
                    <th scope="col">나이</th>
                </tr>
            </thead>
            <tbody id="result_div">
            </tbody>
        </table>
    </div>
</body>
</html>
