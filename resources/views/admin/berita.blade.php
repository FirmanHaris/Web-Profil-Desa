@extends('template.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Berita</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <!-- Borderless table start -->
                <!-- Default table border table start-->
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary d-inline-flex" data-bs-toggle="modal"
                                data-bs-target="#formAdd"><i class="ti ti-plus"></i>Tambah</button>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Isi Berita</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>#Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-light-danger"><i
                                                        class="ti ti-trash"></i></button>
                                                <button type="button" class="btn btn-icon btn-light-warning"><i
                                                        class="ti ti-edit"></i></button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            {{-- modal add --}}
                            <div class="modal fade" id="formAdd" tabindex="-1"
                                aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Form Tambah Berita
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"> </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="inputEmail4">Judul Berita</label>
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Judul">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="inputPassword4">Kategori</label>
                                                        <select id="inputState" class="form-select">
                                                            <option selected>select</option>
                                                            <option>Large select</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="inputAddress2">Isi Berita</label>
                                                    <textarea name="isi_berita" id="isi_berita" class="form-control" cols="30" rows="10"></textarea>
                                                    <script>
                                                        CKEDITOR.replace('isi_berita');
                                                    </script>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="inputAddress">Address</label>
                                                    <input type="file" class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="inputCity">City</label>
                                                        <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="form-label" for="inputState">State</label>
                                                        <select id="inputState" class="form-select">
                                                            <option selected>select</option>
                                                            <option>Large select</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label class="form-label" for="inputZip">Zip</label>
                                                        <input type="text" class="form-control" id="inputZip">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">Check me
                                                            out</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign in</button>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- /modal add --}}
                        </div>
                    </div>
                </div>
                <!-- Default table border table end-->
            </div>
        </div>
    </div>
@endsection
