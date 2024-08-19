<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
   <form action="{{ route('register') }}" method='post' enctype='mulitpart/form-data'>
     @csrf
      <input type="text" name='surname' id="search" required placeholder="Фамилия">
      <br><br>
      <input type="text" name='name' id="search" required placeholder="Имя">
      <br><br>
      <input type="text" name='patronymic' id="search" required placeholder="Отчество">
      <br><br>
      <input type="email" name='email' id="email" required placeholder="Email"
      class="@error('email') is-invalid @else is-valid @enderror">
       <br>
      <br>Avatar:
      <input type="file" name="avatar" id="avatar">
      <br><br>
      <input type="submit" value="Отправить">
    </form>
     
    @isset ($path)
    <img src="{{ asset('/storage/' . $path) }}" alt="">
    @endisset

</body>
</html>