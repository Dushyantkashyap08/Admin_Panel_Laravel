<!--extending layouts.main here-->
@extends('layouts.main')

<!--categorysummary-section starts here-->
@section('category-summary-section')

<!--layouts/leftlist starts here-->
@include('layouts/leftlist')
<!--layouts/leftlist ends here-->
		
	<!-- content2 start  -->
	<div class="content2">				
		<h4 class="pm">Category Manager</h4>
		<p class="thisline">This section display the list of Catogories. </p>
		<p class="clickline"><a href="#">Click here</a> to create <a href="#">New Category</a></p>
		<!-- form start  -->	
		<form method="post" action="{{route('search.category')}}">
			@csrf
			<!-- search-table start  here -->
			<table class="searchtable">
				<tr>
					<td colspan="2">Search</td>
				</tr>
				<tr>
					<td>Search by Category Name</td>
					<td><input type="text" name="sname" />
					<button type="submit" id="sr-btn">Search</button>
					</td>
				</tr>
						
			</table>
			<!-- search-table end here  -->
		</form>
		<!-- form ends -->		
		<p class="pageline">Page 1 of 2, showing 10 records out of 13 total, starting on record 1, ending on 10</p> 
				
		<!-- id-table start here -->
		<table class="id-table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Category Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($data as $item)
				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->categoryname}}</td>
					<td><a href="{{'category-edit-display/'.$item->id}}"><i class="fa-regular fa-pen-to-square"></i></a></td
					<td><a href="{{'category-delete-data/'.$item->id}}"><i class="fa-solid fa-trash-arrow-up" style="color: #ff0000;"></i></a></td>
				</tr>
				@endforeach
				<tr>
					<td colspan="6" >
						{{$data->links('pagi')}}
					</td>
				</tr>
				
			</tbody>
		</table>
		<!-- idtable end here -->
	</div>
	<!-- content2 end  -->
@endsection
<!--categorysummary-section ends here-->