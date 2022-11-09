@if(session () ->has('success'))
<div class="alert alert-success alert-block">
    <strong>{{session() ->get('success')}} </string>
</div>
 @endif

 @if(session() ->has('error'))
 <div class="alert alert-danger alert-block">
    <strong>{{ session() ->get('error')}} </strong>
 </div>
 @endif