<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <span class="btn btn-sm btn-primary">Tambah</span>
            </div>
            <div class="card-body">
                <!-- <p class="card-title">Advanced Table</p> -->
                <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th width="10%">No</th>
                              <th>Kategori</th>
                              <th width="15%">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($kategori as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>
                                <div class="btn-group">
                                    <span class="btn btn-sm btn-primary mr-2">Edit</span>
                                    <span class="btn btn-sm btn-danger">Hapus</span>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer clearfix">
                            {{$kategori->links()}}
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>