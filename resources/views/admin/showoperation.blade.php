
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   
   		@include('admin.css')

     </head>
  <body>
    <div class="container-scroller">
      <!--  -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')

      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        	<div align="center" style="padding-top: : 100px;">
        		<table>
        			<tr style="background-color: red">
        				<th style="padding: 10px">Customer Name</th>
        				<th style="padding: 10px">Email</th>
        				<th style="padding: 10px">Phone</th>
        				<th style="padding: 10px">Doctor Name</th>
        				<th style="padding: 10px">Date</th>
        				<th style="padding: 10px">Message</th>
        				<th style="padding: 10px">Status</th>
        				<th style="padding: 10px">Approve</th>
        				<th style="padding: 10px">Cancel</th>
                <!-- <th style="padding: 10px">Send Mail</th> -->
        			</tr>

        			@foreach($data as $operation)

        			<tr align="center" style="background-color: purple;">
        				<td>{{$operation->name}}</td>
        				<td>{{$operation->email}}</td>
        				<td>{{$operation->phone}}</td>
        				<td>{{$operation->doctor}}</td>
        				<td>{{$operation->date}}</td>
        				<td>{{$operation->message}}</td>
        				<td>{{$operation->status}}</td>
        				<td>
        					<a class="btn btn-success" href="{{url('approve',$operation->id)}}">Approve</a>
        				</td>

        				<td>
        					<a class="btn btn-danger" href="{{url('cancelled',$operation->id)}}">Cancel</a>
        				</td>

                

        			</tr>
        			@endforeach

        		</table>
        		
        	</div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   	@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>admin/
