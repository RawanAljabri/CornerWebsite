<div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                @foreach($data as $item)
                <h1> {{$item->id}}</h1>
                <img src="{{$item->image}}" height="100" width="100">
                <h3> {{$item->title}} </h3>
                @endforeach
            </div>
        </div>
    </div>
</div></div>
