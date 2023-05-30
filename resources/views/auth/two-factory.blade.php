<x-app-layout>
    @if(auth()->user()->two_factor_confirmed_at)
        <ul>
            @foreach(auth()->user()->recoveryCodes() as $code)
                <li>{{ $code }}</li>
            @endforeach
        </ul>

        <form action="{{ route('two-factor.disable') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Disable</button>
        </form>
    @elseif(auth()->user()->two_factor_secret)
        {!! auth()->user()->twoFactorQrCodeSvg() !!}

        <form action="{{ route('two-factor.confirm') }}" method="post">
            @csrf
            <label for="code">Code</label>
            <input type="text" name="code" required>
            <button type="submit">Confirm</button>
        </form>
    @else
        <form action="{{ route('two-factor.enable') }}" method="post">
            @csrf
            <button type="submit">Enable</button>
        </form>
    @endif
</x-app-layout>
