 @include('frontend.layouts.header')


<section class="meet-team clearfix">
    
        <div class="container">
            <div class="meet-team-text">
                <h2>meet the team</h2>
                
            </div>
           
        </div> 
</section>

<section class="team-member">
    <div class="container">
        
		
@foreach ($Ourteam as $row)		
		
		<div class="col-md-6 clearfix">
            <img src="{{ asset('public/uploads') . '/'.  $row->image }}" class="">
            <div class="meet-team-information">
                <h3>{{ $row->name }}</h3>
                <p>{{ isset($row->designation) ? $row->designation : 'N/A' }}</p>
                <p class="member-details">
                    {{ isset($row->description) ? $row->description : 'N/A' }}
                </p>
                <button>collapse</button>
            </div>
        </div>
		
 @endforeach         
		
		

    </div>  
</section>
 

@include('frontend.layouts.contactinfo') 
	
	
@include('frontend.layouts.footer')		