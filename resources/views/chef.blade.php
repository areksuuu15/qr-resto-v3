<style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

}



  .card {
    width: 18rem;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    margin: 50px auto;

    text-align: center;

  }

  .card-header {
    background-color: #343a40;
    color: #fff;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 10px;
  }

  .card-body {
    padding: 20px;
  }

  .card-title {
    font-weight: bold;
    font-size: 20px;
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

p{
    cursor: pointer;
}

</style>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


             <div class="name">
                                    {{ Auth::user()->name }}
             </div>
           </div>
         </div>
                                    <a class="name" style="background-color:#1d1b31;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('') }}
                                    <div>

         <i class='bx bx-log-out' id="log_out" >
         </i>
                                    </div>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" > 
                                        @csrf
                                        <button>logout</button>
                                    </form> 
                                    {{csrf_field()}}
 
                                    </a>
 



<h1>Orders</h1>

<div class="container">
  <div class="row">
    <div class=" col-sm-12">
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

          // Loop through the orders object to create cards
          for (var id in orders) {
            var order = orders[id];
            // Create a card for each order id
            document.write(`
            <div class="row">
              <div class="card " id="order-card-${order.id}" onclick="showOrderPopup(${order.id})">
                <div class="card-header ">Table Number: ${order.id}</div>
                <div class="card-body">
                  <p>Click to view details</p>
                </div>
              </div>
              </div>
            `);
          }
        </script>
      </div>
    </div>
  </div>
</div>

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
    // Get the order details
    var order = orders[id];
    // Loop through the order items
    for (var i = 0; i < order.items.length; i++) {
      var item = order.items[i];
      // Append the order items to the table
      document.getElementById("order-items").innerHTML += `
        <tr>

          <td>${item.id}</td>
          <td>${item.name}</td>
          <td>${item.quantity}</td>
          <td>${item.price}</td>
          <td>${item.total}</td>

     `;
    }
    // Show the order popup
    $("#order-popup").modal("show");
  }
</script>
