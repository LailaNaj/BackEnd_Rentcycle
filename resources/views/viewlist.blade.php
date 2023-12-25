{{-- viewlist.blade.php --}}

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">List of Bicycles</h2>

        @if($bicycles->isEmpty())
            <p>No bicycles available.</p>
        @else
            <ul>
                @foreach($bicycles as $bicycle)
                    <li>
                        <a href="{{ route('viewlistbyid', ['id' => $bicycle->id]) }}">
                            {{ $bicycle->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
