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

        .table_deg
        {
            width: 1500px;
            text-align: center;
            margin: left;
            margin-top: 50px;
            border: 2px solid yellowgreen;
        }

        th
        {
          background-color: skyblue;
          padding: 15px;
          font-size: 20px;
          font-weight: bold;
          color: white;
        }

        td
        {
          border: 1px solid skyblue;
          padding: 10px;
          font-size: 15px;
          color: white;
        }

    </style>  

    @include('admin.header')

    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1> Update Category </h1>

            <div class="div_deg">            
                
                <form action="{{url('update_category', $data->id)}}" method="post">

                    @csrf

                    <input type="text" name="category" value="{{$data->category_name, $data->id}}">

                    <input class="btn btn-success" type="submit" value="Update Category">

                </form>

            </div>

        </div>
      </div>
    </div>

    @include('admin.js')

  </body>
</html>