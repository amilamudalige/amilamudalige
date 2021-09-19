<div>
  
@include('livewire.create') 
@include('livewire.update') 





<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
                                  <section class="content-header">
                            <div class="container-fluid">
                              <div class="row mb-2">
                                <div class="col-sm-6">
                                  <h1>Chart Of Account Details</h1>
                                </div>
                                <div class="col-sm-6">
                                  <ol class="breadcrumb float-sm-right">
                                  
                                    <button type="button" class="btn btn-primary" wire:click.prevent="open()" >Add New Chart Of Account </button>
                                  </ol>
                                  
                              
                                </div>
                              </div>
                            </div><!-- /.container-fluid -->
                          </section>
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($char as $ch)
                    <tr>
                    <td>{{$ch->id}}</td>
                    <td>{{$ch->Account_Name}}</td>
                    <td>{{$ch->Account_Cat}}</td>
                    <td> <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal" wire:click.prevent="find({{$ch->id}})"> Edit </button>  <button type="button" class="btn  btn-outline-danger btn-sm" data-dismiss="modal" wire:click.prevent="find({{$ch->id}})">  Active   </button> </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
 </div>

