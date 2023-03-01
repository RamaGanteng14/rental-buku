<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan </title>
    <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
        
        th {
          background-color: #04AA6D;
          color: white;
        }
        h1 {
            text-align: center;
        }
        </style>
</head>
<body>
    <h1>Laporan Peminjaman</h1>
      
    <div class="mt-5">
      <table border="none" class="table">
         
            <tr>
              <th>No.</th>
              <th>Peminjam</th>
              <th>Buku</th>
              <th>Rent Date</th>
              <th>Return Date</th>
              <th>Actual Return Date</th>
              <th>Price</th>
            </tr>
         
            @foreach ($orders as $item)
            <tr class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ? 'bg-danger':'bg-success') }}">
              <td>{{ $loop->iteration}}</td>
              <td>{{ $item->rent->username}}</td>
            <td>{{ $item->book->title }}</td>
            <td>{{ $item->rent->rent_date}}</td>
            <td>{{ $item->rent->return_date}}</td>
            <td>{{ $item->rent->actual_return_date}}</td>
            <td>{{ $item->book->harga}}</td>
            </tr>
            @endforeach
           
          </tbody>
        </table> 

    </div>
</body>
</html>
    
  