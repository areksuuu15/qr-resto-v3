
<style>
.form-group {
  margin-bottom: 2rem;
  padding: 1rem;
  background-color: #f7f7f7;
  border-radius: 10px;
}

label {
  font-weight: bold;
  color: #333;
  margin-bottom: 0.5rem;
  display: block;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 1rem;
  font-size: 1.2rem;
  box-sizing: border-box;
  border-radius: 10px;
  border: 1px solid #ccc;
  margin-top: 0.5rem;
  margin-bottom: 1rem;
  resize: vertical;
  transition: all 0.3s ease-in-out;
}

input[type="email"]:focus,
input[type="password"]:focus {
  border-color: #333;
  box-shadow: 0 0 10px #333;
}

button[type="submit"] {
  width: 100%;
  background-color: #333;
  color: white;
  padding: 1rem;
  margin-top: 1rem;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

button[type="submit"]:hover {
  background-color: #444;
}

</style>



<form action="/login" method="post">
  @csrf
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
