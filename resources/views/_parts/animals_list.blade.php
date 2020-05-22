<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Weight</th>
      <th scope="col">Biteyness</th>
      <th scope="col">Owner</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($animals AS $animal)
    <tr>
      <td>{{ $animal->name }}</td>
      <td>{{ $animal->type }}</td>
      <td>{{ $animal->weight }}</td>
      <td>{{ $animal->biteyness }}</td>
      <td>{{ $animal->owner->fullName() }}</td>
    </tr>
    @endforeach
  </tbody>
</table>