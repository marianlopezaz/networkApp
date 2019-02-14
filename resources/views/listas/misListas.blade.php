@extends('layouts.app')

@section('content')

            <table id="tableListas" class="table table-bordered" style="width:100%" data-route="{{Route('datatable.listas')}}">
                                     <thead class="thead-dark">
                                        <tr>
                                            <th>Lista De</th>
                                          
                                        </tr>
                                    </thead>
            </table>

@endsection
@section('script')
    <script src="{{ asset('js/jsFiles/listaData.js') }}"></script>
@endsection