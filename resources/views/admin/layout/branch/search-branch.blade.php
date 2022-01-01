@extends('master')
@section('content')

<h1>Branch list</h1>
<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>
<div id="PrintTableArea">
    <table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        
    @foreach($branchlistlist as $key=>$branch )
    <tr>
       
        <td>{{$key+1}}</td> 
        <td>{{$branch->name}} "---" {{$branch->id}}</td>
        <td>{{$branch->contact}}</td>
        <td>{{$branch->email}}</td>
        <td>{{$branch->address}}</td>
        <td> 
            <img src="{{url('/uploads/'.$branch->image)}}" width="100px" alt="product image">
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.branchdetails.view',$branch->id)}}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.branch.edit',$branch->id)}}"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger" href="{{route('admin.branchdetails.delete',$branch->id)}}"><i class="fas fa-trash-alt"></i></a>
        </td>
</tr>
@endforeach


    </tbody>
</table>
</div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection