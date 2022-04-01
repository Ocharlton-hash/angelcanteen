<?php


namespace App\Http\Livewire;


use App\Models\Vouchers;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;


class VoucherComponent extends Component
{
    public $voucher_id, $breakfast, $lunch, $snacks, $voucher_edit_id, $voucher_delete_id;


    public $view_voucher_id, $view_voucher_breakfast, $view_voucher_lunch, $view_voucher_snacks;


    public $searchTerm;


    //Input fields on update validation
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'voucher_id' => 'required|unique:vouchers,voucher_id,'.$this->voucher_edit_id.'', //Validation with ignoring own data
            'breakfast' => 'required',
            'lunch' => 'required|lunch',
            'snacks' => 'required|snacks',
        ]);
    }



    public function storeVoucherData()
    {
        //on form submit validation
        $this->validate([
            'voucher_id' => 'required|unique:vouchers', //vouhcers = table name
            'breakfast' => 'required',
            'lunch' => 'required|lunch',
            'snacks' => 'required|snacks',
        ]);


        //Add Student Data
        $voucher = new Vouchers();
        $voucher->voucher_id = $this->voucher_id;
        $voucher->breakfast = $this->breaskfast;
        $voucher->lunch = $this->lunch;
        $voucher->snacks = $this->snacks;


        $student->save();


        session()->flash('message', 'New student has been added successfully');


        $this->voucher_id = '';
        $this->breakfast = '';
        $this->lunch = '';
        $this->snacks = '';


        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }


    public function resetInputs()
    {
        $this->Voucher_id = '';
        $this->breakfast = '';
        $this->lunch = '';
        $this->snacks = '';
        $this->student_edit_id = '';
    }


    public function close()
    {
        $this->resetInputs();
    }


    public function editVouchers($id)
    {
        $voucher = Vouchers::where('id', $id)->first();


        $this->voucher_edit_id = $voucher->id;
        $this->voucher_id = $voucher->voucher_id;
        $this->breakfast = $voucher->breakfast;
        $this->lunch = $voucher->lunch;
        $this->snacks = $voucher->snacks;


        $this->dispatchBrowserEvent('show-edit-voucher-modal');
    }
    
    public function editVoucherData()
    {
        //on form submit validation
        $this->validate([
            'voucher_id' => 'required|unique:vouchers,voucher_id,'.$this->voucher_edit_id.'', //Validation with ignoring own data
            'breakfast' => 'required',
            'lunch' => 'required|lunch',
            'snacks' => 'required|snacks',
        ]);


        $voucher = Students::where('id', $this->voucher_edit_id)->first();
        $voucher->voucher_id = $this->voucher_id;
        $voucher->breakfast = $this->breakfast;
        $voucher->lunch = $this->lunch;
        $voucher->snacks = $this->snacks;


        $voucher->save();


        session()->flash('message', 'Voucher has been updated successfully');


        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
    }


    //Delete Confirmation
    public function deleteConfirmation($id)
    {
        $this->voucher_delete_id = $id; //voucher id


        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }


    public function deleteVoucherData()
    {
        $voucher = Vouchers::where('id', $this->voucher_delete_id)->first();
        $voucher->delete();


        session()->flash('message', 'Student has been deleted successfully');


        $this->dispatchBrowserEvent('close-modal');


        $this->voucher_delete_id = '';
    }


    public function cancel()
    {
        $this->voucher_delete_id = '';
    }


    public function viewVoucherDetails($id)
    {
        $Voucher = Vouchers::where('id', $id)->first();


        $this->view_voucher_id = $voucher->voucher_id;
        $this->view_voucher_breakfast = $voucher->breakfast;
        $this->view_voucher_lunch = $voucher->lunch;
        $this->view_voucher_snacks = $voucher->snacks;


        $this->dispatchBrowserEvent('show-view-voucher-modal');
    }


    public function closeViewStudentModal()
    {
        $this->view_voucher_id = '';
        $this->view_voucher_breakfast = '';
        $this->view_voucher_lunch = '';
        $this->view_voucher_snacks = '';
    }


    public function render()
    {
        //Get all students
        $vouchers = Vouchers::where('breakfast', 'like', '%'.$this->searchTerm.'%')->orWhere('lunch', 'like', '%'.$this->searchTerm.'%')->orWhere('voucher_id', 'like', '%'.$this->searchTerm.'%')->orWhere('snacks', 'like', '%'.$this->searchTerm.'%')->get();


        return view('livewire.vouchers-component', ['vouchers'=>$vouchers])->layout('livewire.layouts.base');
    }
}

