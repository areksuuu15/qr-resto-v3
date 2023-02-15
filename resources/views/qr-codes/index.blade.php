<style>
 .qr-code {
        width: 200px;
        height: 200px;
        margin-bottom: 20px;
        display: inline-block;
    }
</style>
@component('nav-bar')
@endcomponent

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



 





<div class="container qr-section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">QR Codes</div>

                <div class="card-body">
 @foreach ($qrCodes as $qrCode)
        <p>Table Number: {{ $qrCode['table_number']}}</p>
        {!! $qrCode['qr_code'] !!}
            @endforeach
                </div>
                

<form action="{{ route('storeNumbers') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="numbers">Numbers:</label>
        <input type="text" name="numbers" id="numbers" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<form action="{{route('deleteQR')}}" id="myForm" method="POST">
    {{ csrf_field()}}
<button type="submit" class="btn btn-danger">delete whole</button>
</form>


<script>



$('.btn-danger').click(function(event) {
  event.preventDefault();
  let form = document.querySelector("#myForm");

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




            </div>
        </div>
    </div>
<div class="d-flex justify-content-center">

      {!!$qrCodes->links()!!}

</div>
</div>
