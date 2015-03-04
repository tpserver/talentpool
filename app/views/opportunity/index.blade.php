@include('common.head', array('title', 'GradList - Frequently Asked Questions') )
<body>
          @include('common.employeer_top_menu')
	  <div id="main_container">
		    <h1>Opportunities</h1>
	  		
		    <table class="table table-hover table-bordered table-striped">
			      <tr>
				  <th>Name</th>
				  <th>Work Type</th>
				  <th>Sectors</th>
				  <th>Location</th>
			      </tr>
			      @foreach($opportunities as $opportunity)
			      <tr>
				  <td>{{link_to_route('opportunity.show', $opportunity->name, $opportunity->id)}}</td>
				  <td>{{$opportunity->workType->name}}</td>
				  <td>
				      @foreach($opportunity->workSector as $workSector)
					<div class="round_box" style="background: {{$workSector->category['colour']}}" >{{$workSector->name}}</div>
				      @endforeach
				  </td>
				  <td>
				      @foreach($opportunity->locations as $location)
					  <div class="round_box experience" >{{$location->name}}</div>
				      @endforeach
				  </td>
		  
			      </tr>
			      @endforeach
		    </table>
		    <a href="{{route('opportunity.create')}}"><div class="red_button" id="new_campaign_btn">{{trans('New Opportunity')}}</div></a>
		    <div id="spacer"></div>
	  </div>
	  <div id="footer"></div>
	  @include('common.bottom')
</body>
</html>
