<div class="container">
  <div class="input-group mb-3">
      <input type="text" class="form-control {{ $errors->has('grocery') ? 'is-invalid' : '' }}" name="grocery" placeholder="Add a Grocery..." aria-label="New Grocery" aria-describedby="add-grocery-button" wire:model="grocery">
      <button class="btn btn-outline-secondary" type="button" id="button-addon2" wire:click="AddGrocery">Add</button>
    @if ($errors->isNotEmpty()) 
        <div id="validationServer03Feedback" class="invalid-feedback">
            {{ $errors->first('grocery') }}
        </div>
    @endif
  </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Purchased?</th>
            </thead>
            <tbody>
                @foreach ($groceries as $g)
                <tr>
                    <td>{{ $g->id }}</td>
                    <td>{{ $g->name }}</td>
                    <td>{{ $g->quantity }}</td>
                    <td><button type="button" class="btn btn-secondary">Edit</button></td>
                    <td><button type="button" class="btn btn-success">Remove</button></td>
                </tr>
                @endforeach 
            </tbody>
        </table>
</div>
