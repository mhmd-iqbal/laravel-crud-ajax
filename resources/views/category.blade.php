@extends('layouts.main')

@section('content')
  <main>
    <h3>Products in category '{{ $category_name }}'</h3>
    <table class="table table-striped">
      <thead>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        @foreach ($products as $p)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->price }}</td>
            <td>
              <a href="/products/{{ $p['id'] }}/edit" class="btn btn-sm btn-info">Edit</a>
              <a href="/products/{{ $p['id'] }}/delete" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
