@extends('layout.content2') 
@section('content')

<div class="ads-grid_shop" style="margin-bottom: 80px;">
    <div class="row container" style="float: none; margin: 0 auto;">
        <form action="{{ isset($is_create) ? url('/admin/items/create') : url('/admin/items/edit/' . $item->id) }}" method="post" enctype="multipart/form-data" class="creditly-card-form agileinfo_form">
            @csrf
            <section class="creditly-wrapper wrapper">
                <div class="information-wrapper">
                    <div class="first-row form-group">
                        <div class="controls">
                            <label class="control-label">Item name: </label>
                            <input class="billing-address-name form-control" type="text" name="name" placeholder="name" value={{ isset($is_create) ? '' : $item->name }}>
                        </div>
    
                        <div class="controls">
                            <label class="control-label">Category: </label>
                            <select class="form-control option-w3ls" name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($is_create) ? '' : $category->id == $item->category_id ? 'selected': ''}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="controls">
                                <label class="control-label">Item Price: </label>
                                <input class="billing-address-name form-control" type="number" name="price" placeholder="ex: 10.0" value={{ isset($is_create) ? '' : $item->price }}>
                        </div>
                        <div class="controls">
                                <label class="control-label">Item Quantity: </label>
                                <input class="billing-address-name form-control" type="number" name="quantity" placeholder="ex: 5" value={{ isset($is_create) ? '' : $item->quantity }}>
                        </div>
                        <div class="controls">
                                <label class="control-label">Item Description: </label>
                                <textarea style="width: 100%;" class="billing-address-name form-control" name="description" placeholder="some informations">{{isset($is_create) ? '' : $item->description}}</textarea>
                        </div>
                        <div class="controls">
                                <label class="control-label">Image 1 (800x800) </label>
                                <input style="height: 54px;" class="billing-address-name form-control" type="file" name="image1">
                        </div>
                        <div class="controls">
                                <label class="control-label">Image 2 (800x396) </label>
                                <input style="height: 54px;" class="billing-address-name form-control" type="file" name="image2">
                        </div>
                        <div class="controls">
                                <label class="control-label">Image 3 (300x300) </label>
                                <input style="height: 54px;" class="billing-address-name form-control" type="file" name="image3">
                        </div>
                    </div>
                </div>
            </section>
            <div class="checkout-right-basket">
                <button class="submit check_out">Save</button>
            </div>
        </form>

    </div>
</div>
@endsection