@extends('layouts.main')

@section('content')
  <main>
    <h3>Products</h3>
    <div class="row justify-content-center my-3">
      <div class="col-md-6">
        <form action="/products">
          <div class="input-group mb-3">
            <input type="search" name="search" class="form-control" placeholder="Search..."
              value="{{ request('search') }}">
            <button class="btn btn-secondary" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
    <table class="table table-striped">
      <thead>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        @if ($products->count())
          @foreach ($products as $p)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td>{{ $p['name'] }}</td>
              <td><a href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a></td>
              <td>{{ $p['price'] }}</td>
              <td>
                <a href="/products/{{ $p['id'] }}/edit" class="btn btn-sm btn-info">Edit</a>
                <a href="/products/{{ $p['id'] }}/delete" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="5" class="text-center">No data found</td>
          </tr>
        @endif
      </tbody>
    </table>
  </main>
@endsection
