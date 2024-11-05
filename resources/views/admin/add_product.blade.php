<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>

    <style type="text/css">

        .div_deg
        {
            display: flex;
            justify-content: left;
            align-items: left;
            margin-top: 60px;
        }

        .input_deg
        {
          padding: 10px;
        }

        label
        {
          display: inline-block;
          width: 200px;
          font-size: 18px!important;
          color: white!important;
        }

        input[type='text']
        {
          width: 500px;
          height: 50px;
        }
        textarea
        {
          width: 500px;
          height: 100px;
        }
        number
        {
          width: 500px;
          height: 50px;
        }

    </style>

    @include('admin.header')

    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1 style="color:white;">Product Information</h1>

          <div class="div_deg">

            <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="input_deg">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" required>
                </div>
                    
                <div class="input_deg">
                    <label for="">Product Description</label>
                    <textarea name="description" required></textarea>                    
                </div>

                <div class="input_deg">
                    <label for="">Product Price</label>
                    <input type="number" name="price" required>
                </div>

                <div class="input_deg">
                    <label for="">Product QTY</label>
                    <input type="number" name="qty" required>
                </div>

                <div class="input_deg">

                    <label for="">Product Category</label>

                    <select name="category_Id" required>
                      <option value=""> Select a Category </option>
                      
                      @foreach($category as $category)
                        <option value="{{$category->id}}"> {{$category->category_name}} </option>
                      @endforeach

                    </select>
                    
                </div>

                <div class="input_deg">
                    <label for="">Product Image</label>
                    <input type="file" name="image">
                </div>                

                <div>
                    <input class="btn btn-success" type="submit" value="Add Product">
                </div>

            </form>

          </div>

          <div>

          </div>

        </div>
      </div>
    </div>

    @include('admin.js')

  </body>
</html>