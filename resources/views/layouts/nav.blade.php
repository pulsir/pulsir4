@if(Auth::check())
<div class="page-header dropdown">
            <a href="/">
              <img src="https://d.pulsir.eu/assets/midres-final2-logo.png" width="36" height="34" class="pulsirlogo">
            </a>
            <a class="pull-right btn btn-primary" data-toggle="dropdown">
              <i class="icon-caret-down"></i>
            </a>
            <ul class="dropdown-menu pull-right">
              <li><a href="/posts">New posts</a></li>
              <li><a href="/{{ Auth::user()->username }}">My profile</a></li>
              <li><a href="/logout">Log out</a></li>
              <li><a href="/settings">Settings</a></li>
              <hr>
              @if(Auth::user()->developer)
              <li><a href="/widgets">Widgets</a></li>
              <hr>
              @endif
              <li><a href="http://support.pulsir.eu">Support</a></li>
              <li><a href="http://legal.pulsir.eu">Legal</a></li>
            </ul>
            <a class="btn btn-warning pull-right" href="/posts/create">
              <i class="icon-plus"></i>
            </a>
          </div>
@else 
<div class="page-header dropdown">
            <a href="/">
              <img src="https://d.pulsir.eu/assets/midres-final2-logo.png" width="36" height="34" class="pulsirlogo">
            </a>
            <a class="pull-right btn btn-primary" data-toggle="dropdown">
              <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu pull-right">
              <li><a href="/posts">New posts</a></li>
              <li><a href="/register">Sign up</a></li>
              <li><a href="/login">Log in</a></li>
              <li><a href="/support">Support</a></li>
              <li><a href="/legal">Legal</a></li>
            </ul>
             <a class="btn btn-warning pull-right" href="/login">
              Log in
            </a>
          </div>
@endif