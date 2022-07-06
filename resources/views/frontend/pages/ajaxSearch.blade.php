@foreach($data as $pro)
    <div class="media">
        <a href="{{route('detail',$pro->id)}}" class="pull-left">
            <img src="{{url('uploads')}}/images/{{$pro->image}}" alt="" width="50px" height="40px" class="media-object">
        </a>
        <div class="media-body" >
            <h4 class="media-heading"><a href="{{route('detail',$pro->id)}}">{{$pro->name}}</a></h4>
            <p>{{Str::words(strip_tags($pro->description), 7)}}</p>
        </div>
    </div>

@endforeach