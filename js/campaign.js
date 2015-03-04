var preventStepRefresh = 0;
var currentStep = 0;
var campaignSteps = ['opportunity', 'candidates', 'content', 'preview', 'send'];

var campaignStepsErrors = {
    'opportunity': 'Please select opportunity',
    'candidates': 'Please select candidates pool',
    'content' : 'Please select email template',
}

var campaignStepsContainers = {
    'opportunity': 'opportunity-container', 
    'candidates': 'campaign-container', 
    'content': 'email-container', 
    'preview': 'preview-container', 
    'send': '',
}

var validationFields = {
    'opportunity': 'opportunity',
    'candidates': 'candidates-pool',
    'content': 'email-template'
}

function checkForCampaignSteps(step)
{
    if(step == campaignSteps.indexOf('preview'))
        loadcampaignPreview();
}

function campaignNextStep()
{
    preventStepFrefresh = 1;
    if( validationFields[campaignSteps[currentStep]] != undefined && ( ~~parseInt($('input[name='+validationFields[campaignSteps[currentStep]]+']:checked').val())  ) == 0)
    {
        showStepError(campaignStepsErrors[campaignSteps[currentStep]]);
    }else
    {
        $('#'+campaignStepsContainers[campaignSteps[currentStep]]).fadeOut('fast', function(){
            currentStep++;
            checkForCampaignSteps(currentStep);
            $.bbq.pushState('#'+campaignSteps[currentStep]);
            $('#'+campaignStepsContainers[campaignSteps[currentStep]]).fadeIn('fast');
            setProgressIndicator(campaignSteps[currentStep]);
        })
        $('html, body').animate({scrollTop: 0}, 'slow');
    }
    preventStepFrefresh = 0;
}

function campaignGoToStep(step)
{
    preventStepFrefresh = 1;
    if(campaignSteps.indexOf(step) == -1)
        return;
    checkForCampaignSteps(campaignSteps.indexOf(step));
    $('#'+campaignStepsContainers[campaignSteps[currentStep]]).fadeOut('fast', function(){
            currentStep = campaignSteps.indexOf(step);
            $.bbq.pushState('#'+step);
            $('#'+campaignStepsContainers[step]).fadeIn('fast');
            setProgressIndicator(step);
    })
    $('html, body').animate({scrollTop: 0}, 'slow');
    preventStepFrefresh = 0;
}

function showStepError(errorMsg) {
    var stepErrorContainer = $('#campaign-step-error-container');
    var errorContainerHeight = $('.campaign-step-container:visible').outerHeight();
    stepErrorContainer.height(errorContainerHeight - $('#button_holder:visible').outerHeight());
    stepErrorContainer.html('<span>' + errorMsg + '</span>');
    stepErrorContainer.fadeIn();
    $('html, body').animate({scrollTop: 0}, 'slow');
}

function showSaveCampaignform()
{
    $('#save-campaign-form').slideDown();
    $('html, body').animate({scrollTop: 0}, 'slow');
}
// Added by sourav 10-11-2014 //
function campaingNextButton(formName,errMsg)
{
    if (formName=='opportunity-form') {
        var radiovVal = $("input[name='opportunity']:checked").val();
    }
    //alert(radioVal);
    alert(errMsg);
}
//end//
$(function() {
    $('#preview-next-step-btn').on('click', function(){showSaveCampaignform()});
});