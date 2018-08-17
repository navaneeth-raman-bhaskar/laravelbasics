<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<style>
.myform{
    width: 50%;
    margin: auto;
}
    span.err{
        color: #ff2c25;
       -webkit-transition: margin-left 2s;

    }
    span.err:hover{
        margin-left: 30px;
    }
</style>
<form class="myform" method="post" action="{{url('nikku/submit')}}">
  @csrf


    <div class="form-group" >
        <label for="firstname" class="">First Name</label>
        <input id="firstname" class="form-control" type="text" name="uname[]" value="<?=old('uname.0')?>">
     <span class="err">
        {{$errors->first('uname.0')}}
     </span>
    </div>
    <div class="form-group" >
        <label for="secname" class="">Last Name</label>
        <input id="secname" class="form-control" type="text" name="uname[]" value="<?=old('uname.1')?>">
    <span class="err">
        {{$errors->first('uname.1')}}
       </span>
    </div>

    <div class="form-group" >
        <label for="password" class="">Password</label>
        <input id="password" class="form-control" type="password" name="pass[]" value="<?=old('pass.0')?>">
    <span class="err">
        {{$errors->first('pass.0')}}
    </span>
    </div>
<div class="form-group" >
        <label for="confirmpass" class="">Confirm Password</label>
        <input id="confirmpass" class="form-control" type="password" name="pass[]" value="<?=old('pass.1')?>">
    <span class="err">
        {{$errors->first('pass.1')}}
    </span>
    </div>

    <div class="form-group">
        <label for="about" class="">About you</label>
        <textarea id="about" class="form-control" name="about" id="c" cols="30" rows="10" ><?=old('about')?></textarea>
    <span class="err">
         {{$errors->first('about')}}
    </span>
    </div>

    <div class="form-group"> <input class="form-control btn btn-primary" type="submit" value="OK">
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <pre>@php
   // dd($errors->get('pass.*'));
    @endphp
    </pre>
</form>