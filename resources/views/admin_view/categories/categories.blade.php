@extends('admin_view/layout_admin')

@section('content')


<div class="container text-center header-view">
   <h1>Manage Your <span>Categories</span></h1>
        <p>here you can manage all your categories... edit and delete whatever you want</p>
</div>

<div class="product_view">
  <div class="row justify-content-md-center">

  @foreach($categories as $category)
    <div>
      <div class="col">
        <div class="card product_part" style="width: 18rem;">
          <img src="/storage/uploads/{{$category->img}}" class="card-img-top" alt="...">
          <div class="card-body text-center" >
            <h2 class="card-title">{{$category->name}}</h2>
            <h6 class="card-subtitle mb-2 text-muted">{{$category->description}}</h6>
            <a href="/admin/categories/edit/{{$category->id}}" style="color: white;" class="btn btn-primary"><i class="far fa-edit"></i> Edit</a>
            <a href="/admin/categories/destroy/{{$category->id}}  " style="color: white;" class="btn btn-danger confirm"><i class="fas fa-trash"></i> Delete</a>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  </div>
</div>




@endsection