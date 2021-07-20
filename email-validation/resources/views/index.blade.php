<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="post" action="{{ route('checkEmail')}}">
        @csrf
        <lable for="email-input">Email:</lable>
        <input id="email-input" type="email" placeholder="Nhập email cần kiểm tra" name="email">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
        Kết quả: {{ $isEmail ? 'Sai định dạng Email':'Đúng định dạng Email' }}
    @endif
</div>
