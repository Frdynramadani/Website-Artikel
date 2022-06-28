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
						<div class="card-title">Edit Kategori <b><i>{{ $kategori->nama_kategori }}</i></b></div>
                        <a href="{{ route('kategori.create')}}" class="btn btn-warning btn-sn ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="post" action="{{ route('kategori.update', $kategori->id) }}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" id="kategori" value="{{ $kategori->nama_kategori }}">
                    </div>
                    <div>
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


