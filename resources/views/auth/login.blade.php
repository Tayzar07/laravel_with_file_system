<x-layout>
    <h1 style="margin-top: 100px" class="w-50 mx-auto text-center text-primary">Login Form</h1>
    <form action="/login" method="POST" style="width: 450px; margin-bottom: 150px" class="clearfix mx-auto mt-4 border border-2 border-primary p-5 rounded-3">
        @csrf
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" value="{{ old('email') }}" name="email">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
    </form>
</x-layout>
