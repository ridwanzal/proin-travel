<table class="table table-striped mt-4 js-datatable" width="100%">
  <thead>
      <tr>
          <th>
              No.
          </th>
          <th>
              Nama
          </th>
          <th>
              Whatsapp
          </th>
          <th>
              Domisili
          </th>
      </tr>
  </thead>
  <tbody>
        <div class="d-none">{{ $i=1 }}</div>
        @foreach ($daftaragen as $item)
            <tr>
                <td>
                {{ $i++ }}
                </td>
                <td>{{$item->nama}}</td>
                <td>{{$item->whatsapp}}</td>
                <td>{{$item->domisili}}</td>
            </tr>
        @endforeach
  </tbody>
</table>