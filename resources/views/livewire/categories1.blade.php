<form>
<div class="row mb-3">
<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>
<div class="col-md-6">
<select wire:model="categoryId">
        <option value="">-- Select One --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
</div>

<div class="row mb-3">
<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Sub Category') }}</label>
<div class="col-md-6">
<select wire:model="subcategoryId">

<option value="">-- Select One --</option>
        @foreach($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}"
                    @if($subcategoryId == $subcategory->id) selected @endif>
                {{ $subcategory->name }}
            </option>
        @endforeach
                            </select>
</div>
</div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button wire:click.prevent="simpan()" class="btn btn-success">Daftar Kategori</button>
        </div>
    </div>
</form>
<!-- @dump($categoryId, $subcategoryId)
@dump($categories, $subcategories) -->
