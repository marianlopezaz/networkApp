@extends('layouts.app')

@section('content')

            <table id="tableContactos" class="table table-bordered" style="width:100%" data-route="{{Route('datatable.contactos')}}">
                                     <thead class="thead-dark">
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                        </tr>
                                    </thead>
            </table>

@endsection
@section('script')
    <script src="{{ asset('js/jsFiles/contactoData.js') }}"></script>
@endsection