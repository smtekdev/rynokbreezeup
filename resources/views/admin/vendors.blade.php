<table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
  <thead style="background-color: #2864c4; color:white !important;">
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Name</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Email</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Phone Number</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Address</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">User Type</th>      
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;widht:200px;">Password</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Action</th>
      <!-- <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Profile Image</th>      
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Empty</th> -->
    </tr>
  </thead>
  <tbody>

        @php
            $data = App\Models\User::all();
        @endphp

    @foreach($data as $data)
    @if($data->usertype == "2")
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->name}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->email}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->phone}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->address}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->usertype}}</td>      
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center; width:200px;">{{$data->password}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center; background-color:orange;"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>     
    </tr>
    @endif
    @endforeach
</tbody>
<!-- below code new added need to remove if any issue -->
</table>
