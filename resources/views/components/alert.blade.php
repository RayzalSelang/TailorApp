@props(['label'])

@if ($message = Session::get($label))
    <div class="alert alert-{{ $label === 'error' ? 'danger' : $label }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon {{ $label === 'error' ? 'fas fa-ban' : 'fas fa-check' }}"></i> Alert!</h5>
        {{ $message }}
    </div>
@endif
