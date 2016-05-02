<div class="container">
    <div class="row">
        @if(count($notes)===0)
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        
                            <h1 >Hey, {{$user->name}}.</h1>
                            <h5 class="muted">Start noting</h5>
                    </div>
                </div>
            </div>
        @else
            @foreach ($notes as $note)
                <!-- If you are reading this, please don't post it on /r/programminghorror. I konw it's 
                terrible. -->
                <!-- I will probably look at this couple years from now, and laugh -->
                @if($counter % 3 == 0)
                    @if($counter != 0)
                    </div>
                    @endif
                    <div class="row">
                @endif  
                <div class="col-md-4 ">
                    <div class="card default-color white-text hoverable">
                        <div class="card-content">
                            
                            <span class="card-title">{{$note->title}}</span>
                            <hr>
                            <p>{{$note->body}}</p>
                        </div>
                        <div class="card-action">
                            <a class=""><i class="material-icons white-text">delete</i></a>
                        </div>
                    </div>   
                </div>
            <?php $counter += 1; ?>
            @endforeach
        @endif
    </div>
</div>