<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//CONFIGURACIÓN DE ROLES
if(!function_exists('getRole'))
{
    function getRole($role)
    {
 
        switch ($role) {
            case 0:
                return "Administrador";
                break;
            case 1:
                return "Normal";
                break;   
            case 2:
                return "Sin_permisos";
                break; 
            default:
                return "Invitado";
                break;
        }
 
    }
}

//INDEX - NO LOGIN
Route::get('/', function() {
        return View::make('hello');
    });
    
    Route::get('/test', 'HomeController@test');

//RUTAS DONDE SÓLO PUEDES ACCEDER CUANDO TE LOGUEAS   
Route::group(array('before' => 'auth'), function(){
    
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    
    //SI NO TIENES PERMISOS ERES REDIRECCIONADO
    Route::get('/redireccion', function() {
        return 'FUERA DE AQUÍ!!, NO TIENES PERMISOS SUFICIENTES';
    });
    
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
   
   //RUTAS DE LA APLICACIÓN GENERAL
    
    Route::get('/home',array("before" => "roles:0-1,/redireccion", function() {
        return View::make('layout.main');
    }));
    
    Route::get('/logout', array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut',
    ));
    
    //RUTAS DE LA APLICACIÓN PARA ADMINISTRADOR
   
    Route::get('/crear-cuenta', array(
        "before" => "roles:0,/redireccion",
        'as'     => 'account-create',
        'uses'   => 'AccountController@getCreate'
    ));
    
    Route::post('/crear-cuenta', array(
         'as'     => 'account-create-post',
         'uses'   => 'AccountController@postCreate'
    ));
    
 //AÑADE AQUÍ NUEVAS RUTAS   
    
});

//RUTAS DONDE NO NECESITAS ESTAR LOGUEADO
Route::group(array('before' => 'guest'), function(){
   
    Route::get('login', array(
            //'as'   => 'account-sign-in',
            'uses' => 'AccountController@getSignIn'
        ));
    Route::get('/account/activate/{code}', array(
        'as'   => 'account-activate',
        'uses' => 'AccountController@getActivate'
    ));
    
    //SEGURIDAD PARA LOGIN
    Route::group(array('before' => 'csrf'), function(){
             
        Route::post('login', array(
            //'as'   => 'account-sign-in-post',
            'uses' => 'AccountController@postSignIn'
        ));
        
    });
    
    /*  
    Route::get('/account/activate/{code}', array(
        'as'   => 'account-activate',
        'uses' => 'AccountController@getActivate'
    ));
    */ 
    
});

/*I remember a time
My frail, virgin mind
Watched the crimson sunrise
Imagined what it might find
Life was filled with wonder
I felt the warm wind blow
I must explore the boundaries
Transcend the depth of winter's snow

Innocence caressing me
I never felt so young before
There was so much life in me
Still I longed to search for more

But those days are gone now
Changed like a leaf on a tree
Blown away forever
Into the cool autumn breeze
The snow has now fallen
And my sun's not so bright
I struggle to hold on
With the last of my might

In my den of inequity
Viciousness and subtlety
Struggle to ease the pain
Struggle to find the same

Ignorance surrounding me
I've never been so filled with fear
All my life's been drained from me
The end is drawing near...

[III. Carpe Diem]

"Carpe diem
Seize the day"

I'll always remember
The chill of November
The news of the fall
The sounds in the hall
The clock on the wall
Ticking away
"Seize the Day"
I heard him say
Life will not always be this way
Look around
Hear the sounds
Cherish your life
While you're still around

("Gather ye rosebuds while ye may)
(Old Time is still a-flying;)
(And this same flower that smiles today)
(Tomorrow will be dying")

We can learn
From the past
But those days
Are gone
We can hope
For the future
But there might not be one

The words stuck in my mind
Alive from what I've learned
I have to seize the day
To home I returned

Preparing for her flight
I held with all my might
Fearing my deepest fright
She walked into the night
She turned for one last look
She looked me in the eye
I said, "I Love You...
Good-bye"

("It's the most awful thing you'll ever hear")
("If you're lying to me...")
("Oh, you dearly love her")
("...just have to leave...)
(All our lives")
("Seize the day!")
("Something happened")
("Gather ye rosebuds while ye may")
("She was killed")

[IV. The Darkest Of Winters]

[Instrumental]

[V. Another World]

So far or so it seems
All is lost
With nothing fulfilled
Off the pages and the
T.V. screen
Another world
Where nothing's true

Tripping through
The life fantastic
Lose a step
And never get up
Left alone
With a cold blank stare
I feel like giving up

I was blinded by a paradise
Utopia high in the sky
A dream that only drowned me
Deep in sorrow, wondering why

Oh come let us adore him
Abuse and then ignore him
No matter what
Don't let him be
Let's feed upon his misery
Then string him up for all the world to see

I'm sick of all
Your hypocrites
Holding me at bay
And I don't need
Your sympathy
To get me through the day

Seasons change and so can I
Hold on Boy
No time to cry
Untie these strings
I'm climbing down
I won't let them push me away

Oh come let us adore him
Abuse and then ignore him
No matter what
Don't let him be
Let's feed upon
His misery
Now it's time for them
To deal with me

[VI. The Inevitable Summer]

[Instrumental]

[VII. The Crimson Sunset]

I'm much wiser now
A lifetime of memories
Run through my head
They taught me how
For better or worse
Alive or dead
I realize
There's no turning back
Life goes on
The offbeaten track

I sit down with my son
Set to see the Crimson Sunset
(Gather ye rosebuds while ye may)
Many years have come and gone
I've lived my life, but now must move on
(Gather ye rosebuds while ye may)
He's my only one
Now that my time has come
Now that my life is done
We look into the sun
"Seize the day
And don't you cry
Now it's time
To say good-bye
Even though
I'll be gone
I will live on
Live on" */