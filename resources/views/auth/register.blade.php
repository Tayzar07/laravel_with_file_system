<x-layout>
    <h1 class="w-50 mx-auto text-center mt-5 text-primary">Register Form</h1>
    <form style="width: 450px" class="clearfix mx-auto mt-4  mb-5 border border-2 border-primary p-5 rounded-3">
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter your name">
        </div>
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputEmail1">User Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter user name">
        </div>
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary float-end">Submit</button>
    </form>
</x-layout>
