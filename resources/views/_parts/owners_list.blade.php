<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Town</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($owners AS $owner)
    <tr>
      <td>{{ $owner->fullName() }}</td>
      <td>{{ $owner->formattedPhoneNumber() }}</td>
      <td>{{ $owner->fullAddress() }}</td>
      <td>{{ $owner->town }}</td>
    </tr>
    @endforeach
  </tbody>
</table>