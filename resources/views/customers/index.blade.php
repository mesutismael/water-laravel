@extends('layouts.app')

@section('main-content')

    <section class="content-header">

        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> {!! session('message') !!}</h4>
            </div>
        @endif

        <div class="row">
            <div class="col-xs-6">
                <h1>Customer</h1>
            </div>
            <div class="col-xs-6">
                <a href="{{ route('customers.create') }}" class="btn btn-success pull-right">
                    <i class="fa fa-arrows"></i>New customer
                </a><br><br>

            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive">
                        <table id="tickets-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="no-wrap padding-right-20">First name</th>
                                <th class="no-wrap padding-right-20">Last name</th>
                                <th class="no-wrap padding-right-20">email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($customers as $row)
                                <tr class="clickable-row" data-url="{{ route('customers.edit', array($row->id)) }}">
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->last_name }}</td>
                                    <td><a href="mailto:{{ $row->email }}">{{ $row->email }}</a></td>

                                    <td class="actions no-wrap text-right">
                                        <div class="modal-tooltip" data-toggle="tooltip"
                                             data-placement="bottom" title="Delete">
                                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal"
                                               data-remote="{{ route('customers.confirm', $row->id) }}"
                                               data-action="refresh">
                                                <i class="fa fa-trash fa-no-text"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="no-wrap padding-right-20">First name</th>
                                <th class="no-wrap padding-right-20">Last name</th>
                                <th class="no-wrap padding-right-20">email</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('main-content')

@endsection