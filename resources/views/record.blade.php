@extends('master')
@section('body')
<div class="row">
		<div class="col-lg-12">
			<div class="bs-example">
				<pre>                                                                 			<b>Hours Rendered: {{ $count }} hour(s)</b></pre>
				<a class="mdl-button mdl-js-button mdl-button--fab" href="{{ url('/download') }}"><i class="material-icons">save</i></a><br>
				<table class="table table-condensed" id="example" data-height="200"  data-toggle="table" data-pagination="true">
					<thead>
						<tr>			

							<th class="mdl-data-table__cell--non-numeric">Date</th>
							<th class="mdl-data-table__cell--non-numeric">Time in</th>
							<th class="mdl-data-table__cell--non-numeric">Time out</th>
							<th class="mdl-data-table__cell--non-numeric">Hours Rendered</th>
						</tr>
					</thead>
					<tbody>
						@foreach($attendance as $att)
						<tr>
							
							<td>{{ \Carbon\Carbon::parse($att->date)->format('M d, Y') }}</td>
							<td>{{ \Carbon\Carbon::parse($att->time_in)->format('h:i:s A')  }}</td>
							<td>{{ \Carbon\Carbon::parse($att->time_out)->format('h:i:s A') }}</td>
							<td>{{ $att->hrs_rendered }}</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			<!-- ADD RENDER -->
			</div>	
		</div>
</div>
@endsection