<div>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h3><strong>Laravel LivewireCRUD with Bootstrap Modal</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Vouchers</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addStudentModal">Add New Voucher</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif


                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="search" class="form-control w-25" placeholder="search" wire:model="searchTerm" style="float: right;" />
                            </div>
                        </div>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Breakfast</th>
                                    <th>lunch</th>
                                    <th>Snacks</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($vouchers->count() > 0)
                                    @foreach ($vouchers as $voucher)
                                        <tr>
                                            <td>{{ $voucher->Voucher_id }}</td>
                                            <td>{{ $voucher->Breakfast }}</td>
                                            <td>{{ $voucher->Lunch }}</td>
                                            <td>{{ $voucher->Snacks }}</td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-sm btn-secondary" wire:click="viewVoucherDetails({{ $voucher->id }})">View</button>
                                                <button class="btn btn-sm btn-primary" wire:click="editVouchers({{ $voucher->id }})">Edit</button>
                                                <button class="btn btn-sm btn-danger" wire:click="deleteConfirmation({{ $voucher->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center;"><small>No Voucher Found</small></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Vouchers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form wire:submit.prevent="storeVoucherData">
                        <div class="form-group row">
                            <label for="voucher_id" class="col-3">Voucher ID</label>
                            <div class="col-9">
                                <input type="number" id="voucher_id" class="form-control" wire:model="voucher_id">
                                @error('voucher_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="breakfast" class="col-3">Breakfast</label>
                            <div class="col-9">
                                <input type="text" id="breakfast" class="form-control" wire:model="breakfast">
                                @error('breakfast')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lunch" class="col-3">Lunch</label>
                            <div class="col-9">
                                <input type="lunch" id="lunch" class="form-control" wire:model="lunch">
                                @error('email')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="snacks" class="col-3">Snacks</label>
                            <div class="col-9">
                                <input type="snacks" id="phone" class="form-control" wire:model="snacks">
                                @error('snacks')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Add Voucher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="editVoucherModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Voucher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form wire:submit.prevent="editStudentData">
                        <div class="form-group row">
                            <label for="voucher_id" class="col-3">Voucher ID</label>
                            <div class="col-9">
                                <input type="number" id="voucher_id" class="form-control" wire:model="voucher_id">
                                @error('voucher_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="breakfast" class="col-3">Breakfast</label>
                            <div class="col-9">
                                <input type="text" id="breakfast" class="form-control" wire:model="breakfast">
                                @error('name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lunch" class="col-3">Lunch</label>
                            <div class="col-9">
                                <input type="lunch" id="lunch" class="form-control" wire:model="lunch">
                                @error('lunch')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="snacks" class="col-3">Snacks</label>
                            <div class="col-9">
                                <input type="snacks" id="phone" class="form-control" wire:model="snacks">
                                @error('snacks')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Edit Voucher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="deleteStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this Voucher data!</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="deleteVoucherData()">Yes! Delete</button>
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="viewVoucherModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Voucher Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeViewVoucherModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>ID: </th>
                                <td>{{ $view_voucher_id }}</td>
                            </tr>


                            <tr>
                                <th>Name: </th>
                                <td>{{ $view_voucher_breakfast }}</td>
                            </tr>


                            <tr>
                                <th>Email: </th>
                                <td>{{ $view_vocher_lunch }}</td>
                            </tr>


                            <tr>
                                <th>Phone: </th>
                                <td>{{ $view_voucher_snacks }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#addVoucherModal').modal('hide');
            $('#editVocuherModal').modal('hide');
            $('#deleteVoucherModal').modal('hide');
        });


        window.addEventListener('show-edit-Voucher-modal', event =>{
            $('#editStudentModal').modal('show');
        });


        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#deleteVoucherModal').modal('show');
        });


        window.addEventListener('show-view-Voucher-modal', event =>{
            $('#viewVoucherModal').modal('show');
        });
    </script>
@endpush