  <!-- Navbar -->
  @include('layouts.header');
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Paramedik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Paramedik</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Tmp_Lahir</th>
                  <th>Tgl_Lahir</th>
                  <th>Kategori</th>
                  <th>Telepom</th>
                  <th>Alamat</th>
                  <th>Unit_Kerja</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($list_paramedik as $paramedik)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $paramedik->id }}</td>
                  <td>{{ $paramedik->nama }}</td>
                  <td>{{ $paramedik->tmp_lahir }}</td>
                  <td>{{ $paramedik->tgl_lahir }}</td>
                  <td>{{ $paramedik->kategori }}</td>
                  <td>{{ $paramedik->telepon }}</td>
                  <td>{{ $paramedik->alamat }}</td>
                  <td>{{ $paramedik->unit_kerja_id }}</td>
                  <td>
                    <a href=""><button class="btn-success">Detail</button></a>
                    <a href=""><button class="btn-warning">Edit</button></a> 
                    <a href=""><button class="btn-danger">Hapus</button></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer --}}
  @include('layouts.footer');
  {{-- tutup footer --}}