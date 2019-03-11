

@extends('layout.content2')

@section('content')


    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="privacy about">
                <h3>Slideshows</h3>
                <div class="pull-right">
                        <a href="{{ url('/admin/slideshows/create') }}" class="submit check_out"> <i class="fa fa-plus"></i> New</a>
                </div>
                <div class="checkout-right">
                    <h4>Your shopping site contains: <span>({{count($slideshows)}}) slides</span></h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Url</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($slideshows as $slideshow)
                           <tr>
                               <td class="invert">{{$slideshow->id}}</td>
                               <td class="invert">
                                    <img style="width: 100px;" src="{{ url('/storage/uploads/' . $slideshow->image) }}" alt=" " class="img-responsive">
                                </td>
                               <td class="invert">{{$slideshow->title}}</td>
                               <td class="invert">{{$slideshow->description}}</td>
                               <td class="invert">{{$slideshow->url}}</td>
                       
                               <td class="invert">
                               <a style="margin-left: 15px; color: blue;" href="{{ url('/admin/slideshows/edit/' . $slideshow->id) }}"><span class="fa fa-edit fa-2x"></span></a>
                                   <a style="margin-left: 15px; color: red;" onclick="return confirm('Are you sure?')" href="{{url('/admin/slideshows/delete/' .  $slideshow->id)}}"><span class="fa fa-trash fa-2x"></span></a>
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