@extends('master')
@section('content')
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<h1>Branch list</h1>

<form action="{{route('admin.branch.list')}}" method="GET">
    <input name="search" class="search-input" type="text" placeholder="Search with Branch" aria-label="Search">
    <button class="btn btn-success" type="submit"><i class='fas fa-search'></i></button>
</form>
    
    <table class="table table-bordered">
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
        <td>{{$branch->name}}</td>
        <!-- "---" {{$branch->id}} -->
        <td>{{$branch->contact}}</td>
        <td>{{$branch->email}}</td>
        <td>{{$branch->address}}</td>
        <td> 
            <img src="{{url('/uploads/'.$branch->image)}}" width="100px" alt="product image">
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.branchdetails.view',$branch->id)}}"><i class="fas fa-eye"></i></a></td>
            <td><a class="btn btn-warning" href="{{route('admin.branch.edit',$branch->id)}}"><i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-danger" href="{{route('admin.branchdetails.delete',$branch->id)}}"><i class="fas fa-trash-alt"></i></a>
        </td>
</tr>
@endforeach
    </tbody>
</table>

<!-- {{$branchlistlist->onEachside(1)->links()}} -->


@endsection