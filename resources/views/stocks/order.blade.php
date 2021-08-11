@extends('layouts.app')
@section('content')

  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Orders</h2>
          </div>
        </div>
  </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th> Order Number </th>
                            <th> Placed By </th>
                            <th class="text-center"> Total Amount </th>
                            <th class="text-center"> Items Qty </th>
                            <th class="text-center"> Payment Status </th>
                            <th class="text-center"> Status </th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">{{ config('settings.currency_symbol') }}</td>
                                <td class="text-center"></td>
                                <td class="text-center">
                                        <span class="badge badge-success">Completed</span>
                                        <span class="badge badge-danger">Not Completed</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-success"></span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
