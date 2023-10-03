@extends('dashboard.layout')

@section('konten')
    <form action="{{ route('pagesetting.update') }}" method="POST">
        @csrf
        {{-- about --}}
        <div class="form-group row">
            <label class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="page_about">
                    <option value="">-Select-</option>
                    @foreach ($pageData as $item)
                        <option value="{{ $item->id }}" {{ getMeta_value('page_about') == $item->id ? 'selected' : '' }}>
                            {{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Interest --}}
        <div class="form-group row">
            <label class="col-sm-2">Interest</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="page_interest">
                    <option value="">-Select-</option>
                    @foreach ($pageData as $item)
                        <option value="{{ $item->id }}" {{ getMeta_value('page_interest') == $item->id ? 'selected' : '' }}>
                            {{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- award --}}
        <div class="form-group row">
            <label class="col-sm-2">Award</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="page_award">
                    <option value="">-Select-</option>
                    @foreach ($pageData as $item)
                        <option value="{{ $item->id }}" {{ getMeta_value('page_award') == $item->id ? 'selected' : '' }}>
                            {{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">Save</button>
    </form>
@endsection
