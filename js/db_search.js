var searchFilter = {
    guidCounter: 0,
    guid: '',
    categoryColours: { 'work': '#2ecc71', 'academic': '#9b59b6', 'sport': '#3498db', 'other': '#e74c3c', 'segment': '#F39C12' },
    category: null,
    subOption: null,
    $filterContainer: $('#current-filter'),
    selectedFilters: [],
    getGuid: function(){
        if(this.guid != '' && this.guidCounter < 2 )
        {
            this.guidCounter++;
            return this.guid;
        }
        var _guid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
            return v.toString(16);
        });
        this.guid = _guid;
        this.guidCounter = 1;
        return _guid;
    },
    updateCounter: function (count) {
        var container = $('#total');
        var oldValue = container.text().replace( /^\D+/g, '');
        $({someValue: oldValue}).delay(800).animate({someValue: count}, {
            duration: 1500,
            easing: 'swing', 
            step: function() { 
                container.text(commaSeparateNumber(Math.round(this.someValue)));
            }
        });
    },
    updateSearch: function(){
        var dataString = $('#search-form-filter').serialize();
        //alert(dataString);
        var self = this;
        $.ajax({
            type: 'POST',
            url : 'search',
            data : dataString,
            success : function(data){
            
            	//alert(data.sqldata);
            
                if( data.userCount == 0 )
                {
                    $('#create-campaign-button').hide();
                    //$('#create-campaign-usebutton').hide();
                }
                if( data.userCount > 0 )
                {
                    $('#create-campaign-button').show();
                    //$('#create-campaign-button').hide();
                    //$('#create-campaign-usebutton').show();
                }
                    
                self.updateCounter(data.userCount);
                //$('#campaign-users').val(data.users);
            }
        }, 'json');
        this.checkFiltersCount();
    },
    checkFiltersCount: function(){
        $('#search-form-filter').show();
        if($('#search-form-filter input[type=hidden]').length < 2 ) 
        {
            $('#search-form-filter').fadeOut();
            $('#new-candidate-pool-form').hide()
            this.$filterContainer.slideUp();
        }
        else if(this.$filterContainer.is(':visible') === false)
        {
            this.$filterContainer.slideDown(); 
        }
        $('.search-filter-sentence-container').each(function(index, value) {
            if( $(this).has('.filter-element').length == 0 )
                $(this).remove();
        });
        $('.search-filter-container').each(function(index, value) {
            if( $(this).has('.filter-element').length == 0 )
                $(this).remove();
        });
    }
}

