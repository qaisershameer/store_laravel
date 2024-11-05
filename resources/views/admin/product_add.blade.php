<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>

    <style type="text/css">
        
        input[type='text']
        {
            width: 400px;
            height: 50px;
        }
        .div_deg
        {
            display: flex;
            justify-content: left;
            align-items: left;
        }

    </style>

    @include('admin.header')

    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1 style="color:white;">Product Information</h1>

          <div class="div_deg">

            <form action="{{url('add_product')}}" method="post">

                @csrf

                <div>
                    <label for="">Product Name</label>
                    <input type="text" name="product_name">
                </div>
                    
                <div>
                    <label for="">Product Description</label>
                    <input type="text" name="description">                
                </div>

                <div>
                    <label for="">Product Price</label>
                    <input type="text" name="price">                
                </div>

                <div>
                    <label for="">Product QTY</label>
                    <input type="text" name="qty">                
                </div>

                <div>
                    <label for="">Product Category</label>
                    <input type="text" name="category_id">                
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" value="Add Product">
                </div>

            </form>

          </div>

          <div>

          </div>

        </div>
      </div>
    </div>

    <script type="text/javascript">

      function confirmation(ev)
      {
        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href')

        console.log(urlToRedirect);

        swal({

          title: "Are you sure to Delete this",
          text: "This delete will be permanent",
          icon: "warning",
          buttons: true,
          dangerMode: true,

        })

        .then((willCancel)=>
        {
          if(willCancel)
          {
            window.location.href = urlToRedirect;
          }

        });

      }


    </script>

    @include('admin.js')

  </body>
</html>