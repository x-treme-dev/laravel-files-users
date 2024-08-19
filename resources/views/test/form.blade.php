<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
   <form action="{{ route('form.store') }}" method='post' enctype='multipart/form-data'>
     @csrf
      <input type="text" name='surname' id="search" required placeholder="Фамилия">
      <br><br>
      <input type="text" name='name' id="search" required placeholder="Имя">
      <br><br>
      <input type="text" name='patronymic' id="search" required placeholder="Отчество">
      <br><br>
      <input type="email" name='email' id="email" required placeholder="Email">
       <br>
      <br>Avatar:
      <input type="file" name="avatar" id="avatar">
      <br><br>
      <input type="submit" value="Отправить">
    </form>
<<<<<<< HEAD
           @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <b>{{ $message }}</b>
                </div>
            @endif
=======
     
    @isset ($path)
    <img src="{{ asset('/storage/' . $path) }}" alt="">
    @endisset

>>>>>>> 2d6ccb1f1a5e714001e8b210562462f0d4271f64
</body>
</html>