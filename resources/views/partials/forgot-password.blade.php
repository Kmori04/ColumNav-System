<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot Password - ColumNav</title>

  @vite(['resources/css/login.css'])

  <style>
    body{
      margin:0;
      min-height:100vh;
      position:relative;
      overflow:hidden;
    }

    .bg-blur{
      position:fixed;
      top:0;
      left:0;
      width:100%;
      height:100%;
      background-image:url('{{ Vite::asset('resources/images/ccBackground.png') }}');
      background-size:cover;
      background-position:center 80%;
      background-repeat:no-repeat;
      filter:blur(8px);
      transform:scale(1.05);
      z-index:-1;
    }
  </style>
</head>

<body>

  <div class="bg-blur"></div>

  <a href="{{ route('login.show') }}"
     style="
      position:absolute;
      top:20px;
      left:20px;
      display:flex;
      align-items:center;
      gap:6px;
      text-decoration:none;
      background:#ffffff;
      color:#0c3b66;
      padding:8px 14px;
      border-radius:10px;
      font-family:'Poppins',sans-serif;
      font-size:14px;
      font-weight:500;
      border:1px solid #e5e7eb;
      box-shadow:0 4px 12px rgba(0,0,0,0.08);
      transition:all 0.2s ease;
     "
     onmouseover="this.style.background='#f1f5f9'"
     onmouseout="this.style.background='#ffffff'"
  >
    ← Back to Login
  </a>

  <div class="login-wrap">
    <div class="login-card">

      <h1 class="title">Forgot Password</h1>
      <p class="sub">Reset the admin password using the recovery key</p>

      @if(session('error'))
        <div class="alert">{{ session('error') }}</div>
      @endif

      @if($errors->any())
        <div class="alert">
          @foreach($errors->all() as $err)
            <div>{{ $err }}</div>
          @endforeach
        </div>
      @endif

      <form method="POST" action="{{ route('password.reset') }}">
        @csrf

        <label class="lbl">Admin Username</label>
        <input class="inp" type="text" name="username" value="{{ old('username') }}" required>

        <label class="lbl">Recovery Key</label>
        <input class="inp" type="password" name="recovery_key" required>

        <label class="lbl">New Password</label>
        <input class="inp" type="password" name="new_password" required>

        <label class="lbl">Confirm New Password</label>
        <input class="inp" type="password" name="new_password_confirmation" required>

        <button class="btn" type="submit">Reset Password</button>
      </form>

    </div>
  </div>

</body>
</html>