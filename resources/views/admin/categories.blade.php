

@extends('layout.content2')

@section('content')


    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="privacy about">
                <h3>Categories</h3>
                <div class="pull-right">
                    <a href="{{ url('/admin/categories/create') }}" class="submit check_out"> <i class="fa fa-plus"></i> New</a>
                </div>
                <div class="checkout-right">
                    <h4>Your shopping site contains: <span>({{count($categories)}}) Categories</span></h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($categories as $category)
                           <tr>
                               <td class="invert">{{$category->id}}</td>
                               <td class="invert">{{$category->name}}</td>
                               <td class="invert">
                               <a style="margin-left: 15px; color: blue;" href="{{ url('/admin/categories/edit/' . $category->id) }}"><span class="fa fa-edit fa-2x"></span></a>
                                   <a style="margin-left: 15px; color: red;" onclick="return confirm('Are you sure (note if you delete category all the items will be deleted in that category)?')" href="{{url('/admin/categories/delete/' .  $category->id)}}"><span class="fa fa-trash fa-2x"></span></a>
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