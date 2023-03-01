<div>
    


    <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>User</th>
            <th>Book</th>
            <th>Rent Date</th>
            <th>Return Date</th>
            <th>Actual Return Date</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($rentlog as $item)
          <tr class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ? 'bg-warning':'') }}">
            <td>{{ $loop->iteration}}</td>
            <td>{{ $item->user->username}}</td>
            <td>
              @foreach ($item->details as $detail)
                {{ $detail->book->title }}
                <br>
              @endforeach
            </td>  
            <td>{{ $item->rent_date}}</td>
            <td>{{ $item->return_date}}</td>
            <td>{{ $item->actual_return_date}}</td>
            <td>{{ $item->total}}</td>
          </tr>
          @endforeach
         
        </tbody>
      </table> 
    
    
</div>