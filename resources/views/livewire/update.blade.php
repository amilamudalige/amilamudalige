<!-- Modal -->
<div wire:ignore.self class="modal fade" id="myModal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Chart of Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <div class="card">
      <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <!-- select -->
                 <div class="form-group">
                   <label>Account Type</label>
                  <select name="account_type" wire:model="account_type"  wire:change="hallChanged()"  class="form-control"  > 
                    <option value="Bank">Bank</option>
                    <option value="Account Receivable">Account Receivable</option>
                    <option value="Other Current Asset">Other Current Asset</option>
                    <option value="Fixed Asset">Fixed Asset</option>
                    <option value="Other Asset">Other Asset</option>
                    <option value="Accounts Payable">Accounts Payable</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Other Current Liability">Other Current Liability</option>
                    <option value="Lonr Term Liability">Lonr Term Liability</option>
                    <option value="Equity">Equity</option>
                    <option value="Income">Income</option>
                    <option value="Cost of Goods Sold">Cost of Goods Sold</option>
                    <option value="Expense">Expense</option>
                    <option value="Other Income">Other Income</option>
                    <option value="Other Expense">Other Expense</option>
                    
                  </select>
                 
                </div>
                {{$account_type}}
                
                <div class="col-sm-7">
                <div class="form-group">
                    <label id="bankno">Account Number</label>
                    <input type="text" id="bankno1" class="form-control" placeholder="">
                </div>
              </div>
            </div>
              <div class="form-group">
                  <label>Number</label>
                   <input type="number" class="form-control" placeholder="">
              </div>
            </div>
          </div>
          </div>
          <div class="card">
          <div class="card-body">
                
            <div class="row">

              <div class="col-sm-7">
                <div class="form-group">
                    <label>Account Name</label>
                    <input name="account_name" wire:model="name"  type="text"  class="form-control" placeholder="">
                    @error('name') <span class="text-danger">{{$message}}</span>@enderror
                </div>
              </div>

              <div class="col-sm-5">
                <!-- select -->
                 <div class="form-group">
                 <input type="checkbox" class="form-check-input" id="exampleCheck2" wire:model="Sub_Chart_OF">
                   <label>Sub Account of:</label>
                   {{$Sub_Chart_OF}}
                  <select class="form-control">
                    
                  @foreach ($char as $ch)
                    <option>{{$ch->Account_Name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
           
              <div class="col-sm-7">
                <div class="form-group">
                    <label>Note</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="upate()" >Create</button>
      </div>
    </div>
  </div>
</div>