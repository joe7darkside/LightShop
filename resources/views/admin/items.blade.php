

@extends('layout.content2')

@section('content')


    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="privacy about">
                <h3>Items</h3>
                <div class="pull-right">
                        <a href="{{ url('/admin/items/create') }}" class="submit check_out"> <i class="fa fa-plus"></i> New</a>
                </div>
                <div class="checkout-right">
                    <h4>Your shopping site contains: <span>({{count($items)}}) items</span></h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($items as $item)
                           <tr>
                               <td class="invert">{{$item->id}}</td>
                           <td class="invert-image"><img style="width: 100px;" src="{{ url('/storage/uploads/' . $item->image1) }}" alt=" " class="img-responsive"></td>
                               <td class="invert">{{$item->name}}</td>
                               <td class="invert">{{$item->categoryDetails->name}}</td>
                               <td class="invert">{{$item->description}}</td>
                               <td class="invert">${{$item->price}}</td>
                               <td class="invert">{{$item->quantity}}</td>
                               <td class="invert">
                               <a style="margin-left: 15px; color: blue;" href="{{ url('/admin/items/edit/' . $item->id) }}"><span class="fa fa-edit fa-2x"></span></a>
                                   <a style="margin-left: 15px; color: red;" onclick="return confirm('Are you sure?')" href="{{url('/admin/items/delete/' .  $item->id)}}"><span class="fa fa-trash fa-2x"></span></a>
                               </td>



                           </tr>

                       @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>


@endsection