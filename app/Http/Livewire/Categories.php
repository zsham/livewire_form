<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
  
class Categories extends Component
{
    public $categories, $name, $categoryId, $subcategoryId;
    public $subcategories = [];
    public $updateMode = false;
   

    // public function mount()
    // {
    //     $this->categories = Category::get();
        
    //     // $this->category_id =  $this->categories->id;
    //     // $this->subcategories = Subcategory::where('category_id', $this->categoryId)->get();
    //     // dd($this->categories);
    //     // return view('livewire.categories');
    // }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
       $this->categories = Category::all();
        
        // $this->category_id =  $this->categories->id;
        // $this->subcategories = Subcategory::where('category_id', $this->categoryId)->get();
        // dd($this->categories);
        return view('livewire.categories');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function simpan()
    {


        dd('simpan', $this->categoryId, $this->subcategoryId );






        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
  
        Category::create([
            'name' => $this->name,
        ]);
  
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
        $category = Category::findOrFail($id);
        $this->category_id = $id;
        $this->name = $category->name;
  
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
        ]);
  
        $category = Category::find($this->category_id);
        $category->update([
            'name' => $this->name,
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
        Category::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */   
    public function updated($name, $value)
    {
    //    dump($name, $value);
       if($name=='categoryId'){
            $this->subcategories = SubCategory::where('category_id',$value)->get();
       }
    }
}