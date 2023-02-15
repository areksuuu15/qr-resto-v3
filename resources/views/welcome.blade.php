<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                color:white;

            }

            .myButton{
 background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
            }
            
.myButton.active {
background-color: #007bff;
color: #fff;
}

.card{
  margin: 10px auto;
  width: 18rem;
}

img{
  width: 18rem;
  height: 18rem;
}

        </style>
    </head>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<input type="text" id="search-input" placeholder="Search...">

<button class=" btn search-button" value="">All</button>
<button class=" btn search-button" value="Breakfast">Breakfast</button>
<button class=" btn search-button" value="Lunch">Lunch</button>
<button class=" btn search-button" value="Dinner">Dinner</button>
<button class=" btn search-button" value="Dessert">Dessert</button>

   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">login</a>

        </li>
      </ul>
    </div>
  </div>
</nav>
 
    <body class="antialiased">
       <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
  <div class="container-fluid">
    <div class="row">
      @foreach ($listItems as $listItems)
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 my-3 list-item">
          <div class="col-sm-4 ">
            <div class="card " >
          <img src="{{ asset('/img/' . $listItems->image) }}" alt="{{ $listItems->name }}" >
              <div class="card-body">
                <h5 class="card-title ">{{$listItems->name}}</h5>
                <p class="card-text">{{$listItems->description}}</p>
                <p class="card-text">{{$listItems->category}}</p>
                <p class="card-text">${{$listItems->price}}</p>
          <button class="myButton active" value="{{$listItems->id  . " - " . $listItems->name .  " - $" . $listItems->price}} " data-toggle="modal" data-target="#exampleModal" data-price="{{$listItems->price}}">Click me</button>

                <input type="number" min="0" placeholder="quantity" class="quantity" disabled>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>



<script>
$(document).ready(function() {
  $('#search-input').on('keyup', function() {
    var searchValue = $(this).val().toLowerCase();
    $('.list-item').each(function() {
      var itemText = $(this).text().toLowerCase();
      if (itemText.indexOf(searchValue) !== -1) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});

$(document).ready(function() {
  $('.search-button').on('click', function() {
    var searchValue = $(this).val().toLowerCase();
    $('.list-item').each(function() {
      var itemText = $(this).text().toLowerCase();
      if (itemText.indexOf(searchValue) !== -1) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});






</script>

<script>




var buttons = document.getElementsByClassName("myButton");
var selectedItems = [];
for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", function() {
    var input = this.parentNode.getElementsByClassName("quantity")[0];
if (input.disabled) {
this.classList.remove("active");
input.value = 0;
} else {
this.classList.add("active");
}
    input.disabled = !input.disabled;
    input.value = input.d
    input.addEventListener("change", function() {
      // Update the modal if the input number has been changed
      var selectedItem = this.parentNode.getElementsByClassName("myButton")[0].value;
      var price = this.parentNode.getElementsByClassName("myButton")[0].getAttribute("data-price");

      var quantity = this.value;
      var foundIndex = -1;
      for (var i = 0; i < selectedItems.length; i++) {
        if (selectedItems[i].item == selectedItem) {
          foundIndex = i;
          break;
        }
      }
      if (foundIndex >= 0) {
        if (quantity == 0 || quantity == "") {
          selectedItems.splice(foundIndex, 1);
        } else {
          selectedItems[foundIndex].quantity = quantity;
        }
      } else if (quantity != 0 && quantity != "") {
        selectedItems.push({item: selectedItem, quantity: quantity});
      }
      // Pass the selected items to the modal body





      var modalBody = document.querySelector(".modal-body");
      modalBody.innerHTML = "id | name | price | quantity  | <br>";
//     for (var i = 0; i < selectedItems.length; i++) {
//       modalBody.innerHTML += selectedItems[i].item + " - " + selectedItems[i].quantity + "<br>";
//     }
      for (var i = 0; i < selectedItems.length; i++) {
  modalBody.innerHTML += selectedItems[i].item + " - " + selectedItems[i].quantity +     "<br>";
}
var currentValue = document.querySelector("input[name='selectedItems']").value;
var currentArray = [];

if (currentValue) {
  currentArray = JSON.parse(currentValue);
}

currentArray.push(selectedItems);


const newSelectedItems = selectedItems.map(function(selectedItem) {
  const parts = selectedItem.item.split(" - ");
  const id = parts[0];
  const name = parts[1];
  const price = parseFloat(parts[2].replace("$", ""));
  
  return {
    id: id,
    name: name,
    price: price,
    quantity: parseInt(selectedItem.quantity),
    total: price * parseInt(selectedItem.quantity)
  };
});

console.log(newSelectedItems);


      // Update the hidden input field with the updated selected items
      document.querySelector("input[name='selectedItems']").value = JSON.stringify(newSelectedItems);
    });
  });
}








</script>

<!-- Button trigger modal -->
<div class="fixed-bottom text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select some foods</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>select something first</h1>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

<form class="form-class" action="{{route('update-occupancy', $variable)}}" method="post">
  <div>
  <input type="hidden" name="selectedItems">
  <input type="hidden" name="totalPrice">
    <button type="submit" class="btn btn-primary">Checkout</button>
    {{ csrf_field() }}
  </div>
</form>


      </div>
    </div>
  </div>
</div>






<!-- Checkout button -->
<div>
  {{$variable}}
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@else
    <div class="alert alert-danger">
        Failed
    </div>
@endif

<script>
$(document).ready(function() {
    $(".form-class").submit(function(e) {
      var filled = false;
      $(".quantity").each(function() {
        if ($(this).val()) {
          filled = true;
        }
      });
      if (!filled) {
        e.preventDefault();
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'You need to select something.',
          showConfirmButton: false

        });
      } else {
        Swal.fire({
          icon: 'success',
          title: 'Order Success!',
          text: 'Please wait for your food...',
          timer: 5000


        });
      }
    });
  });
</script>






        </div>
               </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>
