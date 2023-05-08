
<style>


.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

}

table{
    min-width: 10vw;
    width: 70vw;
    padding: 5rem;
    border-radius: 40px;
    
}
th{
    padding: 20px;
}

td{
    text-align: center;
    padding: 20px;
}

button{
    border-radius: 40px;
    padding: 10px;
    margin: 2px;
    
}

.name{
  margin-top: 20;
}


label{
  padding: 20px;
}

.btn-success{
  padding: 20px;
}


</style>

   @include('nav-bar')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="asset('css/assignRole.css')">




<div class="role-section">


  <div class="name">
    <form action="/assign-role" method="post">
    @csrf
    <label for="user">User:</label>
    <select name="user_id" id="user">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <label for="role">Role:</label>
    <select name="role_id" id="role">
        @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-success">Assign Role</button>
</form>


  </div>

<table  id="users-table"class="styled-table">
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                    @foreach ($user->roles as $role)
                    <span class="role">
                    {{ $role->name }} 
                    </span>

                    @endforeach
                                </td>
            <td>
                            <form action="{{ route('roles.remove', ['user_id' => $user->id, 'role_id' => $role->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" delete btn btn-sm btn-danger">Remove</button>
                        </form>

                <!-- Any other actions you want to add, e.g. edit or view user -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<script>
$(document).ready(function() {
  $('.role').each(function() {
    if ($(this).text() === 'chef') {
      $(this).addClass(' badge-warning rounded-pill d-inline');
    } else if ($(this).text() === 'admin') {
      $(this).addClass(' badge-success rounded-pill d-inline');
    }
  });
});

</script>
<script>
$(document).on('click', '.delete', function(event) {
  event.preventDefault();
  let form = $(this).closest('form');

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, submit it!'
  }).then((result) => {
    if (result.value) {
      form.submit();
    }
  });
});



  


</script>

