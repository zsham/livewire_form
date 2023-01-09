<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
  
class Ndaftars extends Component
{
    public $users, $name, $email, $user_id;
    public $password;
    public $updateMode = false;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->users = User::all();
        return view('livewire.ndaftars');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        //$this->password_confirmation = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store1()
    {
        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            //'password_confirmation' => 'required',
        ]);
  
        User::create($validatedDate);
  
        session()->flash('message', 'User Created Successfully.');
  
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit4($id)
    {
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel3()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update2()
    {
        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
  
        $user = User::find($this->user_id);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'User Updated Successfully.');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete5($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}