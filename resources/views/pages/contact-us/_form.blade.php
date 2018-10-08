<div class="contact-us-form mt-30">
    {{ Form::open(['url' => $route, 'id' => 'contact-form']) }}
    <div class="field mb-30">
        @php
            $icon = ($errors->has('name'))? 'has-icons-right':'';
            $fontawesome = ($errors->has('name'))? '<span class="icon is-small is-right has-text-warning">
                         <i class="fas fa-exclamation-triangle"></i>
                        </span>':'';
            $message = ($errors->has('name'))? '<p class="help is-danger">'.$errors->first('name').'</p>':'';
        @endphp
        <label class="label">姓名 :</label>
        <div class="control has-icons-left {{ $icon }}">
            <input class="input" name="name" type="text" placeholder="姓名 (必填)">
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
            {!! $fontawesome !!}
        </div>
        {!! $message !!}
    </div>

    <div class="field mb-30">
        @php $icon = ($errors->has('email'))? 'has-icons-right':''; $fontawesome = ($errors->has('email'))? '<span class="icon is-small is-right has-text-warning">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        </span>':''; $message = ($errors->has('email'))? '
                <p class="help is-danger">'.$errors->first('email').'</p>':'';
        @endphp
        <label class="label">電子郵件 :</label>
        <div class="control has-icons-left {{ $icon }}">
            <input class="input" name="email" type="email" placeholder="電子郵件 (必填)">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>

            {!! $fontawesome !!}

        </div>
        {!! $message !!}
    </div>

    <div class="field mb-30">
        @php $icon = ($errors->has('subject'))? 'has-icons-right':''; $fontawesome = ($errors->has('subject'))? '<span class="icon is-small is-right has-text-warning">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                        </span>':''; $message = ($errors->has('subject'))? '
                <p class="help is-danger">'.$errors->first('subject').'</p>':'';
        @endphp
        <label class="label">主題 :</label>
        <div class="control has-icons-left {{ $icon }}">
            <input class="input" name="subject" type="text" placeholder="主題 (必填)">

            <span class="icon is-small is-left">
                <i class="fab fa-twitch"></i>
            </span>

            {!! $fontawesome !!}
        </div>
        {!! $message !!}
    </div>

    <div class="field mb-30">
        @php $icon = ($errors->has('content'))? 'has-icons-right':''; $fontawesome = ($errors->has('content'))? '<span class="icon is-small is-right has-text-warning">
                <i class="fas fa-exclamation-triangle"></i>
                </span>':''; $message = ($errors->has('content'))? '
                <p class="help is-danger">'.$errors->first('content').'</p>':'';
        @endphp
        <label class="label">您的建議 :</label>
        <div class="control has-icons-left {{ $icon }}">
            <textarea class="textarea" name="content" placeholder="您的建議 (選填)"></textarea>

            <span class="icon is-small is-left pt-10">
                <i class="fas fa-comment"></i>
            </span>

            {!! $fontawesome !!}
        </div>
        {!! $message !!}
    </div>

    <div class="field mb-30">
        <label class="label">請點我不是機器人 :</label>
        <div class="control">
            {!! NoCaptcha::renderJs('zh-TW') !!}
            {!! NoCaptcha::display() !!}
        </div>
    </div>

    <div class="field mb-30">
        <label class="label"></label>
        <div class="control">
            <button type="submit "class="button is-success is-large is-fullwidth">儲存, 並提交</button>
        </div>
        {{ $errors->first('g-recaptcha-response') }}
    </div>

    {{ Form::close() }}
</div>

<script type="text/javascript">
    var recaptchaCallback = function() {
        console.log("grecaptcha is ready!");
    };
</script>
