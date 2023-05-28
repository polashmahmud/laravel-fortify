<x-app-layout>
    <form action="{{ route('user-password.update') }}" method="post">
        @csrf
        @method('PUT')

        @if (session('status') == 'password-updated')
            <p>Your password has been updated.</p>
        @endif

        <div>
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password">

            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">

            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">

            @error('password_confirmation')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <div>
            <button type="submit">Reset password</button>
        </div>
    </form>
</x-app-layout>