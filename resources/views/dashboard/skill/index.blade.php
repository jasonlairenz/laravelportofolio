@extends('dashboard.layout')

@section('konten')

    <form action="{{route('skill.update')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Programming Language & Tools</label>
          <input type="text"
            class="form-control form-control-sm skill" name="_language" id="judul" aria-describedby="helpId" placeholder="" value="{{getMeta_value('_language')}}">
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">WORKFLOW</label>
            <textarea class="form-control summernote" rows="5" name="_workflow">
                {{getMeta_value('_workflow')}}
            </textarea>
          </div>
          <button class="btn btn-primary" name="simpan" type="submit">Save</button>
    </form>
@endsection

@push('skill-script')
<script>
    $(document).ready(function() {
        $('.skill').tokenfield({
            autocomplete: {
                source: [{!! $skill !!}],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });
    });
</script>
@endpush
