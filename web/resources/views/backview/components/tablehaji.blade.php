<div class="row mb-5">
    <div class="card">
        <div class="card-body">
            <h6>Aktifkan Form / CTA di Pendaftaran Haji</h6>
            <table class="mt-3 table">
                <thead>
                    <th>Status</th>
                    <th>Tindakan</th>
                </thead>
                <tbody>
                    @foreach($statusForm as $item)
                        <tr>
                            <td>
                                @if($item->type == 1)
                                    <span class="text-success"> 
                                        Menampilkan Form Aktif
                                    </span>
                                @else 
                                <span class="text-success"> 
                                    Menampilkan CTA Aktif
                                </span>
                                @endif
                            </td>
                            <td>
                                @if($item->type == 1)
                                    <form method="POST" action="{{ url('/daftarhaji/update') }}">
                                        @csrf
                                        <input type="hidden" name="id_type" value="2"/>
                                        <input type="hidden" name="type" value="2"/>
                                        <button type="submit"  class="btn btn-success btn-sm">Ubah ke CTA</button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ url('/daftarhaji/update') }}">
                                        @csrf
                                        <input type="hidden" name="id_type" value="2"/>
                                        <input type="hidden" name="type" value="1"/>
                                        <button type="submit" class="btn btn-success btn-sm">Ubah ke Form</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

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
            <th>
                Tindakan
            </th>
        </tr>
    </thead>
    <tbody>
          <div class="d-none">{{ $i=1 }}</div>
          @foreach ($daftarhaji as $item)
              <tr>
                  <td>
                  {{ $i++ }}
                  </td>
                  <td>{{$item->nama}}</td>
                  <td id="dataCopy_{{ $i}}">{{$item->whatsapp}}</td>
                  <td>{{$item->domisili}}</td>
                  <td>
                    <button id="{{$i}}" class="btn btn-sm btn-success" onclick="copyTeks({{$i}})">Salin nomor WA</button>
                  </td>
              </tr>
          @endforeach
    </tbody>
  </table>