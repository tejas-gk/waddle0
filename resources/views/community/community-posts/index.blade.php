<h1>community</h1>
<a href="/">home</a>
@if(!Auth::guest())
<form action="c/store-post" method="post" enctype="multipart/form-data" wire:submit.prevent="post">
    <textarea type="text" name="post" placeholder="post a post" autofocus style="resize:none;"></textarea><br>
    <input type="file" name="postImage" id="postImage">
    {{csrf_field()}}
    <input type="submit" name="submit" value="submit">
</form>
@endif