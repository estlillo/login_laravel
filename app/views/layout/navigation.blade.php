<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">       
            <li><a href="{{URL::to('/home')}}"><i class="fa fa-home fa-2x"></i> </a></li> 
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Test <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('account-create') }}">Test 1</a></li>
                        <li><a href="#">Test 2</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                         @if(!Auth::check())
                        <li><a href="#"><i class="fa fa-sign-in fa-2x"> Ingresar</i></a></li>
                         @endif
                        <li><a href="{{ URL::route('account-sign-out') }}"><i class="fa fa-sign-out fa-2x"> Salir</i></a></li>   
                    </ul>
             </li>
          </ul>
            <script>
                $('.dropdown-toggle').dropdown();
            </script>
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<!--
I saw a white light
Shining there before me
And walking to it
I waited for the end
A final vision
Promising salvation
A resurrection
For a fallen man

Do you still wait for your God
And the symbol of your faith?

I can free you from this Hell and misery
You should never be ashamed my son
I can give you power beyond anything
Trust me you will be the chosen one

I was forgotten
A body scorned and broken
My soul rejected
Tainted by his blood

Beyond redemption
A sinner not worth saving
Forever taken
From the one I loved

Do I still wait for my God
And a symbol of my faith?

I can lead you down the path and back to life
All I ask is that you worship me
I can help you seek revenge and save yourself
Give you life for all eternity

Servants of the fallen
Fight to pave the way
For their saviour's calling
Of this wicked day

Through a veil of madness
With a vicious blade
One man rises up
Standing in their way

Redemption
Redemption for humanity

--> 