<!doctype HTML>
<html>
    <head>
        <title></title>
        <style>
        body {
            background: linear-gradient(120deg, #2980b9, #8e44ad);
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        .center{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
                    }

                    form{
                        background: gray;
                        padding: 20px;
                        border: 1px solid black; 
                        width: 110%;
                    }
                    form label{
                        padding-bottom: 5px;
                    }

            span{
                color: burlywood;
                font-size: 10px;
            }
        </style>
    </head>
    <body >
        <div class="center">
        <h3 style="text-align: center">{{$title}}</h3>
        <form action='{{$url}}' method="post" >
            @csrf
            <label >Name</label><br>
            <input type="text" name="name" value="{{$customer->name}}" >
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
    </div>
    </body>
</html>