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
      <input type="text" name='surname' id="surname" required placeholder="Фамилия"  class="@error('surname') is-invalid @else is-valid @enderror">
      @error('surname')
      <b>{{ $message }}</b>
      @enderror
      <br><br>
      <input type="text" name='name' id="name" required placeholder="Имя"  class="@error('name') is-invalid @else is-valid @enderror">
      @error('name')
      <b>{{ $message }}</b>
      @enderror
      <br><br>
      <input type="text" name='patronymic' id="patronymic" required placeholder="Отчество"  class="@error('patronimic') is-invalid @else is-valid @enderror">
      @error('patronimic')
      <b>{{ $message }}</b>
      @enderror
      <br><br>
      <input type="email" name='email' id="email" required placeholder="Email"  class="@error('email') is-invalid @else is-valid @enderror">
      @error('email')
      <b>{{ $message }}</b>
      @enderror 
      <br>
      <br>Avatar:
      <input type="file" name="avatar" id="avatar">
      @error('avatar')
      <b>{{ $message }}</b>
      @enderror
      <br><br>
      <input type="submit" value="Отправить">
    </form>
     
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <b>{{ $message }}</b>
    </div> 
    @endif

</body>
</html>