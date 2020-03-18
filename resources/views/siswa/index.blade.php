@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Kue</h3>
								<div class="right">
									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
								</div>
									
							</div>
							<div class="panel-body">
								<table class="table table-hover">
								<thead>
									<tr>
										<th>NO</th>
										<th>KODE</th>
										<th>Jenis Kue</th>
										<th>STOK</th>
										<th>HARGA </th>
										<th>AKSI</th>
						   	   		</tr>
								</thead>
								<tbody>
										@foreach($data_siswa as $siswa)
									<tr>
										<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
										<td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
										<td>{{$siswa->jenis_kue}}</td>
										<td>{{$siswa->agama}}</td>
										<td>{{$siswa->alamat}}</td>
										<td>
											<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
											<a onclick="return confirm('apakahnyakin?'):" href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
											
										</td>
									</tr>
								
									@endforeach
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kue</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/create" method="POST">
        	{{csrf_field()}}
		  <div class="form-group ">
		    <label for="exampleInputEmail1">No</label>
		    <input name="No" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Kode</label>
		    <input name="Kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
		  </div>

		   <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
		  </div>

		   

			<div class="form-group">
			    <label for="exampleFormControlSelect1">Jenis Kue</label>
			    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			      <option value="K">Kue Kering</option>
			      <option value="B">Kue Basah</option>
			    </select>
			  </div>

			<div class="form-group">
		    <label for="exampleInputEmail1">Stok</label>
		    <input name="Stok" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Harga</label>
		    <textarea name="Harga" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Avatar</label>
		    <input type="file" name="avatar" class="form-control">
		   
		  </div>

		 

		  <div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				
			</div>
		</div>
		  

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@stop
