<div>

    <h2>Add New User</h2>
    {{-- @if ($errors->any())
@foreach ($errors->all() as $error)
<div>
    {{$error}}
</div>
    
@endforeach
    
@endif --}}

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your name" name="username">
            <span style="color:red">
                @error('username')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter your email" name="email">
            <span style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter your city" name="city">
            <span style="color:red">
                @error('city')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>
