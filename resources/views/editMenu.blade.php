@component('nav-bar')
@endcomponent


<link rel="stylesheet" href="{{asset('css/addMenu.css')}}">
<div class="addMenu-section">
  <div class="form">
<h1>edit</h1>
<form class="" method="post" action="{{ url('updateMenu', $listItemDesu->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" >
                {{ csrf_field() }}
  <div class="form-group ">
    <label for="name">Menu Name</label>
    <br>
    <input type="text" value="{{$listItemDesu->name}}" name="name" class="form-control" id="menuName" aria-describedby="menuName" placeholder="Enter menu name" required>
  </div>
  <div class="form-group">
    <label for="description" >Description</label>
    <br>
    <textarea  class="form-control" placeholder="{{$listItemDesu->description}}" name="description" id="description" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="price" name="listItem">Price</label>
    <br>
    <input type="number" value="{{$listItemDesu->price}}" name="price" class="form-control" id="price" placeholder="Enter price" required min="1">
  </div>
  <div class="form-group">
    <label for="category" name="listItem">Category</label>
    <br>
    <select class="form-control"  name="category"id="category" required>
      <option>Breakfast</option>
      <option>Lunch</option>
      <option>Dinner</option>
      <option>Dessert</option>
    </select>
  </div>
  <br>
  <div class="form-group">
    <label for="image">Upload Image</label>
    <br>
    <input type="file"   name="image" class="form-control-file" id="image">
    <td><img src="{{ asset('/img/' . $listItemDesu->image) }}" alt="{{ $listItemDesu->name }}" style="width: 100px; height:100px;"></td>
  </div>
  <button type="submit"  id="save-button" onclick="validateForm()" class="btn btn-primary">Submit</button>
</form>

<br>
<form action="{{route('crud')}}">
        {{ csrf_field()}}
<button id="back-button"class="btn btn-warning">Back</button>
</form>






  </div>
</div>



