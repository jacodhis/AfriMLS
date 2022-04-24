@if(session('success'))

 <div class="alert alert-success btn-sm">
    {{session('success')}}
 </div>
@endif

@if(session('error'))
<div class="alert alert-danger btn-sm">
{{session('error')}}
</div>
@endif
