@extends('master')
@section('content')
<?php
    //dd($countrydata);
    if(isset($msg) && $msg == 1){
        echo "<script>alert('Added details!')</script>"; 
    }
    elseif(isset($msg) && $msg == 2){
        echo "<script>alert('Deleted details!')</script>"; 
    }
?>

<div class="col-md-12">
<div class="row">
<div class="col-md-6">
    <div class="container">
    <h2>Add Suppliers!</h2>
        <!-- <a href="{{route('add')}}"  rel="noopener noreferrer">
            <button type="button" class="btn btn-info">Add Suppliers!</button>
        </a>  -->
        <form method="post" action="{{route('add')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Supplier Name</label>
                <input required type="text" class="form-control" name="supl_name" id="supl_name" placeholder="Enter supplier name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" name="coun_id" id="coun_id">
                <option value="0" >Select-</option>

                    @foreach($countrydata as $count)
                        <option value="{{$count->id}}">{{$count->coun_name}}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Select Country</label>
                <select required class="form-control" id="cat_id" name="cat_id">
                <option value="0" >Select-</option>
                    @foreach($allcategory as $cat)
                        <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                    @endforeach
                </select>
            </div>
   <!-- <a href="{{route('add')}}"  rel="noopener noreferrer"> -->
        <button type="submit" class="btn btn-info">Add Supplier</button>
    <!-- </a>  -->
 
</form>
    </div>
     
</div>

<div class="col-md-6">

<div class="container">
    <h2>View Suppliers!</h2>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Supplier Name</th>
        <th>Categoty</th>
        <th>Country</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($allsupplier as $key=>$supl)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$supl->supl_name}}</td>
            <td>{{$supl->cat_name}}</td>
            <td>{{$supl->coun_name}}</td>
            <td> 
                <!-- <a href="javascript:void(0)"  rel="noopener noreferrer">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>  -->
                <a href="{{route('delete',$supl->supl_id)}}"  rel="noopener noreferrer">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a> 
            </td>
        </tr>
    @endforeach
      
    </tbody>
  </table>
</div>
</div>
</div>


@endsection