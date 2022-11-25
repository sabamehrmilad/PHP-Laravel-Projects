
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل کار گزاری خوارزمی</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: #007bec;
            font-family: IRANSansWeb;
            color: #fff;
            font-size: 1.5em;
            font-weight: 400;
            text-align: right;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            direction: rtl;
        }

        .main {
            position: relative;
            background: #ffffff;
            color: #0e5698;
            display: inline-block;
            padding: 15px 30px;
            margin: 0 auto;
            border-radius: 7px;
            border-color: white;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.2);
            min-height: 250px;
            min-width: 400px;
        }

        h1 {

            font: 30px sans-serif;
            text-align: center;
            margin: 25px 10px;
            font-weight: bold;
            color: #4a96db;
        }

        input,
        button,
        select,
        textarea {
            display: block;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 10px;
            line-height: 28px;
            height: 30px;
            padding: 0 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 15px;
        }

        button {
            background: #007bec;
            color: #fff;
            line-height: 40px;
            height: 40px;
            font-size: 30px;
            border: 0;
        }

        button:hover {
            opacity: 0.7;
            cursor: pointer;
        }
        .title{
            background-color: #1ab7ea;

            border-radius: 20px;
            width: 500px;


        }
        #btn{
            background-color: #1ab7ea;
            border-radius: 20px;
            width: 100px;
        }
        #frm{


        }


    </style>
</head>
<body>



<div class="container" >
    <form method="post" action="{{route('login')}}">
        @csrf
        <div  class="title" style=" background-color: #1ab7ea;  border-radius: 20px;">
            <h1 style=" color: white; font-family: IRANSansWeb;">کارگزاری خوارزمی</h1>
        </div>

        <p>
            <label>نام کاربری</label>
            <input type="text" id="user" name="email"  placeholder="username"  required>
        </p>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror

        <p>
            <label>رمز عبور</label>
            <input type="password" id="pass" name="password" placeholder="password" required>
        </p>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        <p>
            <button type="submit"  name="login" value="login" style="font-family: IRANSansWeb">ورود</button>
        </p>
    </form>
</div>


</body>

</html>
