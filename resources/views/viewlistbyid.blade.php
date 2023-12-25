{{-- viewlistbyid.blade.php --}}

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Bicycle Details</h2>

        @if($bicycle)
            <p>Name: {{ $bicycle->name }}</p>
            <p>Logo: {{ $bicycle->logo }}</p>
            <p>Description: {{ $bicycle->desc }}</p>
            <p>Price: {{ $bicycle->harga }}</p>
            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
        @else
            <p>Bicycle not found.</p>
        @endif
    </div>
@endsection
