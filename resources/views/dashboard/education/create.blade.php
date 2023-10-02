@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <a href="{{route('education.index')}}" class="btn btn-secondary">
            << Back
        </a>
    </div>
    <form action="{{route('education.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Educational Place</label>
          <input type="text"
            class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Place" value="{{Session::get('judul')}}">
        </div>

        <div class="mb-3">
            <label for="info1" class="form-label">Educational Faculty</label>
            <input type="text"
              class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" placeholder="Educational Faculty" value="{{Session::get('info1')}}">
          </div>

          <div class="mb-3">
            <label for="info2" class="form-label">Study Program</label>
            <input type="text"
              class="form-control form-control-sm" name="info2" id="info2" aria-describedby="helpId" placeholder="Study Program" value="{{Session::get('info2')}}">
          </div>

          <div class="mb-3">
            <label for="info3" class="form-label">Score</label>
            <input type="text"
              class="form-control form-control-sm" name="info3" id="info3" aria-describedby="helpId" placeholder="Score" value="{{Session::get('info3')}}">
          </div>

          <div class="mb-3">
            <div class="row">
                <div class="col-auto">Start Date</div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm//yyyy" value="{{Session::get('tgl_mulai')}}">
                </div>
                <div class="col-auto">End Date</div>
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm//yyyy" value="{{Session::get('tgl_akhir')}}" >
                </div>
            </div>
          </div>

          <button class="btn btn-primary" name="simpan" type="submit">Save</button>
    </form>
@endsection
