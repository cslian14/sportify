@include('template.adminheader')
<br><br><br><br><br>
<div class="container-fluid">
    <h1>Add product</h1>
    @if($errors)
        @foreach($errors->all() as $err)
            <div class="älert alert-danger">
                {{$err}}
            </div>
        @endforeach
    @endif
    <form action="/add-product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="Product Name">
        </div> 
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number"  step=".01" value="{{old('price')}}" class="form-control" id="price" name="price" placeholder="Php">
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Quantity</label>
            <input type="number" value="{{old('qty')}}" class="form-control" id="qty" name="qty" placeholder="0">
        </div>
       
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('template.footer')