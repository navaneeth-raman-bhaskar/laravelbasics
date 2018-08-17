<style>
    ul{
        list-style-type: none;
        width: 50%;
        margin:auto;
        margin-top: 100px;
    }
    a{
        display: block;
        height: 30px;
        text-align: center;
        text-decoration: none;
        color: darkred;
    }
</style>

<ul>
    <li><a href="{{route('email')}}">Email</a></li>
    <li><a href="{{route('reset')}}">Reset</a></li>
    <li><a href="{{route('login')}}">Login</a></li>
    <li><a href="{{route('register')}}">Register</a></li>
</ul>