function getFilterElement(text, name, value, groupName, groupDelete, guid){
    var name = name.replace(/[\[\]']+/g,'');
    var _template = '<div style="background-color: '+searchFilter.categoryColours[searchFilter.category]+';" class="filter-element" data-guid="'+guid+'">'+
                        text+
                        '<input type="hidden" value="'+value+'" name="'+name+'[]" data-group-name="'+groupName+'">'+
                    '<a id="x-'+name+'-'+value+'" class="remove-from-filter" onclick="removeElementFromFIlter(this);" data-group-delete="'+groupDelete+'">x</a>'+
                    '</div>';
    return _template;
}

function removeFilterContainer(target)
{
    var _target = $(target);
    _target.parent().fadeOut('fast', function(){
        _target.parent().remove();
        //alert('hi');
        searchFilter.updateSearch();
        searchFilter.checkFiltersCount();
    });
}

function getFilterContainer()
{
    return '<div class="search-filter-container" style="border-top: 10px solid '+searchFilter.categoryColours[searchFilter.category]+';">'+
        '<a class="remove-filter-container-btn" href="javascript:void(0)" onclick="removeFilterContainer(this)">x</a><div class="search-form-filter-container-clear-fix clear"></div></div>';
}

function removeElementFromFIlter(target){
    var _target = $(target);
    var correspondingInput = $('#'+_target.attr('id').substring(2));
    var _guid = _target.parent().attr('data-guid');
    //alert(_guid);
    if((_target.attr('data-group-delete') == 'true') && (_target.parent().find('input').attr('name') == 'language[]'))
    {
        //alert(11);
        //alert(_target);
        if(! _target.parent().prev('.remove-and-or').length)
        {
            //alert('hi');
            //alert(correspondingInput);
            _target.parent().next('.filter-element remove-and-or').remove();
            $("[data-guid='"+_guid+"']").remove();
            //$("[data-guid='"+_guid+"']").nextAll('.remove-and-or div:first').remove();
        }
        else
        {
            //alert('hello');
            _target.parent().prev('.remove-and-or').remove();
            $("[data-guid='"+_guid+"']").remove();
            //$("[data-guid='"+_guid+"']").prev('.remove-and-or').remove();
        }
    }
    else
    {
        //alert(22);
        if(! _target.parent().prev('.remove-and-or').length)
        {
            _target.parent().next('.remove-and-or').remove();
            //$("[data-guid='"+_guid+"']").nextAll('.remove-and-or div:first').remove();
        }
        else
        {
            _target.parent().prev('.remove-and-or').remove();
            //$("[data-guid='"+_guid+"']").prev('.remove-and-or').remove();
        }
    }
    
    if(_target.attr('data-group-delete') == 'true')
    {
        $("[data-guid='"+_guid+"']").remove();
    }
    if( _target.parent().find('input').attr('name') == 'max-work-length[]')
        $('#work-duration-max-sentence').remove();
    // added by sourav 12-01-2015 start
    if( _target.parent().find('input').attr('name') == 'university_to-university[]')
        $('#academic-university-to-sentence').remove();
    
    if( _target.parent().find('input').attr('name') == 'university_from-university[]')
    {
        $('#academic-university-from-sentence').remove();
        $('#academic-university-to-sentence').text(searchDescriptionLabels['academic']['university']['university_to-university']);
    }
    //added by sourav 12-01-2015 end
    if( _target.parent().find('input').attr('name') == 'min-work-length[]')
    {
        $('#work-duration-min-sentence').remove();
        $('#work-duration-max-sentence').text(searchDescriptionLabels['work']['length']['max-work-length']);
    }
    _target.parent().find('input').remove();
    _target.parent().hide(500, function()
        {
            _target.parent().remove();
            //alert('hello');
            searchFilter.updateSearch();
            searchFilter.checkFiltersCount();
        });
    
    correspondingInput.removeAttr('checked').removeAttr('selected');
}

function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
}
$(document).ready(function() {
    $('.sub_option_filter').hide();
    $('.sub_option_container').hide();
    //$('#create-campaign-button').hide();//added later
    //$('#create-campaign-button').on('click', function(){$('#new-candidate-pool-form').slideDown();})
    $('#create-campaign-button').on('click', function(){
        //alert(2);
        
        $('#create_candidatepool_type').show();
    })
    //$('#new-candidates-pool-cancel-btn').on('click', function(){$('#new-candidate-pool-form').slideUp();})
    $('#new-candidates-pool-cancel-btn').on('click', function(){$('#create_candidatepool_type').hide();})
    

    $('.add-to-filter-btn').click(function() {
        var selectedItems = $('#search-form :input:visible').serializeArray();
       // alert(1);
        var elementText = 'Invalid argument';
        var filterElement = '';
        var filterElements = '';
        var filterSentence = '';
        var filterContainerName = '';
        searchFilter.guid = '';
        if(selectedItems.length > 0)
        {
            //$('#search-form-filter #search-form-filter-clear-fix').before( getFilterContainer() );
            //alert(selectedItems.length);
        }
        //alert(("#search_criteria").val());
        //var counter = 0;
        for( var index in selectedItems ){
            var domItemName  = selectedItems[index].name.replace(/[\[\]']+/g, '');
            var domItemId    = domItemName + '-' + selectedItems[index].value;
            var domItem      = $('#' + domItemId);
            var searchCriteria = $('#search_criteria').val();
            if(searchCriteria == 1)
            {
                searchMidVaue = '<div style="background-color: #858585; padding: 5px 15px 5px 15px;" class="filter-element remove-and-or">and</div>';
            }
            else if(searchCriteria == 2)
            {
                searchMidVaue = '<div style="background-color: #858585; padding: 5px 15px 5px 15px;" class="filter-element remove-and-or">or</div>';
            }
            //alert(searchCriteria);
            
            if(domItem.length === 0)
                domItem = $('#' + domItemName);
            //alert(domItemName);
            //alert(counter);
            domItemType = domItemName.split('-');
            if((domItemType[0] == 'language' && domItemType[1] == 'level') || (domItemType[0] == 'skill' && domItemType[1] == 'level'))
            {
                searchMidVaue = '';
                if(domItemType[0]=='skill')
                {
                    //alert(1);
                    $("#academic-skills :input[domItemName]").find(domItemName).remove();
                }
                if(domItemType[0]=='language')
                {
                    //
                    var lengthval = $('#academic-languages input[name="language-level-'+domItemType[2]+'[]"]').length;
                    //var lengthval = $('#academic-languages input[name="language-level-38"]').length;
                    //alert(lengthval);
                    if(lengthval>0)
                    {
                        //alert(2);
                        $('#academic-languages input[name="language-level-'+domItemType[2]+'[]"]').parent("div").remove();
                        //$('#academic-languages').remove();
                        //$('.add-to-filter-btn').click();
                        //$('#academic-languages input[name="language-level-'+domItemType[2]+'[]"]').value=domItem.val();
                        //$('#academic-languages input[name="language-level-'+domItemType[2]+'[]"]').parent("div").text = domItem.find('option:selected').text();
                    }
                }
                //$('#' + domItemName).remove();
            }
            if( domItemName == 'university_from' )
            {
                $('#academic-university-university_from').remove();
            }
            if( domItemName == 'university_to' )
            {
                $('#academic-university-university_to').remove();
            }
            if( domItemName == 'min-work-length' )
            {
                $('#work-length-min-work-length').remove();// added by SD date 31_12_2014 5:06pm
                $('#work-length-max-work-length').remove();
            }
            
            if( $('#x-' + domItemId).length > 0 || ( domItem.val() == '' || (~~parseInt(domItem.val())) == 0 ) )
            {
                continue;
            }
            if( domItem.is('select') ){
                elementText = domItem.find('option:selected').text();
                
            }else if( domItem.is('input[type="text"]') ){
                elementText = domItem.val();
                
            }else if( domItem.is(':checkbox') || domItem.is(':radio') ){   
                elementText = domItem.parent().text();
            }
            
            if(typeof searchDescriptionLabels[searchFilter.category][searchFilter.subOption][domItemName] == 'undefined'){
                filterSentence = searchDescriptionLabels[searchFilter.category][searchFilter.subOption];
                filterContainerName = searchFilter.category+'-'+searchFilter.subOption;
                
            }else
            {
                filterContainerName = searchFilter.category+'-'+searchFilter.subOption+'-'+domItemName;
                filterSentence = searchDescriptionLabels[searchFilter.category][searchFilter.subOption][domItemName];
            }
            
            //alert(filterContainerName);
            //added by sourav 12_01_2015 start
            //if(filterContainerName ==  'academic-university-university_from-university')
            //   filterSentence = '<div style="float: left; margin-top: 5px;" id="academic-university-from-sentence">' + filterSentence + '</div>';
            //added by sourav 12_01_2015 end
            if(filterContainerName ==  'work-length-min-work-length')
                filterSentence = '<div style="float: left; margin-top: 5px;" id="work-duration-min-sentence">' + filterSentence + '</div>';
            else
                filterSentence = '<div style="float: left; margin-top: 5px;">' + filterSentence + '</div>';
                
            if(filterContainerName == 'academic-languages-language')
                filterContainerName = 'academic-languages';
            if (filterContainerName == 'academic-skills-skill')
                filterContainerName = 'academic-skills';
            
            filterElement = getFilterElement(elementText, domItemName + '[]', selectedItems[index].value, domItem.attr('data-group-name'), domItem.attr('data-group-delete'), searchFilter.getGuid());
            filterElements = '<div class="search-filter-sentence-container" id="'+filterContainerName+'" data-category="'+searchFilter.category+'">' + filterSentence + filterElement + '<div class="clear"></div></div>';
            //alert(filterSentence);   alert(filterElement);       
            if( filterContainerName ==  'work-length-max-work-length')
            {
                if($('#work-length-min-work-length').length == 1)
                {
                    $('#work-length-min-work-length .clear').before('<div style="float: left; margin-top: 5px;" id="work-duration-max-sentence"> &nbsp;and less than </div>' + filterElement);
                    //return; // comented by SD at 31_12_2014 3:35pm
                    break; // added by SD at 31_12_2014 6:37pm
                }
            }
            if( ( $('#' + filterContainerName).length == 0  && $('#search-form-filter [data-category="'+searchFilter.category+'"]').length == 0 )
                || ( $('#search-form-filter [data-category="'+searchFilter.category+'"]').length > 0  && $('#' + filterContainerName).length == 0 )
            )
            {
                $('#search-form-filter #search-form-filter-clear-fix').before( getFilterContainer() );
                $('.search-filter-container:last .search-form-filter-container-clear-fix').before( filterElements );
            }
            else
            {
                $('#' + filterContainerName + ' .clear').before(searchMidVaue + filterElement);
            }
        }

        //alert($(this).attr('class'));
        $(this).parent().parent().parent().hide();
        $('.sub_option_container').fadeOut();
        $('#sub_option_'+searchFilter.subOption).removeClass('selected');
        $("#later_display").show();
        //alert('1');
        searchFilter.updateSearch();
        searchFilter.checkFiltersCount();
    });

    $('.option_icon_box').click(function() {
        var targetContainer = $(this).attr('id').split('_', 1);
        searchFilter.category = targetContainer;
        $('.option_icon_box').removeClass("option_box_selected");
        $(this).addClass("option_box_selected");
        $('.sub_option_container').hide();
        $('.sub_option_filter').hide();
        $('.sub_option').removeClass('selected');
        if($('#sub_option_container_'+targetContainer).length >0)
            $('#sub_option_container_'+targetContainer).show();
        else
            $('#sub_option_'+targetContainer+'_filter').show();
    });
    
    $('.sub_option').click(function() {
        
        var targetFilter = $(this).attr('id').split('_', 3);
        //alert(targetFilter);
        searchFilter.subOption = targetFilter[2];
        $('.sub_option_filter').hide();
        $('.sub_option').removeClass('selected');
        $('#sub_option_'+searchFilter.category +'_filter_'+searchFilter.subOption).show();
        $(this).addClass('selected');
    });

// AL Additions //
	
	$(".key_skill select").hide();
	
    $(".checkbox_container_option").click(function() {

        function toggleBox(thisInstance) {
            var input = $(thisInstance).find('input');
            $(thisInstance).toggleClass("checkbox_container_selected");
            $(thisInstance).children().toggleClass("checkbox_checked");
            $(thisInstance).parent(".key_skill").toggleClass("skill_selected");

            if(input.attr('checked') == 'checked') {
                input.removeAttr('checked');
                toggleCheckboxValue = false;
            }else{
                input.attr('checked','checked');
                toggleCheckboxValue = true;
            }
            
            if($(thisInstance).next().is('select'))
            {
                if (toggleCheckboxValue) {
                    $(thisInstance).next().show();
                }
                else {
                    $(thisInstance).next().hide();
                }
            }
        }
        var parentId = $(this).parent().attr("id");
        if (parentId == "key_experience_container") {
                toggleBox(this);
        }

        else if (parentId == "capabilities_container") {
            var checkedCheckboxCount = $("#capabilities_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }

        else if (parentId == "attributes_container") {
            var checkedCheckboxCount = $("#attributes_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }
        else if (parentId == "job_type_container") {
            var checkedCheckboxCount = $("#job_type_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }
        else if (parentId == "job_location_container") {
            var checkedCheckboxCount = $("#job_location_container .checkbox_container_selected").size();
            if (checkedCheckboxCount <= maxSelectedOptions) {
                toggleBox(this);
            }
            else if ($(this).hasClass("checkbox_container_selected")) {
                toggleBox(this);
            }
        }
        else {
            toggleBox(this);
        }
    });
    
    $(".and_search").click(function() {
    	$(this).toggleClass("search_type_on");
    	$(".or_search").toggleClass("search_type_on");
    });
    
    $(".or_search").click(function() {
    	$(this).toggleClass("search_type_on");
    	$(".and_search").toggleClass("search_type_on");
    });

});