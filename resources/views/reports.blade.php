<html>
<style>
head, body {
            font-family: 'Courier New';

           }

 th, td {
 			text-align:center;
 		}
</style>
<head><img src="{{ asset('pblogo.png') }}"><br>
PurpleBug Inc.<br>
Unit 806 Antel 2000 Corporate Center, Valero Street, <br>
Salcedo Village, Makati City<br>
Tel +63 (2) 551-0986 +63 (2) 7899150<br>                  
Fax +63 (2) 789 9001<br>
www.purplebug.net<br>
</head>
<body>
	<br><br><br><br>
	<h2 align="center">Daily Time Record</h2>
					<table border="1" style="width:100%">
						<thead>
							<tr>
								<th>Date</th>
								<th>Time in</th>
								<th>Time out</th>
					
							</tr>
						</thead>
						<tbody>
						@foreach($attendance as $att)
						<tr>			
							<td>{{ \Carbon\Carbon::parse($att->date)->format('M d, Y') }}</td>
							<td>{{ \Carbon\Carbon::parse($att->time_in)->format('h:i:s A')  }}</td>
							<td>{{ \Carbon\Carbon::parse($att->time_out)->format('h:i:s A') }}</td>
							
						</tr>
							@endforeach
						</tbody>
					</table>
<pre><br><br>
Noted By:<br><br><br>
_________________________<br>
   <b>Ms. Jovelyn Salcedo</b><br>
<i>HR & Administrative Officer</i></pre>
<!-- <pre><b>Total Hours Rendered: {{ $count }} hours</b></pre> -->
</body>

</html>