<h1>followers</h1>
@foreach($followers as $follower)
    <div class="row">
        <div class="col-md-6">
         {{ $follower->name }}
        </div>
    </div>
@endforeach


