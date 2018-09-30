@extends('master')
@section('table')
<table id="example" class="table table-striped table-bordered">
	 <thead>
            <tr>
        <!--     	同樣欄位個數必須相同 -->
                <th>id</th>
                <th>name</th>
                <th>phone</th>
                <th>address</th>
                <th>birthday</th>
                <th>createAt</th>
                <th>updateAt</th>
            </tr>
        </thead>

</table>
@endsection
