<x-admin-layout>
    <x-slot name="title">
        {{ $title ?? config('app.name') }}
    </x-slot>

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">kategori</th>
            <th scope="col">nama</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td></td>
            <td> </td>
            <td></td>
          </tr>
        </tbody>
      </table>
</x-admin-layout>
{{-- @includeIf('kategori.form')
{{-- @push('scripts')
<script>
   let table;

   $(function() {
      table = $('.table').DataTable({
         processing: true,
         autoWidth: false
    //      ajax:{ 
    //          url:'{{ route('kategori.data') }}',
    //   }
        });

    });

    function addForm() {
        $('#modal-form').modal('show');
        $('#modal-form form .modal-title').text('Tambah Kategori');
    }
</script> --}}
{{--  
@endpush --}} --}}