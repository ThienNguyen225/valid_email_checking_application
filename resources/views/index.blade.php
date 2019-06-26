<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        @csrf
        <label for="email-input">Email</label>
        <input type="text" id="email-input" placeholder="Nhập email" name="email">
        <input type="submit" value="Check">
    </form>
    @if(!empty(request('email')))
        Kết quả: {{$check?'Đúng định dạng Email':'Sai định dạng Email'}}
        @endif
</div>
</body>
</html>
