@extends('templates.admin')
@section('admin_title')
    เข้าสู่ระบบ
@endsection
@section('admin_content')
    <div class="uk-margin uk-flex-center" uk-grid>
        <div class="uk-card uk-card-default uk-card-body uk-width-2-3">
            <h3 class="uk-card-title">เข้าสู่ระบบ@แอดมิน</h3>
            <div class="uk-margin">
                <form>
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="username">USERNAME:</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="username" name="username" type="text" placeholder="username" required>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="password">PASSWORD:</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="password" name="password" type="password" placeholder="username" required>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <button type="submit" class="uk-button uk-button-primary">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection