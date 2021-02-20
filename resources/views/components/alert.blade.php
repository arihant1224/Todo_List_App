<div>
    @if(session()->has('success'))
        {{session()->get('success')}}
    @elseif($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
</div>