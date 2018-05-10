@if($user == null)
    <form action="/admin/users" method="post">
@else
    <form action="/admin/users/{{$user->id}}" method="post">
    @method('PUT')
@endif
    @csrf
    <div class="form-group"
            @if($user != null)
                style="display:none;"
            @endif>
    </div>
    <div class="form-group">
      <label for="description">Nom:</label>
      <input value="{{$user->name or ''}}" name="name" class="form-control" type="text" required>
    </div>
    <div class="form-group">
        <label for="description">Cognom:</label>
        <input value="{{$user->surname or ''}}" name="surname" class="form-control" type="text" required>
    </div>
    <div class="form-group">
        <label for="description">País:</label>
        <input value="{{$user->country or ''}}" name="country" class="form-control" type="text" required>
    </div>
    <div class="form-group">
        <label for="description">Ciutat:</label>
        <input value="{{$user->city or ''}}" name="city" class="form-control" type="text" required>
    </div>
    <div class="form-group">
        <label for="description">Telèfon:</label>
        <input value="{{$user->tel or ''}}" name="tel" class="form-control" type="text" required>
    </div>
    <div class="form-group">
        <label for="description">Email:</label>
        <input value="{{$user->email or ''}}" name="email" class="form-control" type="email" required>
    </div>
    <div class="form-group">
        <label for="description">Contrassenya:</label>
        <input name="password" class="form-control" type="password" required>
    </div>
    <div class="form-group">
        <label for="description">Repeteix la contrassenya:</label>
        <input name="password_confirmation" class="form-control" type="password" required>
    </div>

    <button class="btn btn-success" type="submit">
        @if($user == null)
            Crear
        @else
            Editar
        @endif
    </button>
</form>
