
@component('nav-bar')
@endcomponent

<body>
<section class="chef-section">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/chef.css')}}">


             <div class="name">
                              <h1>Welcome      {{ Auth::user()->name }}!</h1>
             </div>
           </div>
         </div>
                                    <a class="name" style="background-color:#1d1b31;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('') }}
                                    <div>

         </i>
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" > 
                                        @csrf
                                        <button class="btn btn-danger">logout</button>
                                    </form> 
                                    {{csrf_field()}}
 
                                    </a>
 
                                    <br>
<div id="navbar" class="search">

<input type="text" id="search-input" placeholder="Search the order...">
</div>

<br>
<h1>Orders: <span id="order-count"></span> </h1>



<div class="container col-lg-6 col-sm-6 ">
  <div class="row">
    <div class=" ">
      <div class="card-deck">
        <script>
          // Create an object to store orders by id
          var orders = {};
          // Loop through the order list
          @foreach ($orders as $order)
            // Check if the order id exists in the orders object
            if (!orders[{{$order->id}}]) {
              // If not, create a new object for the id
              orders[{{$order->id}}] = {
                id: {{$order->id}},
                items: []
              };
            }
            // Push the order item into the items array of the id object
            orders[{{$order->id}}].items.push({
                id: "{{$order->id}}",
              name: "{{$order->name}}",
              quantity: {{$order->quantity}},
              price: {{$order->price}},
              total: {{$order->quantity * $order->price}}
            });
          @endforeach

          if(Object.keys(orders).length === 0){
            document.write('<h1>No orders yet :(((</h1> ');
            document.write('<img src="{{asset('img/404.png')}}"></img>');
          }else{

          // Loop through the orders object to create cards
          for (var id in orders) {
            var order = orders[id];
            // Create a card for each order id
            document.write(`
            <div class="row">
              <div class="flex">
              <div class="card order " id="order-card-${order.id}" onclick="showOrderPopup(${order.id})">
                <div class="card-header ">Table Number: ${order.id}</div>
                <div class="card-body">
                  <p>Click to view details</p>
                </div>
              </div>
              </div>

              </div>
            `);
          }
        }
        </script>
      </div>
    </div>
  </div>
</div>



<script>
  const orderCount = document.getElementsByClassName('card');
  const orderCountElement = document.getElementById('order-count');
  orderCountElement.textContent = orderCount.length;


  console.log(orderCount.length);

</script>



<script>
$(document).ready(function() {
  $('#search-input').on('keyup', function() {
    var searchValue = $(this).val().toLowerCase();
    $('.order').each(function() {
      var itemText = $(this).text().toLowerCase();
      if (itemText.indexOf(searchValue) !== -1) {
        $(this).show();
      } else {a
        $(this).hide();
      }
    });
  });
});

</script>





<!-- Modal -->
<div class="modal fade" id="order-popup" tabindex="-1" role="dialog" aria-labelledby="orderPopupLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderPopupLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form action="{{route('finishOrder')  }}" method="post">
    @csrf
        <input type="hidden" name="order_id" id="order-id">
        <input type="hidden" name="total_price" id="total-price-input">

        <table class="table">
          <thead>
            <tr>
            <th>table number</th>
              <th>Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody id="order-items">
          </tbody>
<tfoot>
    <td align="center" id="total-price"></td>
  </tfoot>
        </table>


        <button class="btn btn-primary">Done</button>
      </form>
      </div>
    </div>
  </div>
</div>



<script>
  function showOrderPopup(id) {
    // Clear the order items table
    document.getElementById("order-items").innerHTML = "";
    document.getElementById("order-id").value = id;

    document.getElementById("total-price").value = id;

    // Get the order details
    var order = orders[id];
    var total = 0;
    // Loop through the order items
    for (var i = 0; i < order.items.length; i++) {
      var item = order.items[i];
      // Append the order items to the table
      document.getElementById("order-items").innerHTML += `
        <tr>

          <td>${item.id}</td>
          <td>${item.name}</td>
          <td>${item.quantity}</td>
          <td>$ ${item.price}</td>
          <td>$ ${item.total}</td>


     `;
  total += item.total;
    }
    
  document.getElementById("total-price-input").value = total;
  document.getElementById("order-items").innerHTML += `
    <tr>
      <td colspan="4" align="right">Total:</td>
      <td>$ ${total}</td>
    </tr>
  `;
    // Show the order popup
    $("#order-popup").modal("show");
  }


</script>




</section>




  
</body>


