<x-app-layout>
    <form action="{{ route('two-factor.login') }}" method="post">
        @csrf

        <div>
            <label for="code">Code</label>
            <input type="text" name="code" id="code" value="{{ old('code') }}">

            @error('code')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Continue</button>
        </div>

    </form>

    <form action="{{ route('two-factor.login') }}" method="post">
        @csrf

        <div>
            <label for="recovery_code">Recovery Code</label>
            <input type="text" name="recovery_code" id="recovery_code" value="{{ old('recovery_code') }}">

            @error('recovery_code')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Continue</button>
        </div>

    </form>
</x-app-layout>
