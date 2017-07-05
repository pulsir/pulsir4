@extends('layouts.master')
  @section('content')
          <h2 class="text-center">Settings</h2>
          <form class="form-horizontal" role="form" action="/settings" method="post">
          {{ csrf_field() }}
           <input type="hidden" name="settings" value="true" />
            <div class="form-group">
              <label for="inputUsername1" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="username" id="inputUsername1" value="{{ Auth::user()->username }}" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword1" class="col-lg-2 control-label">Change Password</label>
              <div class="col-lg-10">
                <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">E-mail</label>
              <div class="col-lg-10">
                <input type="email" class="form-control" name="email" id="inputEmail1" value="{{ Auth::user()->email }}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAvatar1" class="col-lg-2 control-label">Avatar</label>
              <div class="col-lg-10">
                <a href="http://gravatar.com">
                  <img class="img-thumbnail" src="{{ asset('img/'.Auth::user()->image) }}" height="64" width="64" alt="Photo" id="inputAvatar1">
                </a>
                 <p>Change at <a href="http://gravatar.com">Gravatar.com</a>. <b><a href="http://go.pulsir.eu/grwhy">Why?</a></b></p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputDomain1" class="col-lg-2 control-label">Custom domain</label>
              <div class="col-lg-10">
               To set a custom domain, contact our <a href="mailto:say.hello@pulsir.eu">friendly support team</a>.

              </div>
            </div>
            <div class="form-group">
              <label for="inputCSS1" class="col-lg-2 control-label">Custom CSS</label>
              <div class="col-lg-10">
                <textarea class="form-control" name="cucss" id="inputCSS1" placeholder="Insert your custom CSS">{{ Auth::user()->customcss }}</textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <input type="submit" class="btn btn-success" value="Save changes" />
              </div>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputExport1" class="col-lg-2 control-label">Export data</label>
              <div class="col-lg-10">
                <a href="archive.php" id="inputExport1" class="btn btn-default">Request archive</a>
              </div>
            </div>
              <div class="form-group">
              <label for="inputRevoke1" class="col-lg-2 control-label">Account safety</label>
              <div class="col-lg-10">
                <a href="revoke-all-sessions.php" id="inputRevoke1" class="btn btn-default">Revoke all sessions</a>
              </div>
            </div>
                        <div class="form-group">
              <label for="inputDelete1" class="col-lg-2 control-label">Leaving us?</label>
              <div class="col-lg-10">
                <a href="delete.php" class="btn btn-danger">Delete account</a>
                <span class="help-block">We're sorry to see you go. :( Bye.</span>
              </div>
            </div>
          </form>
          @include('layouts.errors');
        </div>
      </div>
    </div>
@endsection