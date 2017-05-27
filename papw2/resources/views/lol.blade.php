hdhgdhg3

@if(Session::has('m'))

                   <?php 
                   $a = [];
                   $a = session()->pull('m');
                   ?>
                   
                   <div class="{{ $a [0] }}">
	                   <label for=""> {{ $a [1] }} </label> 

</div>
@endif