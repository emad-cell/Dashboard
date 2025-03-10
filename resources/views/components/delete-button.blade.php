<form action="{{$href}}" id="form-{{ $id }}" method="post"
    class="d-inline">
    @csrf
    @method('delete')
    <button onclick="confirmDelete({{ $id }})" type="button" class="btn btn-sm btn-danger"><i
            class="fe fe-trash-2 fa-2x"></i></button>
</form>
