@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div class="container">
    	        <div class="row">
    	            <div class="col-md-6 text-center col-md-offset-3">
                        @if(Session::has('message'))
                        <div class="alert alert-success fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Seccess:</strong>{{ Session::get('message') }}! 
                        </div>
                        @endif
    	            </div>
    	        </div>
</div>