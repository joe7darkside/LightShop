@extends('layout.content2') 
@section('content')

<div class="ads-grid_shop" style="margin-bottom: 80px;">
    <div class="row container" style="float: none; margin: 0 auto;">
        <form action="{{ isset($is_create) ? url('/admin/slideshows/create') : url('/admin/slideshows/edit/' . $slideshow->id) }}" method="post" enctype="multipart/form-data" class="creditly-card-form agileinfo_form">
            @csrf
            <section class="creditly-wrapper wrapper">
                <div class="information-wrapper">
                    <div class="first-row form-group">
                        <div class="controls">
                            <label class="control-label">Slideshow title: </label>
                            <input class="billing-address-name form-control" type="text" name="title" placeholder="title" value={{ isset($is_create) ? '' : $slideshow->title }}>
                        </div>
                        <div class="controls">
                                <label class="control-label">Slideshow url: </label>
                                <input class="billing-address-name form-control" type="text" name="url" placeholder="ex: http link to item" value={{ isset($is_create) ? '' : $slideshow->url }}>
                        </div>
                        <div class="controls">
                                <label class="control-label">Slideshow Description: </label>
                                <textarea style="width: 100%;" class="billing-address-name form-control" name="description" placeholder="some informations">{{isset($is_create) ? '' : $slideshow->description}}</textarea>
                        </div>
                        <div class="controls">
                                <label class="control-label">Image (1680x750) </label>
                                <input style="height: 54px;" class="billing-address-name form-control" type="file" name="image">
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