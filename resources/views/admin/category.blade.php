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

          <h1 style="color:white;">Category Information</h1>

          <div class="div_deg">

            <form action="{{url('add_category')}}" method="post">

                @csrf

                <div>
                    <input type="text" name="category">                
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>

            </form>

          </div>

          <div>

            <table class="table_deg">

            <tr>
              <th> Category Name </th>
              <th> Updated @ </th>
              <th> Action </th>
            </tr>

            @foreach($data as $data)

              <tr>
                <td> {{ $data->category_name }} </td>
                <td> {{ $data->updated_at }} </td>
                <td>
                  <input class="btn btn-success" type="submit" name="edit" value="Edit Here">
                  <input class="btn btn-danger" type="submit" name="delete" value="Delete This">
                </td>
              </tr>

            @endforeach

            </table>

          </div>

        </div>
      </div>
    </div>

    @include('admin.js')

  </body>
</html>