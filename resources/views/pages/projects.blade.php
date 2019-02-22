@include('inc.header')
<center>
	<h2>Projects  details</h2>
	<body bgcolor="cyan">
<table border=3>
<tr>
	<th>ProductID</th><th>productName</th><th>DESCRIPTION</th><th>Price</th>
</tr>
@foreach($list as $project)
<tr>
	<td>{{$project->Productid}}</td>
	<td>{{$project->productName}}</td>
	<td>{{$project->Description}}</td>
	<td>{{$project->Price}}</td>
</tr>
@endforeach
</table>
</body>
</center>
@include('inc.footer')

</ul>