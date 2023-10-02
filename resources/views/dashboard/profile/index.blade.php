@extends('dashboard.layout')

@section('konten')
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">

            {{-- Profile Coloumn --}}
            <div class="col-5">
                <h3>Profile</h3>
                {{-- foto profile --}}
                @if (getMeta_value('_foto'))
                    <img style="max-width:100px;max-height:100px" src="{{ asset('foto') . '/' . getMeta_value('_foto') }}"
                        alt="">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Photo Profile</label>
                    <input type="file" class="form-control form-scontrol-sm" name="_foto" id="_foto">
                </div>


                {{-- City --}}
                <div class="mb-3">
                    <label for="_kota" class="form-label">City</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_kota" id="_kota" value="{{ getMeta_value('_kota') }}">
                </div>

                {{-- province --}}
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Province</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_provinsi" id="_provinsi" value="{{ getMeta_value('_provinsi') }}">
                </div>

                {{-- Phone Number --}}
                <div class="mb-3">
                    <label for="_nohp" class="form-label">Phone Number</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_nohp" id="_nohp" value="{{ getMeta_value('_nohp') }}">
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_email" id="_email"
                        value="{{ getMeta_value('_email') }}">
                </div>
            </div>

            {{-- Social Media Coloumn --}}
            <div class="col-5">

                <h3>Social Media</h3>
                {{-- Facebook --}}
                <div class="mb-3">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_facebook" id="_facebook" value="{{ getMeta_value('_facebook') }}">
                </div>

                {{-- Twitter --}}
                <div class="mb-3">
                    <label for="_twitter" class="form-label">Twitter(X)</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_twitter" id="_twitter" value="{{ getMeta_value('_twitter') }}">
                </div>

                {{-- Linkedin --}}
                <div class="mb-3">
                    <label for="_linkedin" class="form-label">Linkedin</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_linkedin" id="_linkedin" value="{{ getMeta_value('_linkedin') }}">
                </div>

                {{-- github --}}
                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" class="form-control form-scontrol-sm" name="_github" id="_github" value="{{ getMeta_value('_github') }}">
                </div>
            </div>

        </div>




        <button class="btn btn-primary" name="simpan" type="submit">Save</button>
    </form>
@endsection
