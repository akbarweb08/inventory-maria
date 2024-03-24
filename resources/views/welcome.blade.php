@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Total Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Barang Masuk</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Barang Keluar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                DATA INVENTARIS
              </h3>
              <div class="card-tools">
                {{-- Create search at end --}}

                {{-- <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div> --}}
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
                <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Supplier</th>
                            <th>Worker</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Macan Tutul</td>
                            <td>2011-04-25</td>
                            <td>In</td>
                            <td>Edinburgh</td>
                            <td>Maria</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>2011-04-25</td>
                            <td>In</td>
                            <td>Edinburgh</td>
                            <td>Maria</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>2011-04-25</td>
                            <td>Out</td>
                            <td>Edinburgh</td>
                            <td>Maria</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>2011-04-25</td>
                            <td>Out</td>
                            <td>Edinburgh</td>
                            <td>Maria</td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Supplier</th>
                            <th>Worker</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->



          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@section('custom-js')
<script>
$(document).ready(function() {
    new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
    } );
</script>
@endsection
@endsection
