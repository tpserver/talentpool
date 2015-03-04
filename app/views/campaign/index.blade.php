@include('common.head', array('title', 'GradList - Frequently Asked Questions') )
<body>
@include('common.employeer_top_menu')
<div id="main_container">
            <h1>{{trans('Campaigns')}}</h1>
            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <th>{{trans('Name')}}</th>
                    <th>{{trans('Sent On')}}</th>
                    <th>{{trans('Opportunity')}}</th>
                    <th>{{trans('Talent Pool')}}</th>
                    <th>{{trans('Campaign Type')}}</th>
                    <th>{{trans('Emails Sent')}}</th>
                    <th>{{trans('Open Rate')}}</th>
                </tr>
                <?php
                if(count($campaigns)>0)
                {
                ?>
                @foreach($campaigns as $campaign)
                <tr>
                    <td>{{$campaign->name}}</td>
                    <td>{{ date("l jS F",strtotime($campaign->updated_at)) }}</td>
                    
                    <td>{{$campaign->opportunity->name}}</td>
                    <td>{{$campaign->candidatesPool->name}}</td>
                    <td><?php if($campaign->campaign_type==1){echo 'Fixed Price';}else{echo 'Guranteed Hire Price';}?></td>
                    <td>{{$campaign->emails_sent}}</td>
                    <td>{{$campaign->open_rate}}%</td>
                </tr>
                @endforeach
                <?php
                }
                else {
                ?>
                <tr>
                    <td colspan="6">
                        No Campaign created yet!
                    </td>
                </tr>
                <?php
                }
                ?>
                
            </table>
            <a href="{{route('new-campaign.opportunity')}}"><div class="red_button" id="new_campaign_btn">{{trans('New Campaign')}}</div></a>
            <div id="spacer"></div>
</div>
@include('common.bottom')
</body>
</html>