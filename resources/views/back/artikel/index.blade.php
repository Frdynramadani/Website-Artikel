@extends('layouts.default')

@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

			<div class="ml-md-auto py-2 py-md-0">
				{{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Customer</a> --}}
			</div>
		</div>
	</div>
</div>

<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Artikel</div>
                        <a href="{{ route('artikel.create')}}" class="btn btn-primary btn-sn ml-auto">Tambah Artikel</a>
					</div>
				</div>
				<div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-primary">
                            {{ Session('success') }}
                        </div>
                    @endif
					<div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($artikel as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>{{ $row->kategori->nama_kategori }}</td>
                                    <td>{{ $row->users->name }}</td>
                                    <td>
                                        <a href="{{ route('artikel.edit', $row->id) }}" class="btn btn-warning btn-sm"> Edit </a>

                                        <form action="{{ route('artikel.destroy', $row->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                    </td>
                                </tr>

                                @empty

                                <tr>
                                    <td colspan="6" class="text-center">Data Tidak Ada</td>
                                </tr>

                                @endforelse
                            </tbody>
                        </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection


