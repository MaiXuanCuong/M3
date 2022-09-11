<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="post" action="{{ route('checkEmail')}}">
        @csrf
        <label for="email-input">Email:</label>
        <input id="email-input" type="email" placeholder="Nhập email cần kiểm tra" name="email">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
        Kết quả: {{ $isEmail ? 'Đúng định dạng Email':'Sai định dạng Email' }}
    @endif
</div>