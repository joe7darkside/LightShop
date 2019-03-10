@extends('layout.content2') 
@section('content')

<div class="ads-grid_shop" style="margin-bottom: 80px;">
    <div class="row container" style="float: none; margin: 0 auto;">
        <form action="{{ isset($is_create) ? url('/admin/categories/create') : url('/admin/categories/edit/' . $category->id)}}" method="post" class="creditly-card-form agileinfo_form">
            @csrf
            <section class="creditly-wrapper wrapper">
                <div class="information-wrapper">
                    <div class="first-row form-group">
                        <div class="controls">
                            <label class="control-label">Category name: </label>
                            <input class="billing-address-name form-control" type="text" name="name" placeholder="name" value={{ isset($is_create) ? '' : $category->name }}>
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