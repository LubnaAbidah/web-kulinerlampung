<x-templates.default>
    <x-slot name="title">Tambah Tempat Kuliner</x-slot>

    <form action="{{ route('place.store') }}" class="card" method="post" enctype="multipart/form-data">
        @csrf
       <div class="card-header">
           <h1 class="card-title">
               Tambah Data Tempat Kuliner
           </h1>
           </div>
           <div class="card-body">
                <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror" placeholder="Masukkan nama kategori"
                            placeholder="Masukkan nama tempat kuliner" value="{{ old('name') }}">

                            @error('name')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
                <div class="form-group mt-2">
                            <label for="">Deskripsi</label>
                            <textarea name="description" id="" rows="3" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Deskripsi tempat kuliner">{{ old('description')}}</textarea>

                            @error('name')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
            </div>
    </form>

</x-templates.default>