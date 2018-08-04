<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<style>
.myform{
    width: 50%;
    margin: auto;
}
    span.err{
        color:red;
    }
</style>
<form class="myform" method="post" action="{{url('nikku/submit')}}">
  @csrf
    <?php $msg=$errors->messages()?>

    <div class="form-group" >
        <label class="">First Name</label>
        <input class="form-control" type="text" name="uname[]" value="<?=old('uname.0')?>">
     <span class="err">@isset($msg['uname.0'][0])
             {{$msg['uname.0'][0]}}
         @endisset
     </span>
    </div>
    <div class="form-group" >
        <label class="">Last Name</label>
        <input class="form-control" type="text" name="uname[]" value="<?=old('uname.1')?>">
    <span class="err">@isset($msg['uname.1'][0])
            {{$msg['uname.1'][0]}}
        @endisset
       </span>
    </div>

    <div class="form-group" >
        <label class="">Password</label>
        <input class="form-control" type="password" name="pass[]" value="<?=old('pass.0')?>">
    <span class="err">@isset($msg['pass.0'][0])
            {{$msg['pass.0'][0]}}
        @endisset</span>
    </div>
<div class="form-group" >
        <label class="">Confirm Password</label>
        <input class="form-control" type="password" name="pass[]" value="<?=old('pass.1')?>">
    <span class="err">
        @isset($msg['pass.1'][0])
            {{$msg['pass.1'][0]}}
            @endisset
    </span>
    </div>

    <div class="form-group">
        <label class="">About you</label>
        <textarea class="form-control" name="about" id="c" cols="30" rows="10" ><?=old('about')?></textarea>
    <span class="err"><?php

        ?></span>
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
</form>