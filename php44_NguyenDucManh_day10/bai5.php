<html>
<head>
    <meta charset='utf-8'>
    <title>bai5</title>
    <link rel='stylesheet' type='text/css' href='bootstrap.min.css'>
    <meta name='viewport' content='width=device-width,initial-scale=1.0'>
</head>
<body>
<?php
$name='Nguyễn Đức Mạnh';
$email='ndmanh@gmail.com';
$phone='094895xxx';
echo"<div class='container'>
    <form onsubmit='return hienthi()'>
        <div class='row'>
            <div class='col-md-4 col-12'>
                <div class='col-content'>
                    <div class='form-group'>
                        <label for='exampleInputName'>Name*</label>
                        <input type='text' class='form-control' id='exampleInputName' value='$name'>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-12'>
                <div class='col-content'>
                    <div class='form-group'>
                        <label for='exampleInputEmail'>Email*</label>
                        <input type='email' class='form-control' id='exampleInputEmail' value='$email'>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-12'>
                <div class='col-content'>
                    <div class='form-group'>
                        <label for='exampleInputPhone'>Phone</label>
                        <input type='text' class='form-control' id='exampleInputPhone' value='$phone'>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12 col-12'>
                <div class='form-group'>
                    <label for='exampleFormControlTextarea1'>Message</label>
                    <textarea class='form-control' id='exampleFormControlTextarea1' rows='3' >This is a message</textarea>
                </div>
            </div>
        </div>
                    <button type='submit' class='btn btn-primary'>Send message</button>
                    <small class='form-text text-muted'>*These fields are required.</small>
    </form>
    <div id='display' onclick='return hienthi();'></div>
</div>"
?>
<script type='text/javascript'>
          function hienthi(){
              var name=document.getElementById('exampleInputName').value;
              var email=document.getElementById('exampleInputEmail').value;
              var phone=document.getElementById('exampleInputPhone').value;
              var textarea=document.getElementById('exampleFormControlTextarea1').value;
              var display=document.getElementById('display');
              display.innerHTML='Name : '+name+'<br/>'+'Email : '+email+'<br/>'+'Phone : '+phone+'<br/>'+'Message : '+textarea;
              return false;
          }
</script>
</body>
</html>