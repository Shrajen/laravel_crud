<!doctype HTML>
<html>
    <head>
        <title></title>
        <style>
            span{
                color: red;
            }
        </style>
    </head>
    <body>
        <form action='{{url('/')}}/form' method="post" style="border: 1px solid black; padding:10px; width:50%">
            @csrf
            <label>Name</label><br>
            <input type="text" name="name" value="{{old('name')}}">
            <br>
            <span >
                @error('name')
                {{$message}}
                @enderror
            </span>
            <br>
            <br>
            <label>Email</label>
            <br><input type="text" name="email">
            <br><span>
                @error('email')
                {{$message}}
                @enderror
            </span>
            <br>
            <br>
            <label>Password</label>
            <br><input type="password" name="password">
            <br><span>
                @error('password')
                {{$message}}
                @enderror
            </span>
            <br>
            <br>
            <label>Confirm Password</label>
            <br> <input type="password" name="confirm_password">
            <br><span>
                @error('confirm_password')
                {{$message}}
                @enderror
            </span>
            <br>
            <br>
            <button style="background-color: green; border:0px;padding: 5px; color: white">
                Submit
            </button>
        </form>
    </body>
</html>