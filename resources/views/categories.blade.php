@extends('layouts.main')

@section('content')
  <main>
    <h3>Category</h3>
    <table class="table table-striped">
      <thead>
        <th>No.</th>
        <th>Nama Kategory</th>
        <th>slug</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        @foreach ($categories as $c)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $c['name'] }}</td>
            <td>{{ $c['slug'] }}</td>
            <td>
              <a href="/categories/{{ $c['slug'] }}/edit" class="btn btn-sm btn-info">Edit</a>
              <a href="/categories/{{ $c['slug'] }}/delete" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
