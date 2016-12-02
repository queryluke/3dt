@if(session('alert'))
    <div class="container">
        <div class="row">
            <div class="alert alert-{{session('alert.type')}}" id="flash-message">
                <p>{{ session('alert.message') }}</p>
            </div>
        </div>
    </div>
@endif