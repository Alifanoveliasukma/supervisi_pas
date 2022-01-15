@if(auth()->user()->role == 'guru')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">  
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <!-- Button trigger modal -->
                            <a class="btn btn-success update-pro" href="" title="tambah data" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-add"></i> <span>Tambah Data</span></a>
                            <!-- Modal -->
                            
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        
                                        <th>NIP</th>
                                        <th>MAPEL</th>
                                        <th>RPP</th>
                                        <th>EMBED (link video)</th>
                                        <th>Status</th>  
                                        <th>Aksi</th>   
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dokument as $d)
                                <tr>
                        <td>{{$d->nip}}</td>
                        <td>{{$d->mapel}}</td>
                        <td>{{$d->rpp}}</td>
                        <td>{{$d->embed}}</td>
                        <td>{{$d->status}}</td>
                        <td>
                       
                        <a class="btn btn-success update-pro" href="/dashboard/{{$d->id}}/edit" title="tambah data" data-toggle="modal" data-target="#exampleModal2"><i class="fa fa-add"></i> <span>edit</span></a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                                   
                                </tbody>
                               
                            </table>
                           
                        </div>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukan Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                <form action="/dashboard/upload" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputemail1">NIP</label>
                                    <input name="nip" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="NIP" value=""> 
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputemail1">MAPEL</label>
                                    <input name="mapel" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="mapel" value=""> 
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputemail1">Rpp</label>
                                    <input name="rpp" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="mapel" value=""> 
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputemail1">EMBED</label>
                                    <input name="embed" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="EMBED" value=""> 
                                    
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputemail1">STATUS</label>
                                    <input name="status" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="STATUS" value=""> 
                                    
                                </div>
                                <div class="modal-footer">
                                </div>
                                
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukan Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                <form action="/dashboard/update" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputemail1">NIP</label>
                                    <input name="nip" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="NIP" value="{{$d->nip}}"> 
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputemail1">MAPEL</label>
                                    <input name="mapel" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="mapel" value="{{$d->mapel}}"> 
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputemail1">Rpp</label>
                                    <input name="rpp" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="mapel" value="{{$d->rpp}}"> 
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputemail1">EMBED</label>
                                    <input name="embed" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="EMBED" value="{{$d->embed}}"> 
                                    
                                </div>
                                

                                <div class="form-group">
                                    <label for="exampleInputemail1">STATUS</label>
                                    <input name="status" type="text" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp" placeholder="STATUS" value="{{$d->status}}"> 
                                    
                                </div>
                                <div class="modal-footer">
                                </div>
                                
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                </div>
                                </div>
                            </div>
                            </div>

                            
                           

                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endif