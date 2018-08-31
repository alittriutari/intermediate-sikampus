@extends('layouts.app')
@section('content')
    <h5>Tambah Student</h5>
    <div class="row">
        <div class="col-md-6">

        
    <div id="card-advance" class="card card-default">
            <div class="card-body">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    @include('component.layouts.warning')
                            <div class="form-group">
                                <label>NIM</label>
                                <span class="help">e.g. "150010300"</span>
                                <input type="text" class="form-control" required="" name="nim">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <input type="text" class="form-control" required="" name="name">
                            </div>
                            <div class="form-group">
                                <label>DOB</label>
                                <span class="help">e.g. "25 Desember 1997"</span>
                                <input type="text" id="date" class="form-control" required="" name="dob">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <span class="help">e.g. "087760102xxx"</span>
                                <input type="text" class="form-control" required="" name="phone">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <textarea class="form-control" required="" name="address"> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <span class="help">e.g. "Mas Joko"</span>
                                <br>
                                <input type="radio" required="" name="gender" value="Laki-Laki">Laki-Laki
                                <input type="radio" required="" name="gender" value="Perempuan">Perempuan
                            </div>
                            <div class="form-group">
                                <label>Class</label>
                                <span class="help">e.g. "AB151"</span>
                                <select class="form-control" name="class_id">
                                    <option>Pilih Kelas</option>
                                </select>
                                <input type="text" class="form-control" required="" name="class_id">
                            </div>

                            <button class="btn btn-success btn-con" type="submit">Simpan</button>
                            <button class="btn btn-default btn-con" type="cancel">Batal</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection