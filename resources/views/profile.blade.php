<x-app-layout>
    <form action="{{ route('user-profile-information.update') }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ auth()->user()->name }}">

            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="{{ auth()->user()->username }}">

            @error('username')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ auth()->user()->email }}">
            
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">update</button>
        </div>
    </form>
</x-app-layout>